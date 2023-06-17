<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AmenityStoreRequest;
use App\Http\Requests\AmenityUpdateRequest;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $amenities = Amenity::all();
        return view('backend.amenity.index', compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.amenity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AmenityStoreRequest $request)
    {
        Amenity::create([
            'name' => $request->name,
        ]);        

        $notification = array(
            'message' => 'Amenity Created successfully',
            'alert-type' => 'success',
        );
        return to_route('admin.amenities.index')->with($notification);        
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
    public function edit(Amenity $amenity)
    {
        //dd($amenity);
        return view('backend.amenity.edit', compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AmenityUpdateRequest $request, Amenity $amenity)
    {
        $amenity->update([
            'name' => $request->name,
        ]);
        $notification = array(
            'message' => 'Amenity Updated successfully',
            'alert-type' => 'success',
        );
        return to_route('admin.amenities.index')->with($notification);            

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amenity $amenity)
    {
        $amenity->delete();
        $notification = array(
            'message' => 'Amenity Deleted successfully',
            'alert-type' => 'danger',
        );
        return to_route('admin.amenities.index')->with($notification);
    }
}
