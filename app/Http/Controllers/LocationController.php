<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{

    public function index()
    {
        $locations = Location::all();
        return view('admin.location.index', ['locations' => $locations]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string'
        ]);

        $location = new Location();
        $location->name = $request->name;
        $location->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        try {
            $location = Location::find($id);
            $location->delete();
            \Session::flash('message', 'Registro eliminado');
            
        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar el registro');
            $errors = 'No se puede eliminar el registro';
        }

        return redirect()->back();
    }
}
