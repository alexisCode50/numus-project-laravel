<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Image;

class PropertyController extends Controller
{
    public function index()
    {
        return view('numus.index');
    }

    public function details($id)
    {
        $property = Property::find($id);
        return response()->json($property, 200);
        //return view('numus.details');
    }

    public function search(Request $request)
    {
        $data = array();
        $variablesurl = $request->all(); // url 

        if($request->get('title') || $request->get('type_property') || $request->get('location')){
            $title = $request->get('title');
            $type_property = $request->get('type_property');
            $location = $request->get('location');
            $price = $request->get('price');
            
            $data = Property::where('title', 'LIKE', '%'.$title.'%')
                            ->orWhere('type_property', $type_property)
                            ->orWhere('location', 'LIKE', '%'.$location.'%')
                            ->paginate(10)
                            ->appends($variablesurl); // evita que se pierda la paginacion
        } else {
            $data = Property::paginate(10);
        }

        return response()->json($data, 200);
    }



//     public function create()
//     {
//         //
//     }

//     public function store(Request $request)
//     {
//         //
//     }


//     public function show($id)
//     {
//         //
//     }


//     public function edit($id)
//     {
//         //
//     }


//     public function update(Request $request, $id)
//     {
//         //
//     }

//     public function destroy($id)
//     {
//         //
//     }
}
