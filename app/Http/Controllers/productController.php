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

        $url = $params['image'];
        $time = time();
        $imgpath = 'D:\learn_laravel\example-app\public\storage\images\image' . $time . '.png';
        $img = 'http://[::1]:5173/storage/app/public/images/image' . $time . '.png';
        // Function to write image into file
        file_put_contents($imgpath, file_get_contents($url));

        $data = [
            'name' => $params['name'],
            'image' => $img,
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
        $product = Product::findOrFail($id);
        $delete = $product->delete();

        return response()->json([
            'message' => "delete success",
            'data' => $product,
        ], 200);
    }
}
