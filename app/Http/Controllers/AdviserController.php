<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Adviser;

class AdviserController extends Controller
{

    public function index()
    {
        $data = Adviser::all();
        return view('admin.adviser.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.adviser.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|string',
        ]);
        
        $adviser = new Adviser();
        $adviser->name = $request->name;
        $adviser->phone = $request->phone;
        $adviser->email = $request->email;
        $adviser->save();

        \Session::flash('message', 'Registro Guardado');

        return redirect()->route('advisers');
    }


    public function edit($id)
    {
        $adviser = Adviser::find($id);
        return view('admin.adviser.update', ['adviser' => $adviser]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|string',
        ]);
        
        $adviser = Adviser::find($id);
        $adviser->name = $request->name;
        $adviser->phone = $request->phone;
        $adviser->email = $request->email;
        $adviser->save();

        \Session::flash('message', 'Registro Actualizado');

        return redirect()->route('advisers');
    }

    public function destroy($id)
    {
        try {
            $adviser = Adviser::find($id);

            if($adviser->image != null || $adviser->image != ''){

                $path = public_path() . '/images/' . $adviser->image;

                if (unlink($path)) {
                    $adviser->delete();
                    \Session::flash('message', 'Registro Eliminado');
                } 
            } else {
                $adviser->delete();
                \Session::flash('message', 'Registro Eliminado');
            }
            
        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al eliminar el registro');
        }

        return redirect()->route('advisers');
    }

    ///// IMAGES /////
    public function add($id)
    {
        $adviser = Adviser::find($id);
        return view('admin.adviser.add', ['adviser' => $adviser]);
    }

    public function save(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);

        try {
            if($request->has('image')){
                $image = $request->file('image');
                $path = public_path() . '/images';
                $fileName = uniqid() . $image->getClientOriginalName();
                $image->move($path, $fileName);

                $adviser = Adviser::find($id);
                $adviser->image = $fileName;
                $adviser->save();
    
                \Session::flash('message', 'Imagen Agregada');
            }
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error');
        }
        
        return redirect()->route('advisers');
    }

    public function remove($id)
    {
        try {
            $adviser = Adviser::find($id);
            $path = public_path() . '/images/' . $adviser->image;

            if (unlink($path)) {

                DB::table('advisers')
                    ->where('id', $id)
                    ->update(['image' => '']);

                \Session::flash('message', 'Imagen Eliminada');
            }
            
        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar el imagen');
        }

        return redirect()->back();
    }

}
