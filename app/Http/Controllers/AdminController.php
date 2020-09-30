<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Image;

class AdminController extends Controller
{
    public function index()
    {
        $data = Property::paginate(10);
        return view('admin.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'direction' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'type_property' => 'required|string',
            'price' => 'required|numeric',
            'state_property' => 'required|string',
            'size_property' => 'required|string',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'latitude_map' => 'required|string',
            'longitude_map' => 'required|string',
            'amenities' => 'required|string'
        ]);

        $property = new Property();
        $property->title = $request->title;
        $property->direction = $request->direction;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->type_property = $request->type_property;
        $property->price = $request->price;
        $property->state_property = $request->state_property;
        $property->size_property = $request->size_property;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->garage = $request->garage;
        $property->latitude_map = $request->latitude_map;
        $property->longitude_map = $request->longitude_map;
        $property->amenities = $request->amenities;
        $property->save();

        return redirect()->route('admin');
    }

    public function updateView($id)
    {
        $property = Property::find($id);
        return view('admin.update', compact('property'));
    }

    public function updateProperty(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'direction' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'type_property' => 'required|string',
            'price' => 'required|numeric',
            'state_property' => 'required|string',
            'size_property' => 'required|string',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'latitude_map' => 'required|string',
            'longitude_map' => 'required|string',
            'amenities' => 'required|string'
        ]);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->direction = $request->direction;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->type_property = $request->type_property;
        $property->price = $request->price;
        $property->state_property = $request->state_property;
        $property->size_property = $request->size_property;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->garage = $request->garage;
        $property->latitude_map = $request->latitude_map;
        $property->longitude_map = $request->longitude_map;
        $property->amenities = $request->amenities;
        $property->save();

        return redirect()->route('admin');
    }

    public function view($id)
    {
        $property = Property::find($id);
        $images = Image::where('property_id', $id)->get();
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

    // images methods
    public function add($id)
    {
        return view('admin.add', compact('id'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric',
            'image' => 'required'
        ]);
        
        if($request->has('image')){
            foreach($request->file('image') as $file){
                $path = public_path() . '/images';
                $fileName = uniqid() . $file->getClientOriginalName();
                $file->move($path, $fileName);

                $data = new Image();
                $data->route_img = $fileName;
                $data->property_id = $request->id;
                $data->save();
            }
        }
        //return redirect()->route('image-add');

        return response()->json('ok', 200);
    }

    public function deleteImage($id)
    {
        try {
            $image = Image::find($id);
            $path = public_path() . '/images/' .$image->route_img;

            if (unlink($path)) {
                $image->delete();
                \Session::flash('message', 'Registro Eliminado');
            }
            
        } catch (\Exception $e) {
            \Session::flash('message', 'Imagen Eliminda');
            $errors = 'No se puede eliminar el imagen';
        }

        return view('admin.index');
    }
}
