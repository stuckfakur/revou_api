<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Categories retrieved successfully.',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Category::create($request->all());
        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Category created successfully.',
                'data' => $data
            ]);
        }else {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not created.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Category::find($id);
        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Category retrieved successfully.',
                'data' => $data
            ]);
        }else {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found.'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Category::find($id);
        if ($data) {
            $data->update($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Category updated successfully.',
                'data' => $data
            ],200);
        }else {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Category::find($id);
        if ($data) {
            $data->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Category deleted successfully.',
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found.'
            ], 404);
        }
    }
}
