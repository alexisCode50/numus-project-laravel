<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Image;
use App\Location;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $variablesurl = $request->all();
        $data = Property::all();
        return view('admin.index', ['data' => $data]);
    }

    public function create()
    {
        $locations = Location::all();
        return view('admin.create', compact('locations'));
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
            'size_property' => 'required|string',
            'size_land' => 'required|string',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'map' => 'required|string',
            'amenities' => 'required|string',
            'outstanding' => 'required|numeric',
            'pool' => 'required|numeric'
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
        $property->size_property = $request->size_property;
        $property->size_land = $request->size_land;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->garage = $request->garage;
        $property->map = $request->map;
        $property->amenities = $request->amenities;
        $property->outstanding = $request->outstanding;
        $property->pool = $request->pool;
        $property->save();

        \Session::flash('message', 'Registro Guardado');

        return redirect()->route('admin');
    }

    public function updateView($id)
    {
        $property = Property::find($id);
        $locations = Location::all();
        return view('admin.update', ['property' => $property, 'locations' => $locations]);
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
            'size_property' => 'required|string',
            'size_land' => 'required|string',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'map' => 'required|string',
            'amenities' => 'required|string',
            'outstanding' => 'required|numeric',
            'pool' => 'required|numeric'
        ]);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->direction = $request->direction;
        $property->location_id = $request->location_id;
        $property->description = $request->description;
        $property->type_property = $request->type_property;
        $property->price = $request->price;
        $property->state_property = $request->state_property;
        $property->size_property = $request->size_property;
        $property->size_land = $request->size_land;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->garage = $request->garage;
        $property->map = $request->map;
        $property->amenities = $request->amenities;
        $property->outstanding = $request->outstanding;
        $property->pool = $request->pool;
        $property->save();

        \Session::flash('message', 'Registro Actualizado');

        return redirect()->route('admin');
    }

    public function view(Request $request, $id)
    {
        $variablesurl = $request->all();
        $property = Property::find($id);
        $images = Image::where('property_id', $id)->paginate(5)->appends($variablesurl);
        return view('admin.view', ['property' => $property, 'images' => $images]);
    }

    public function delete($id)
    {
        try {
            $property = Property::find($id);
            $images = Image::where('property_id', $id)->get();

            if(count($images) > 0){
                foreach ($images as $image) {
                    $path = public_path() . '/images/' . $image->route_img;
                    unlink($path);
                }
                $property->delete();
                \Session::flash('message', 'Registro Eliminado');
            } else {
                $property->delete();
                \Session::flash('message', 'Registro Eliminado');
            }

            
        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar el registro');
            $errors = 'No se puede eliminar el registro';
        }

        return redirect()->route('admin');
    }

}
