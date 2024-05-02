<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Song::with('category')->get();
        return response()->json([
            'status' => 'success',
            'message' => 'Songs retrieved successfully.',
            'data' => [$data]
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Song::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Song created successfully.',
            'data' => $data
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Song::find($id);
        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Song retrieved successfully.',
                'data' => $data
            ], 200);

        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Song not found.'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Song::find($id);
        if ($data) {
            $data->update($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Song updated successfully.',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Song not found.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Song::find($id);
        if ($data) {
            $data->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Song deleted successfully.',
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Song not found.'
            ], 404);
        }
    }
}
