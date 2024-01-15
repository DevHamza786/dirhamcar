<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarAddon;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class RevervationController extends Controller

{
    public function index()
    {

        $reversations = Reservation::latest()->with('car_details', 'user_details')->get();
        return view('admin.revervation.index', compact('reversations'));
    }
    public function revervationDriver(Request $request)
    {
        $reversations = Reservation::with('car_details', 'user_details')->where("id", $request->id)->first();
        
        return view('admin.revervation.driver', compact('reversations'));
    }

    public function downloadPage(Request $request)
    {
        //  dd($request->id);
        $url = route("admin.revervation.invoice", ['id' => $request]);
        $response = Http::get($url);

        if ($response->successful()) {
            $content = $response->body();

            // Save the content to a file

            return 'Page downloaded successfully!';
        } else {
            return 'Failed to download page. HTTP status code: ' . $response->status();
        }
    }

    public function invoicePdf(Request $request)
    {
        $id = $request->id;
        $data = Reservation::with('car_details', 'user_details')->where('id', $id)->first();
        $startDate = Carbon::parse($data['pickup_date']);
        $endDate = Carbon::parse($data['return_date']);
        $daysDifference = $endDate->diffInDays($startDate);
        $data['days'] = $daysDifference;
        $addon_ids = explode(',', $data->addon_details);

        $carAddon = CarAddon::whereIn('id', $addon_ids)->get();
        $data['carAddon'] = $carAddon;
        $cars = Car::where('id', $data['car_id'])->first();
        if ($data['currency'] == 'aed') {

            $data['car_price'] = $cars->price_aed;
        } else {
            $data['car_price'] = $cars->price_usd;
        }
        if ($data['payment_status'] == 3) {
            $getValue = $data['car_price'] / $cars->tax;
            $data['car_price'] = $data['car_price'] + $getValue;
        }

        // dd($data);
        return view('admin.revervation.invoice', compact('data', 'id'));
    }

    public function downloadPagePDF(Request $request){
        $id = $request->id;
        $data = Reservation::with('car_details', 'user_details')->where('id', $id)->first();
        $startDate = Carbon::parse($data['pickup_date']);
        $endDate = Carbon::parse($data['return_date']);
        $daysDifference = $endDate->diffInDays($startDate);
        $data['days'] = $daysDifference;
        $addon_ids = explode(',', $data->addon_details);

        $carAddon = CarAddon::whereIn('id', $addon_ids)->get();
        $data['carAddon'] = $carAddon;
        $cars = Car::where('id', $data['car_id'])->first();
        if ($data['currency'] == 'aed') {

            $data['car_price'] = $cars->price_aed;
        } else {
            $data['car_price'] = $cars->price_usd;
        }
        if ($data['payment_status'] == 3) {
            $getValue = $data['car_price'] / $cars->tax;
            $data['car_price'] = $data['car_price'] + $getValue;
        }

        $imageUrl = 'http://www.door2affiliate.com/assets/admin/image/logo.png';
        $imageData = Http::get($imageUrl)->body();
        $base64Image = base64_encode($imageData);

        $pdf = new Dompdf();

        $pdf->loadHtml(View::make('admin.revervation.invoicepdf',['data' => $data,'base64Image' => $base64Image]));
        $pdf->setPaper([0, 0, 920, 3700]);
        $pdf->setBasePath(public_path());


        // Render the PDF


        $pdf->render();

        // Output the generated PDF to the browser
        return $pdf->stream('sample.pdf');
    }
}
