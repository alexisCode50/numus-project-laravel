<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Image;
use App\Location;

class PropertyController extends Controller
{
    public function index()
    {
        $property = Property::all();
        $location = Location::all();
        return view('numus.index', ['property' => $property, 'location' => $location]);
    }

    public function details($id)
    {
        $property = Property::find($id);
        $images = Image::where('property_id', $id)->get(); 
        return view('numus.details', ['property' => $property, 'images' => $images]);
    }

    public function search(Request $request)
    {
        $data = array();
        $variablesurl = $request->all(); // url

        if($request->get('title') || $request->get('type_property') || $request->get('location')){
            $title = $request->get('title');
            $type_property = $request->get('type_property');
            $location_id = $request->get('location');

            $data = Property::where('title', 'LIKE', '%'.$title.'%')
                            ->orWhere('type_property', $type_property)
                            ->orWhere('location_id', $location_id)
                            ->paginate(8)
                            ->appends($variablesurl); // evita que se pierda la paginacion
        } 
        // else {
        //     $data = Property::paginate(10);
        // }
        // return response()->json($data, 200);
        
        return view('numus.search', compact('data'));
    }

    public function contact(){
        return view('numus.contact');
    }

    public function about(){
        return view('numus.about');
    }

}
