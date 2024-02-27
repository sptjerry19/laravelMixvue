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
        $images = Image::all();

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
            'image_url' => 'nullable|required_without:image',
            'image' => 'nullable|required_without:image_url',
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
}
