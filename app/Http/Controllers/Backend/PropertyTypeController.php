<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyTypeStoreRequest;
use App\Http\Requests\PropertyTypeUpdateRequest;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = PropertyType::all();
        return view('backend.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyTypeStoreRequest $request)
    {
        PropertyType::create([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);
        $notification = array(
            'message' => 'Property Type Created successfully',
            'alert-type' => 'success'
        );
        return to_route('admin.property-types.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyType $property_type)
    {
        return view('backend.type.edit', compact('property_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyTypeUpdateRequest $request, PropertyType $property_type)
    {
        $property_type->update([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);

        $notification = array(
            'message' => 'Property Type Updated successfully',
            'alert-type' => 'success'
        );
        return to_route('admin.property-types.index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyType $property_type)
    {
        $property_type->delete();
        $notification = array(
            'message' => 'Property Type Deleted successfully',
            'alert-type' => 'success'
        );
        return to_route('admin.property-types.index')->with($notification);
    }
}
