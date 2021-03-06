<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Propiedad;
use App\Image;

class ImageController extends Controller
{

    public function add($id)
    {
        $property = Propiedad::find($id);
        return view('admin.image.add', compact('property'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'property_id' => 'required|numeric',
            'unique_key' => 'required|string',
            'image' => 'required'
        ]);

        try {
            if($request->has('image')){
                foreach($request->file('image') as $file){
                    $path = public_path() . '/images';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $file->move($path, $fileName);
    
                    $data = new Image();
                    $data->property_id = $request->property_id;
                    $data->route_img = $fileName;
                    $data->unique_key = $request->unique_key;
                    $data->save();
                }
    
                \Session::flash('message', 'Registro Exitoso');
            }
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error');
        }
        
        return redirect()->back();
    }

    public function profileImageEs($id)
    {
        $image = Image::find($id);
        $property = Propiedad::find($image->property_id);
        $property->profile_picture = $image->route_img;
        $property->save();

        \Session::flash('message', 'Imagen Establecida');

        return redirect()->back();
    }

    public function profileImageEn($id)
    {
        $image = Image::find($id);
        $property = Property::find($image->property_id);
        $property->profile_picture = $image->route_img;
        $property->save();

        \Session::flash('message', 'Imagen Establecida');

        return redirect()->back();
    }

    public function deleteImage($id)
    {
        try {
            $image = Image::find($id);
            $path = public_path() . '/images/' . $image->route_img;

            if (unlink($path)) {
                $image->delete();
                \Session::flash('message', 'Imagen Eliminda');
            }
            
        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar el imagen');
            $errors = 'No se puede eliminar el imagen';
        }

        return redirect()->back();
    }
}
