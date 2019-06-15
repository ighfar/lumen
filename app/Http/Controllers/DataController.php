<?php

namespace App\Http\Controllers;

use App\ModelData;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return Data::all();
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'object_domain' => 'required',
            'object_id' => 'required',
            'description' => 'required',
            'is_completed' => 'required',
            'completed_at' => '',
            'updated_by' => '',
            'updated_at' => '',
            'created_at' => '',
            'due' => '',
            'urgency' => ''
        ]);

        return Data::create($request->all());
    }

       public function show($id)
    {
        $post = Data::find($id);
        if (! $post) {
            return response()->json([
               'message' => 'post not found'
            ]);
        }

        return $post;
    }


public function update(Request $request, $id)
{
    $post = Data::find($id);

    if ($post) {
        $post->update($request->all());

        return response()->json([
            'message' => 'Post has been updated'
        ]);
    }

    return response()->json([
        'message' => 'Post not found',
    ], 404);
}

    public function delete($id)
    {
        $post = Data::find($id);

        if ($post) {
            $post->delete();

            return response()->json([
               'message' => 'Post has been deleted'
            ]);
        }

        return response()->json([
            'message' => 'Post not found'
        ], 404);
    }

}
