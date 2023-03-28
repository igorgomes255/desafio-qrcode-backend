<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataRequest;
use App\Http\Resources\DataUserResource;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $dataUser = Data::all();
        return DataUserResource::collection($dataUser);
    }

    public function show(Data $data)
    {
        return $data;
    }

    public function store(StoreDataRequest $request)
    {
        $data = Data::create($request->validated());

        return new DataUserResource($data);
    }

    public function update(Request $request, Data $data)
    {
        $data->update($request->all());

        return response()->json($data, 200);
    }

    public function delete(Data $data)
    {
        $data->delete();

        return response()->json(null, 204);
    }
}