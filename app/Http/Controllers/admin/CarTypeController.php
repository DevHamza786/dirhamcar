<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;



class CarTypeController extends Controller
{
    public function index()
    {
        try {

            $carTypes = DB::table('car_types')->get();
            return view('admin.car_types.index', compact('carTypes'));
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function create($id = "")
    {
        $carType = DB::table('car_types')->where('id', $id)->first();
        return view('admin.car_types.create', compact('id', 'carType'));
    }


    public function store(Request $request)
    {


        try {
            $name = $request->name;
            $slug = Str::slug($name, '-');
            $request->merge(['slug' => $slug]);
            $request->validate([
                'name' => 'required|string',
                'slug' => [
                    'required',
                    'string',
                    Rule::unique('car_types', 'slug')->ignore($request->input('id')),
                ],
                'price_aed' => 'required|numeric',
                'price_usd' => 'required|numeric',
                'status' => 'required',
                'icon_image' => [
                    'sometimes', // Apply the validation rules only if 'car_icon' is present in the request
                    'image',
                    'mimes:jpeg,png,jpg,gif',
                    'max:2048',
                    Rule::unique('car_types', 'car_icon')->ignore($request->input('id')),
                ],
                'car_image' => [
                    'sometimes', // Apply the validation rules only if 'car_image' is present in the request
                    'image',
                    'mimes:jpeg,png,jpg,gif',
                    'max:2048',
                    Rule::unique('car_types', 'car_image')->ignore($request->input('id')),
                ],
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, Laravel will automatically redirect back with errors
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        }
        $carType = new CarType(); // Assuming you have a CarType model
        $price_aed = $request->price_aed;
        $price_usd = $request->price_usd;
        $status = $request->status;
        if ($request->id == '') {
            // add record
            $carType = new CarType(); // Instantiate a new CarType model


            $icon_image = $request->file('icon_image');
            $car_image = $request->file('car_image');

            if ($icon_image && $car_image) {
                $path = "assets/admin/cars"; // Adjusted path
                $fileName_icon_image = time() . '_icon.' . $icon_image->extension();
                $result_icon = $icon_image->move(public_path($path), $fileName_icon_image);

                // Move the car image
                $fileName_car_image = time() . '_car.' . $car_image->extension();
                $result_car = $car_image->move(public_path($path), $fileName_car_image);

                if ($result_icon && $result_car) {

                    // Data insert
                    $carType->name = $name;
                    $carType->slug = $slug;
                    $carType->price_aed = $price_aed;
                    $carType->price_usd = $price_usd;
                    $carType->car_icon = $fileName_icon_image;
                    $carType->car_image = $fileName_car_image;
                    $carType->status = $status;

                    if ($carType->save()) {
                        return redirect(route('admin.carType.index'))->with('success', 'Car type saved successfully.');
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

            if ($request->hasFile('icon_image')) {


                $icon_image = $request->file('icon_image');
                $path = "assets/admin/cars";
                $fileName_icon_image = time() . '_icon.' . $icon_image->extension();
                $result_icon = $icon_image->move(public_path($path), $fileName_icon_image);
                $data['car_icon'] = $fileName_icon_image;
            }

            if ($request->hasFile('car_image')) {
                $icon_image = $request->file('car_image');
                $path = "assets/admin/cars";
                // Move the car image
                $fileName_car_image = time() . '_car.' . $icon_image->extension();
                $result_car = $icon_image->move(public_path($path), $fileName_car_image);
                $data['car_image'] = $fileName_car_image;
            }

            $result = DB::table('car_types')->where('id', $request->id)->update($data);

            if ($result) {
                return redirect(route('admin.carType.index'))->with('success', 'Car type updated successfully.');
            }
        }

        return redirect()->back()->with('error', 'Failed to process the form. Please try again.');
    }


    public function destory(Request $request)
    {

        try {
            $id = $request->id;
            DB::table('car_types')->where('id', $id)->delete();
            return redirect()->back()->with('error', 'Row has been deleted!successfully.');
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
