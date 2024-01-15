<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{

    public function index()
    {
        try {
            $blogs = DB::table('blogs')->get();


            return view('admin.blog.index', compact('blogs'));
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function create($id = "")
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        return view('admin.blog.create', compact('id', 'blog'));
    }


    public function store(Request $request)
    {

        $title = $request->title;
        $seo_title = $request->seo_title;
        $description = $request->description;
        $content = $request->content;
        $categorie = $request->categorie;
        $status = $request->status;

        $slug = Str::slug($title, '-');
        $blog = new Blog(); // Assuming you have a CarType model

        if ($request->id == '') {
            // add record
            $car_image = $request->file('car_image');

            if ($car_image) {
                $path = "assets/admin/cars/blog"; // Adjusted path

                // Move the car image
                $fileName_car_image = time() . '_car.' . $car_image->extension();
                $result_car = $car_image->move(public_path($path), $fileName_car_image);

                if ($result_car) {
                    // Data insert
                    $blog->title = $title;
                    $blog->slug = $slug;
                    $blog->seo_title = $seo_title;
                    $blog->description = $description;
                    $blog->content = $content;
                    $blog->categorie = $categorie;
                    $blog->car_image = $fileName_car_image;
                    $blog->status = $status;

                    if ($blog->save()) {
                        return redirect(route('admin.blog.index'))->with('success', 'Car type saved successfully.');
                    }
                }
            }
        } else {
            // update record
            $data = [
                'title' => $title,
                'slug' => $slug,
                'seo_title' => $seo_title,
                'description' => $description,
                'content' => $content,
                'categorie' => $categorie,
                'status' => $status,
            ];


            if ($request->hasFile('car_image')) {
                $icon_image = $request->file('car_image');
                $path = "assets/admin/cars/blog"; // Adjusted path
                // Move the car image
                $fileName_car_image = time() . '_car.' . $icon_image->extension();
                $result_car = $icon_image->move(public_path($path), $fileName_car_image);
                $data['car_image'] = $fileName_car_image;
            }

            $result = DB::table('blogs')->where('id', $request->id)->update($data);

            if ($result) {
                return redirect(route('admin.blog.index'))->with('success', 'Car type updated successfully.');
            }
        }

        return redirect()->back()->with('error', 'Failed to process the form. Please try again.');
    }


    public function destory(Request $request)
    {

        try {
            $id = $request->id;
            DB::table('blogs')->where('id', $id)->delete();
            return redirect()->back()->with('error', 'Row has been deleted!successfully.');
        } catch (\Throwable $th) {

            echo "Error Message: " . $th->getMessage();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
