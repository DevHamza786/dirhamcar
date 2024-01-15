<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CarController extends Controller
{
    public function index()
    {

        try {

      $cars = DB::table('cars')->orderByDesc('id')->get();
   

            return view('admin.cars.index', compact('cars'));
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function create($id = "")
    {
       
        $car = DB::table('cars')->where('id', $id)->first();
        $carTypes = DB::table('car_types')->where('status',1)->get();
        $carFeatures = DB::table('car_features')->where('status',1)->get();
      
        if($car !==null){
                $value = $car->car_feature_id;
                $idArray = explode(',', $value);
        
                $carFeatureSingle = $idArray;
        }else{
            $car_feature_id="";
            $carFeatureSingle="";
        }



        return view('admin.cars.create', compact('id', 'carFeatureSingle','car', 'carTypes', 'carFeatures'));
    }


    public function store(Request $request)
    {



        try {

            $model = $request->model;
            $year = $request->year;
            $gear_shift = $request->gear_shift;
            $passager = $request->passager;
            $baggage = $request->baggage;
            $door = $request->door;
            $car_detail = $request->car_detail;
            $price_aed = $request->price_aed;
            $price_usd = $request->price_usd;
            $car_type_id = $request->car_type_id;
            $mileage = $request->mileage;
            $title = $request->title;
            $car_feature_id = $request->car_feature_id;
            $car_color = $request->car_color;
            $meta_title = $request->meta_title;
            $seo_content = $request->seo_content;
            $meta_description = $request->meta_description;
            $status = $request->status;
            $id = $request->id;
            $branches = $request->branches;
            $tax = $request->tax;
            $features_status=$request->features_status;
            
          if($car_feature_id==null){
              $car_feature_id="";
          }else{
              $car_feature_id=implode(',',$car_feature_id);
          }

if ($features_status== 'on') {
    $features_status=1;
}else{
       $features_status=0;
}
            $request->validate([

                'model' => [
                    'required',
                    'string',
                    Rule::unique('cars', 'model')->ignore($request->input('id')),
                ],
                'price_aed' => 'required|numeric',
                'price_usd' => 'required|numeric',
                'status' => 'required',

                'car_image' => [
                    'sometimes', // Apply the validation rules only if 'car_image' is present in the request
                    //'image',
                    //'mimes:jpeg,png,jpg,gif',
                    //'max:2048',
                    Rule::unique('cars', 'car_image')->ignore($request->input('id')),
                ],
                'mileage' => 'required',
                'passager' => 'required',
                'car_color' => 'required',
                'title' => 'required',
                // 'meta_title' => 'required',
                // 'seo_content' => 'required',
                //'meta_description' => 'required',
                //'car_feature_id' => 'required',
                'branches' => 'required',
                'tax' => 'required',

            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, Laravel will automatically redirect back with errors
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        }
        $car = new Car(); // Assuming you have a CarType model

        if ($request->id == '') {



            $car_image = $request->file('car_image');

            if ($car_image) {

         $car_image = $request->file('car_image');

            if ($car_image) {
                $fileName_car_name=[];
            foreach ($car_image as $car_images) {
                 $path = "assets/admin/cars";
                 $fileName_car_image  = time() . '_' . $car_images->getClientOriginalName();
                $result_car = $car_images->move(public_path($path), $fileName_car_image);
                    $fileName_car_name[]=$fileName_car_image;
            }

            }
            


                if ($result_car) {
                    

                    // Data insert
                    $car->model = $model;
                    $car->year = $year;
                    $car->gear_shift = $gear_shift;
                    $car->baggage = $baggage;
                    $car->door = $door;
                    $car->passager = $passager;
                    $car->car_detail = $car_detail;
                    $car->price_aed = $price_aed;
                    $car->price_usd = $price_usd;
                    $car->car_type_id = $car_type_id;
                    $car->milage = $mileage;
                    $car->title = $title;
                    $car->car_feature_id = $car_feature_id;
                    $car->meta_title = $meta_title;
                    $car->seo_content = $seo_content;
                    $car->meta_description = $meta_description;
                    $car->car_image =implode(',',$fileName_car_name);
                    $car->car_color = $car_color;
                    $car->branches = $branches;
                    $car->tax = $tax;
                    $car->status = $status;
                    $car->is_feature=$features_status;

                    if ($car->save()) {
                        return redirect(route('admin.car.index'))->with('success', 'Car type saved successfully.');
                    }
                }
            }
        } else {

            // update record
            $data = [
                'model' => $model,
                'year' => $year,
                'gear_shift' => $gear_shift,
                'passager' => $passager,
                'baggage' => $baggage,
                'door' => $door,
                'car_detail' => $car_detail,
                'price_aed' => $price_aed,
                'price_usd' => $price_usd,
                'car_type_id' => $car_type_id,
                'milage' => $mileage,
                'title' => $title,
                'car_feature_id' => $car_feature_id,
                'meta_title' => $meta_title,
                'seo_content' => $seo_content,
                'meta_description' => $meta_description,
                'car_color' => $car_color,
                'status' => $status,
                'branches' => $branches,
                'tax' => $tax,
                'is_feature'=>$features_status,
            ];

            $car_image=$request->hasFile('car_image');
            if ($car_image) {
                  $car_image = $request->file('car_image');
                 $fileName_car_name=[];
                 foreach ($car_image as $car_images) {
                 $path = "assets/admin/cars";
                 $fileName_car_image  = time() . '_' . $car_images->getClientOriginalName();
                $result_car = $car_images->move(public_path($path), $fileName_car_image);
                    $fileName_car_name[]=$fileName_car_image;
            }
                $data['car_image'] = implode(',',$fileName_car_name);
            }


            $result = DB::table('cars')->where('id', $request->id)->update($data);

            if ($result) {
                return redirect(route('admin.car.index'))->with('success', 'Car type updated successfully.');
            }else{
                return redirect(route('admin.car.index'))->with('success', 'Car type updated successfully.');
            }
        }

        return redirect()->back()->with('error', 'Failed to process the form. Please try again.');
    }


    public function destory(Request $request)
    {

        try {
            $id = $request->id;
            DB::table('cars')->where('id', $id)->delete();
            return redirect()->back()->with('error', 'Row has been deleted!successfully.');
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
