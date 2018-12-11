<?php

namespace App\Http\Controllers\Intermediary;

use App\Models\Intermediary\Resource;
use App\Http\Requests\Itermediary\ResourceRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
				// $resources = Resource::all();
				// $resources = $resources->sortByDesc('creation_date');
				// return response()->json($resources->values()->all());

				return response()->json(Resource::orderBy('creation_date', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
		 * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\ResourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResourceRequest $request)
    {
				$resource = new Resource($request->all());
				return response()->json([
						'stored' => $resource->save()
				]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intermediary\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
				return response()->json($resource);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intermediary\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intermediary\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(ResourceRequest $request, Resource $resource)
    {
        //
				$resource->name= $request->name;
				$resource->url= $request->url;

					return response()->json([
						'updated'=>$resource->save()
					]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intermediary\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
				return response()->json([
					'destroyed'=>$resource->delete()
				]);
    }
}
