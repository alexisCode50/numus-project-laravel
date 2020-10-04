<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Image;
use App\Location;
use App\Detail;

class PropertyEnglishController extends Controller
{
    public function index(Request $request)
    {
        $data = Property::all();
        return view('admin.property.index', ['data' => $data]);
    }

    public function create()
    {
        $locations = Location::all(); // data de la tabla ubicaciones
        return view('admin.property.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'unique_key' => 'required|string|unique:properties,unique_key',
            'title' => 'required|string',
            'direction' => 'required|string',
            'location_id' => 'required|numeric',
            'description' => 'required|string',
            'type_property' => 'required|string',
            'price' => 'required|numeric',
            'state_property' => 'required|string',
            'amenities' => 'required|string',
            'outstanding' => 'required|numeric',
        ]);

        $property = new Property();
        $property->unique_key = $request->unique_key;
        $property->title = $request->title;
        $property->direction = $request->direction;
        $property->location_id = $request->location_id;
        $property->description = $request->description;
        $property->type_property = $request->type_property;
        $property->price = $request->price;
        $property->state_property = $request->state_property;
        $property->amenities = $request->amenities;
        $property->outstanding = $request->outstanding;
        $property->save();

        \Session::flash('message', 'Registro Guardado');

        return redirect()->route('properties-en');
    }

    public function updateView($id)
    {
        $property = Property::find($id);
        $locations = Location::all();
        return view('admin.property.update', ['property' => $property, 'locations' => $locations]);
    }

    public function updateProperty(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'direction' => 'required|string',
            'location_id' => 'required|numeric',
            'description' => 'required|string',
            'type_property' => 'required|string',
            'price' => 'required|numeric',
            'state_property' => 'required|string',
            'amenities' => 'required|string',
            'outstanding' => 'required|numeric',
        ]);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->direction = $request->direction;
        $property->location_id = $request->location_id;
        $property->description = $request->description;
        $property->type_property = $request->type_property;
        $property->price = $request->price;
        $property->state_property = $request->state_property;
        $property->amenities = $request->amenities;
        $property->outstanding = $request->outstanding;
        $property->save();

        \Session::flash('message', 'Registro Actualizado');

        return redirect()->route('properties-en');
    }

    public function view(Request $request, $id)
    {
        $variablesurl = $request->all();
        $property = Property::find($id);
        $detail = Detail::where('unique_key_property', $property->unique_key)->first();
        $images = Image::where('unique_key', $property->unique_key)->simplePaginate(5)->appends($variablesurl);
        return view('admin.property.view', ['property' => $property, 'detail' => $detail, 'images' => $images]);
    }

    public function delete($id)
    {
        try {
            $property = Property::find($id);
            $property->delete();
            \Session::flash('message', 'Registro Eliminado');
        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar el registro');
            $errors = 'No se puede eliminar el registro';
        }

        return redirect()->route('properties-en');
    }
}
