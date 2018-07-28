<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CampoLaboral;
use App\PlanEstudio;
use Validator;
use Image;
use File;
use Illuminate\Support\Facades\Input;

class CampoLaboralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campos = CampoLaboral::all();
        return view('backend.campo.index', ['campos' => $campos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes = PlanEstudio::all();
        return view('backend.campo.create',['planes' => $planes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $input = $request->all();

        $rules = [
         'title' => 'required',
         'description' => 'required',
         'body' => 'required',
         'pic' => 'required|mimes:jpeg,png,jpg|max:400'
        ];
        $messages = [
            'title.required' => 'El campo "título" es obligatorio',
            'description.required' => 'El campo "descripción" es obligatorio',
            'pic.required' => 'Debes subir una foto',
            'pic.mimes' => 'El archivo debe ser una imágen',
            'pic.max' => 'La imagen no debe pesar más de 400KB'
        ];

       $validator = Validator::make($input, $rules, $messages);
       if ( $validator->fails() ) {
       return redirect('admin/campos/create')
                   ->withErrors( $validator )
                   ->withInput();
        } else {
            $c = new CampoLaboral;
            $c->title = $request->input('title');
            $c->description = $request->input('description');
            $c->body = $request->input('body');

            // guardar imagen
            $file = Input::file('pic');
            $name = str_replace(' ', '', strtolower($file->getClientOriginalName()));
            $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
            $img_path ='campoLaboral/'.$file_name;
            $request->pic->move('campoLaboral/', $file_name);
            $c->pic = $img_path;

            $c->save();

        }
        return redirect('admin/campos/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = CampoLaboral::find($id);
        return view('backend.campo.show',['campo' => $c]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planes = PlanEstudio::all();
        $campo = CampoLaboral::find($id);
        return view('backend.campo.edit', ['campo' => $campo, 'planes' => $planes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $input = $request->all();

        $rules = [
         'title' => 'required',
         'description' => 'required',
         'body' => 'required',
         'pic' => 'mimes:jpeg,png,jpg|max:400'
        ];
        $messages = [
            'title.required' => 'El campo "título" es obligatorio',
            'description.required' => 'El campo "descripción" es obligatorio',
            'pic.mimes' => 'El archivo debe ser una imágen',
            'pic.max' => 'La imagen no debe pesar más de 400KB'
        ];

       $validator = Validator::make($input, $rules, $messages);
       if ( $validator->fails() ) {
       return redirect('admin/campos/create')
                   ->withErrors( $validator )
                   ->withInput();
        } else {
            $c = CampoLaboral::find($id);
            $c->title = $request->input('title');
            $c->description = $request->input('description');
            $c->body = $request->input('body');

            // guardar imagen
            if (Input::file('pic')) {
                $file = Input::file('pic');
                $name = str_replace(' ', '', strtolower($file->getClientOriginalName()));
                $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
                $img_path ='campoLaboral/'.$file_name;
                $request->pic->move('campoLaboral/', $file_name);
                $c->pic = $img_path;
            }

            $c->save();
            return redirect('admin/campos/');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = CampoLaboral::find($id);

        // pic
        if ($c->pic != null) {
         $file = $c->pic;
         $filename = public_path($file);
         File::delete($filename);
        }
        $c->delete();
        return redirect('admin/campos/');
    }
}
