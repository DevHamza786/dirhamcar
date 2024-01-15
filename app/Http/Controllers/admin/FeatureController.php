<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CarFeature;
use App\Models\CarType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
class FeatureController extends Controller
{
    public function index()
    {
        try {
            $carFeatures = DB::table('car_features')->get();

            return view('admin.features.index', compact('carFeatures'));
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function create($id = "")
    {
        $carFeature = DB::table('car_features')->where('id', $id)->first();
        return view('admin.features.create', compact('id', 'carFeature'));
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
                        Rule::unique('car_features', 'name')->ignore($request->input('id')),
                    ],
                    'car_image' => [
                        'sometimes', // Apply the validation rules only if 'car_image' is present in the request
                        'image',
                        'mimes:jpeg,png,jpg,gif',
                        'max:2048',
                        Rule::unique('car_features', 'car_image')->ignore($request->input('id')),
                    ],
                ]);


        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, Laravel will automatically redirect back with errors
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        }

        $carFeature = new CarFeature(); // Assuming you have a CarType model
        $status = $request->status;
        if ($request->id == '') {
            // add record
            $carType = new CarType(); // Instantiate a new CarType model



            $car_image = $request->file('car_image');

            if ($car_image) {
                $path = "assets/admin/cars/feature"; // Adjusted path

                // Move the car image
                $fileName_car_image = time() . '_car.' . $car_image->extension();
                $result_car = $car_image->move(public_path($path), $fileName_car_image);

                if ($result_car) {

                    // Data insert
                    $carFeature->name = $name;
                    $carFeature->slug = $slug;
                    $carFeature->car_image = $fileName_car_image;
                    $carFeature->status = $status;

                    if ($carFeature->save()) {
                        return redirect(route('admin.feature.index'))->with('success', 'Car type saved successfully.');
                    }
                }
            }
        } else {
            // update record
            $data = [
                'name' => $name,
                'slug' => Str::slug($name, '-'),
                'status' => $status,
            ];

            if ($request->hasFile('car_image')) {
                $icon_image = $request->file('car_image');
                $path = "assets/admin/cars/feature"; // Adjusted path
                // Move the car image
                $fileName_car_image = time() . '_car.' . $icon_image->extension();
                $result_car = $icon_image->move(public_path($path), $fileName_car_image);
                $data['car_image'] = $fileName_car_image;
            }

            $result = DB::table('car_features')->where('id', $request->id)->update($data);

            if ($result) {
                return redirect(route('admin.feature.index'))->with('success', 'Car type updated successfully.');
            }
        }

        return redirect()->back()->with('error', 'Failed to process the form. Please try again.');
    }


    public function destory(Request $request)
    {

        try {
            $id = $request->id;
            DB::table('car_features')->where('id', $id)->delete();
            return redirect()->back()->with('error', 'Row has been deleted!successfully.');
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
