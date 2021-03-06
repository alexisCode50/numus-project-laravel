<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;
use App\Image;
use App\Location;
use App\Detail;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $data = Propiedad::all();
        return view('admin.propiedad.index', ['data' => $data]);
    }

    public function home()
    {
        return view('admin.home');
    }

    public function create()
    {
        $locations = Location::all(); // ubicaciones
        return view('admin.propiedad.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'unique_key' => 'required|string|unique:propiedads,unique_key',
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

        $property = new Propiedad();
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

        return redirect()->route('properties-es');
    }

    public function updateView($id)
    {
        $property = Propiedad::find($id);
        $locations = Location::all();
        return view('admin.propiedad.update', ['property' => $property, 'locations' => $locations]);
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

        $property = Propiedad::find($id);
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

        return redirect()->route('properties-es');
    }

    public function view(Request $request, $id)
    {
        $variablesurl = $request->all();
        $property = Propiedad::find($id);
        $detail = Detail::where('unique_key_property', $property->unique_key)->first();
        $images = Image::where('unique_key', $property->unique_key)->simplePaginate(5)->appends($variablesurl);
        return view('admin.propiedad.view', ['property' => $property, 'detail' => $detail, 'images' => $images]);
    }

    public function delete($id)
    {
        try {
            $property = Propiedad::find($id);
            $images = Image::where('unique_key', $property->unique_key)->get();

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

        return redirect()->route('properties-es');
    }

}
