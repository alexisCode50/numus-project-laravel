<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Section;

class SectionController extends Controller
{
    public function index()
    {
    	$data = Section::all();
    	return view('admin.section.index', compact('data'));
    }

    public function edit($id)
    {
    	$section = Section::find($id);
    	return view('admin.section.edit', compact('section'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
            'title' => 'required|string',
        ]);

    	$section = Section::find($id);
    	$section->title = $request->title;
    	$section->save();

    	return redirect()->route('sections');
    }

    ///// IMAGES /////
    public function addView($id)
    {
    	$section = Section::find($id);
        return view('admin.section.add', compact('section'));
    }

    public function addImage(Request $request, $id)
    {
    	$this->validate($request, [
            'image' => 'required'
        ]);

        try {
            if($request->has('image')){
            	$image = $request->file('image');
            	$path = public_path() . '/sections';
            	$fileName = uniqid() . $image->getClientOriginalName();
            	$image->move($path, $fileName);

            	$section = Section::find($id);
            	$section->image = $fileName;
            	$section->save();
    
                \Session::flash('message', 'Imagen Agregada a la seccion');
            }
        } catch (\Throwable $th) {
            \Session::flash('message', 'Ocurrio un error');
        }
        
        return redirect()->back();
    }

    public function remove($id)
    {
    	try {
            $section = Section::find($id);
            $path = public_path() . '/sections/' . $section->image;

            if (unlink($path)) {

            	DB::table('sections')
                	->where('id', $id)
                	->update(['image' => '']);

                \Session::flash('message', 'Imagen Eliminda');
            }
            
        } catch (\Exception $e) {
            \Session::flash('message', 'No se puede eliminar el imagen');
        }

        return redirect()->back();
    }
}
