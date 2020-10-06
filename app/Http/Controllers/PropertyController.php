<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;
use App\Property;
use App\Image;
use App\Location;
use App\Detail;

class PropertyController extends Controller
{
    public function index()
    {
        $property = Propiedad::all();
        $location = Location::all();
        return view('numus.index', ['property' => $property, 'location' => $location]);
    }

    public function details($id)
    {
        $property = Propiedad::find($id);
        $detail = Detail::where('unique_key_property', $property->unique_key)->first();
        $images = Image::where('unique_key', $property->unique_key)->get();
        return view('numus.details', ['property' => $property, 'detail' => $detail, 'images' => $images]);
    }

    public function search(Request $request)
    {
        $data = array();
        $variablesurl = $request->all(); // url

        if($request->get('title') || $request->get('type_property') || $request->get('location')){
            $title = $request->get('title');
            $type_property = $request->get('type_property');
            $location_id = $request->get('location');

            $data = Propiedad::where('title', 'LIKE', '%'.$title.'%')
                            ->orWhere('type_property', $type_property)
                            ->orWhere('location_id', $location_id)
                            ->paginate(10) // modificar a
                            ->appends($variablesurl); // evita que se pierda la paginacion

        } else {
            $data = Propiedad::paginate(10);
        }

        // return response()->json($data, 200);

        $location = Location::all();

        return view('numus.search', ['data' => $data, 'location' => $location]);
    }

    public function contact(){
        return view('numus.contact');
    }

    public function about(){
        return view('numus.about');
    }

    public function howtobuy(){
        return view('numus.howtobuy');
    }
}
