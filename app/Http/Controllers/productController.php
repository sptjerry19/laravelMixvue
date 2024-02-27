<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'message' => "get products success",
            'data' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $params = $request->validated();

        // $image_path = $request->file('image')->store('images', 'public');

        $data = [
            'name' => $params['name'],
            'image' => $params['image'],
            'description' => $params['description'],
            'star' => $params['star'] ?? 5,
            'Evaluate' => $params['Evaluate'],
            'sold' => $params['sold'],
            'discount' => $params['discount'] ?? 0,
            'price' => $params['price'],
            'Classify' => $params['Classify'] ?? null,
            'size' => $params['size'] ?? null,
            'views' => $params['views'] ?? 0,
        ];

        $product = Product::create($data);

        try {
            return response()->json([
                'message' => 'create product success',
                'data' => $product,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'create product fail',
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
        //
    }
}
