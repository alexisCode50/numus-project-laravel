<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;
use App\Property;
use App\Image;
use App\Location;
use App\Detail;
use App\Adviser;
use App\Section;

class PropertyController extends Controller
{
    public function index()
    {
        $lang = request()->route()->parameter("lang");
        \App::setLocale($lang);
        $property = array();

        if($lang == 'es'){
            $property = Propiedad::where('outstanding', 1)->get();
        } else if($lang == 'en'){
            $property = Property::where('outstanding', 1)->get();
        }

        $location = Location::all();
        $section = Section::all();

        return view('numus.index', ['property' => $property, 'location' => $location, 'section' => $section]);
    }

    public function details()
    {
        $lang = request()->route()->parameter("lang");
        $id = request()->route()->parameter("id");
        \App::setLocale($lang);

        if($lang == 'es'){
            $property = Propiedad::find($id);
            $detail = Detail::where('unique_key_property', $property->unique_key)->first();
            $adviser = Adviser::find($detail->adviser_id);
            $outstanding = Propiedad::where('outstanding', 1)->get();
            $images = Image::where('unique_key', $property->unique_key)->get();
        } else if($lang == 'en'){
            $property = Property::find($id);
            $detail = Detail::where('unique_key_property', $property->unique_key)->first();
            $adviser = Adviser::find($detail->adviser_id);
            $outstanding = Property::where('outstanding', 1)->get();
            $images = Image::where('unique_key', $property->unique_key)->get();
        }
        
        $location = Location::all();

        return view('numus.details', ['property' => $property, 'detail' => $detail, 'adviser' => $adviser, 'location' => $location, 'outstanding' => $outstanding, 'images' => $images]);
    }

    public function search(Request $request)
    {
        $variablesurl = $request->all(); // url
        $lang = request()->route()->parameter("lang");
        \App::setLocale($lang);

        if($lang == 'es'){
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

            $outstanding = Propiedad::where('outstanding', 1)->get();
        } else if($lang == 'en'){
            if($request->get('title') || $request->get('type_property') || $request->get('location')){
                $title = $request->get('title');
                $type_property = $request->get('type_property');
                $location_id = $request->get('location');
    
                $data = Property::where('title', 'LIKE', '%'.$title.'%')
                                ->orWhere('type_property', $type_property)
                                ->orWhere('location_id', $location_id)
                                ->paginate(10) // modificar a
                                ->appends($variablesurl); // evita que se pierda la paginacion
    
            } else {
                $data = Property::paginate(10);
            }

            $outstanding = Property::where('outstanding', 1)->get();
        }

        $location = Location::all();

        return view('numus.search', ['data' => $data, 'location' => $location, 'outstanding' => $outstanding]);
    }

    public function contact(){
        $lang = request()->route()->parameter("lang");
        \App::setLocale($lang);
        return view('numus.contact');
    }

    public function about(){
        $lang = request()->route()->parameter("lang");
        \App::setLocale($lang);
        return view('numus.about');
    }

    public function howtobuy(){
        $lang = request()->route()->parameter("lang");
        \App::setLocale($lang);
        return view('numus.howtobuy');
    }
}
