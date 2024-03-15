<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Intervention\Image\ImageManager;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::orderBy('id', 'desc')->get();

        return response()->json([
            'message' => "get images success",
            'data' => $images,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'image_url' => 'nullable|url|required_without:image',
            'image' => 'nullable|image|required_without:image_url',
        ]);

        // $url = $params['image_url'];
        // $filename = 'image.jpg';

        // $ch = curl_init($url);

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // $fileContent = curl_exec($ch);

        // curl_close($ch);

        $url = $params['image_url'];
        $time = time();
        $imgpath = 'D:\learn_laravel\example-app\public\storage\images\image' . $time . '.png';
        $img = 'image' . $time . '.png';
        // Function to write image into file
        file_put_contents($imgpath, file_get_contents($url));

        if ($request->file('image')) {
            $image_path = $request->file('image')->store('images', 'public');

            Image::create([
                'image_url' => null,
                'image' => $image_path,
            ]);

            return response()->json([
                'message' => 'create image success',
            ], 200);
        }

        Image::create([
            'image_url' => $img,
            'image' => null,
        ]);

        try {
            return response()->json([
                'message' => 'create image success',
                'data' => $img,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'create image fail',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Image::query()->findOrFail($id);

        try {
            $image->delete();
            return response()->json([
                'message' => 'delete image success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'delete image fail',
            ]);
        }
    }
}
