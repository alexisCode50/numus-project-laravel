<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Adviser;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $data = Detail::all();
        return view('admin.detail.index',  compact('data'));
    }

    public function view(Request $request, $id)
    {
        $detail = Detail::find($id);
        return view('admin.detail.view', ['detail' => $detail]);
    }

    public function create()
    {
        $advisers = Adviser::all();
        return view('admin.detail.create', ['advisers' => $advisers]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'unique_key_property' => 'required|string|unique:details,unique_key_property',
            'size_property' => 'required|string',
            'size_land' => 'required|string',
            'front_land' => 'required',
            'back_land' => 'required',
            'bedroom' => 'required|numeric',
            'complete_bathroom' => 'required|numeric',
            'half_baths' => 'required|numeric',
            'garage' => 'required|numeric',
            'map' => 'required|string',
            'pool' => 'required|numeric',
            'adviser_id' => 'required|numeric',
        ]);

        $detail = new Detail();
        $detail->unique_key_property = $request->unique_key_property;
        $detail->size_property = $request->size_property;
        $detail->size_land = $request->size_land;
        $detail->front_land = $request->front_land;
        $detail->back_land = $request->back_land;
        $detail->bedroom = $request->bedroom;
        $detail->complete_bathroom = $request->complete_bathroom;
        $detail->half_baths = $request->half_baths;
        $detail->garage = $request->garage;
        $detail->map = $request->map;
        $detail->pool = $request->pool;
        $detail->adviser_id = $request->adviser_id;
        $detail->save();

        \Session::flash('message', 'Registro Guardado');

        return redirect()->route('details');
    }

    public function edit($id)
    {
        $detail = Detail::find($id);
        $advisers = Adviser::all();
        return view('admin.detail.update', ['detail' => $detail, 'advisers' => $advisers]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'size_property' => 'required|string',
            'size_land' => 'required|string',
            'front_land' => 'required',
            'back_land' => 'required',
            'bedroom' => 'required|numeric',
            'complete_bathroom' => 'required|numeric',
            'half_baths' => 'required|numeric',
            'garage' => 'required|numeric',
            'map' => 'required|string',
            'pool' => 'required|numeric',
            'adviser_id' => 'required|numeric',
        ]);

        $detail = Detail::find($id);
        $detail->size_property = $request->size_property;
        $detail->size_land = $request->size_land;
        $detail->front_land = $request->front_land;
        $detail->back_land = $request->back_land;
        $detail->bedroom = $request->bedroom;
        $detail->complete_bathroom = $request->complete_bathroom;
        $detail->half_baths = $request->half_baths;
        $detail->garage = $request->garage;
        $detail->map = $request->map;
        $detail->pool = $request->pool;
        $detail->adviser_id = $request->adviser_id;
        $detail->save();

        \Session::flash('message', 'Registro Actualizado');

        return redirect()->route('details');
    }

    public function destroy($id)
    {
        try {
            $detail = Detail::find($id);
            $detail->delete();
            \Session::flash('message', 'Registro Eliminado');
            
        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar el registro');
            $errors = 'No se puede eliminar el registro';
        }

        return redirect()->route('details');
    }
}
