<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            $adviser->delete();
            \Session::flash('message', 'Registro Eliminado');
        } catch (\Throwable $th) {
            \Session::flash('message', 'Error al eliminar el registro');
        }

        return redirect()->route('advisers');
    }
}
