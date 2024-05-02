<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Book::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Success get data',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Book::create($request->all());
        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Success create data',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed create data',
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Book::find($id);
        if ($data) {
            return response()->json([
                'status' => 'success',
                'message' => 'Success get data',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed get data',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Book::find($id);
        if ($data) {
            $data->update($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Success update data',
            ], 200);
        } else {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed update data',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Book::find($id);
        if ($data) {
            $data->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Success delete data',
            ], 200);
        } else {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed delete data',
            ], 404);
        }
    }
}
