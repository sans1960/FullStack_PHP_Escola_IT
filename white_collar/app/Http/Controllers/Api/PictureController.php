<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PictureResource;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::all();
        return response([ 'pictures' => PictureResource::collection($pictures), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'author' => 'required',
            'price' => 'required',
            'shop_id' => 'required'

        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $picture = Picture::create($data);

        return response(['picture' => new PictureResource($picture), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        return response(['picture' => new PictureResource($picture), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        $picture->update($request->all());

        return response(['picture' => new PictureResource($picture), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();

        return response(['message' => 'Deleted']);
    }
}
