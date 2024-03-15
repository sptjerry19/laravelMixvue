<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::query()->paginate(10);

        $pagination = [
            'currentPage' => $videos->currentPage(),
            'count' => $videos->count(),
            'lastPage' => $videos->lastPage(),
            'perPage' => $videos->perPage(),
            'total' => $videos->total(),
        ];

        return response()->json([
            'message' => "get data videos success",
            'data' => $videos->items(),
            'pagination' => $pagination,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'name' => 'required|string|max:500',
            'video' => 'required|url',
        ]);

        $video_url = $params['video'];


        exec('youtube-dl -f "bestvideo[ext=mp4]" -o "video.mp4" ' . $video_url);

        Video::create([
            'name' => $params['name'],
            'video' => $video_data,
        ]);

        try {
            return response()->json([
                'message' => 'create video success',
                'data' => $video_data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'create video fail',
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
