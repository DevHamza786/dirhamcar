<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CarAddon;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AddonController extends Controller
{
    public function index()
    {
        try {

            $carAddon = DB::table('car_addons')->get();
            return view('admin.addon.index', compact('carAddon'));
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function create($id = "")
    {
        $carAddon = DB::table('car_addons')->where('id', $id)->first();
        return view('admin.addon.create', compact('id', 'carAddon'));
    }


    public function store(Request $request)
    {


        try {

            $name = $request->name;
            $slug = Str::slug($name, '-');


            $request->merge(['slug' => $slug]);
            $request->validate([

                'name' => [
                    'required',
                    'string',
                    Rule::unique('car_addons', 'name')->ignore($request->input('id')),
                ],

                'price_aed' => 'required|numeric',
                'price_usd' => 'required|numeric',
                'status' => 'required',
                'car_image' => [
                    'sometimes', // Apply the validation rules only if 'car_image' is present in the request
                    'image',
                    'mimes:jpeg,png,jpg,gif',
                    'max:2048',
                    Rule::unique('car_addons', 'car_image')->ignore($request->input('id')),
                ],
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, Laravel will automatically redirect back with errors
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        }
        $carAddon = new CarAddon(); // Assuming you have a CarType model
        $price_aed = $request->price_aed;
        $price_usd = $request->price_usd;
        $status = $request->status;
        if ($request->id == '') {
            // add record


            $car_image = $request->file('car_image');

            if ($car_image) {
                $path = "assets/admin/cars/addon"; // Adjusted path


                // Move the car image
                $fileName_car_image = time() . '_car.' . $car_image->extension();
                $result_car = $car_image->move(public_path($path), $fileName_car_image);

                if ($result_car) {

                    // Data insert
                    $carAddon->name = $name;
                    $carAddon->slug = $slug;
                    $carAddon->price_aed = $price_aed;
                    $carAddon->price_usd = $price_usd;
                    $carAddon->car_image = $fileName_car_image;
                    $carAddon->status = $status;

                    if ($carAddon->save()) {
                        return redirect(route('admin.addon.index'))->with('success', 'Car type saved successfully.');
                    }
                }
            }
        } else {
            // update record
            $data = [
                'name' => $name,
                'slug' => Str::slug($name, '-'),
                'price_aed' => $price_aed,
                'price_usd' => $price_usd,
                'status' => $status,
            ];


            if ($request->hasFile('car_image')) {
                $icon_image = $request->file('car_image');
                $path = "assets/admin/cars/addon";
                // Move the car image
                $fileName_car_image = time() . '_car.' . $icon_image->extension();
                $result_car = $icon_image->move(public_path($path), $fileName_car_image);
                $data['car_image'] = $fileName_car_image;
            }

            $result = DB::table('car_addons')->where('id', $request->id)->update($data);

            if ($result) {
                return redirect(route('admin.addon.index'))->with('success', 'Car type updated successfully.');
            } else {
                return redirect(route('admin.addon.index'));
            }
        }

        return redirect()->back()->with('error', 'Failed to process the form. Please try again.');
    }


    public function destory(Request $request)
    {

        try {
            $id = $request->id;
            DB::table('car_addons')->where('id', $id)->delete();
            return redirect()->back()->with('error', 'Row has been deleted!successfully.');
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
