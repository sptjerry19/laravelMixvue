<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

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
            'image_url' => $params['image_url'],
            'image' => null,
        ]);

        try {
            return response()->json([
                'message' => 'create image success',
                'data' => $params,
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
