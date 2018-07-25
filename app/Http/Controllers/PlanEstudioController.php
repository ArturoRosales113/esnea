<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlanEstudio;
use App\CampoLaboral;

class PlanEstudioController extends Controller
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
        $planes = PlanEstudio::all();
        return view('backend.planes.index', ['planes' => $planes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campos = CampoLaboral::all();
        return view('backend.planes.create',['campos' => $campos]);
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
         'subtitle' => 'required',
         'body' => 'required',
         'front_pic' => 'required|mimes:jpeg,png,jpg|max:400',
         'banner_pic' => 'required|mimes:jpeg,png,jpg|max:400',
         'profile_title' => 'required',
         'profile_body' => 'required',
         'profile_pic' => 'required|mimes:jpeg,png,jpg|max:400',
         'plan_pdf' => 'required|mimes:pdf|max:2024',
         'planEstudio' => 'required'
        ];
        $messages = [
            'title.required' => 'El campo "título" es obligatorio',
            'subtitle.required' => 'El campo "subtítluo" es obligatorio',
            'body.required' => 'El campo "contenido" es obligatorio',
            'front_pic.required' => 'Debes subir una foto de portada',
            'front_pic.mimes' => 'El archivo debe ser una imágen en formato jpg, jpeg o png',
            'front_pic.max' => 'La imagen no debe pesar más de 400Kb',
            'profile_title.required' => 'El campo "título de perfil" es obligatorio',
            'profile_body.required' => 'El campo "contenido de perfil" es obligatorio',
            'profile_pic.required' => 'Debes subir una foto de perfil',
            'profile_pic.mimes' => 'La imagen de perfil debe ser una imágen en formato jpg, jpeg o png',
            'profile_pic.max' => 'La imagen de perfil no debe pesar más de 400Kb',
            'plan_pdf.required' => 'El campo "plan de estudios" es obligatorio',
            'plan_pdf.mimes' => 'El archivo del plan debe ser un PDF',
            'plan_pdf.max' => 'El archivo PDF no debe pesar más de 2Mb',
            'planEstudio.required' => 'El plan de estudio es requerido'

        ];

       $validator = Validator::make($input, $rules, $messages);
       if ( $validator->fails() ) {
       return redirect('planes/create')
                   ->withErrors( $validator )
                   ->withInput();
        } else {
            $p = new PlanEstudio;

            // front_pic
            $file = Input::file('front_pic');
            $name = str_replace(' ', '', strtolower($input['front_pic']));
            $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
            $img_path ='planEstudio/front_pics/'.$file_name;
            $request->front_pic->move('planEstudio/front_pics/', $file_name); 
            $p->front_pic = $img_path;

            // banner_pic
            $file = Input::file('banner_pic');
            $name = str_replace(' ', '', strtolower($input['banner_pic']));
            $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
            $img_path ='planEstudio/banner_pics/'.$file_name;
            $request->banner_pic->move('planEstudio/banner_pics/', $file_name); 
            $p->banner_pic = $img_path;

            // profile_pic
            $file = Input::file('profile_pic');
            $name = str_replace(' ', '', strtolower($input['profile_pic']));
            $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
            $img_path ='planEstudio/profile_pics/'.$file_name;
            $request->profile_pic->move('planEstudio/profile_pics/', $file_name); 
            $p->profile_pic = $img_path;

            // plan_pdf
            $file = Input::file('plan_pdf');
            $name = str_replace(' ', '', strtolower($input['plan_pdf']));
            $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
            $pdf_path ='planEstudio/plan_pdf/'.$file_name;
            $request->plan_pdf->move('planEstudio/plan_pdf/', $file_name); 
            $p->plan_pdf = $pdf_path;

            // save PlanEstudio
            $p->title = $request->input('title');
            $p->content = $request->input('subtitle');
            $p->body = $request->input('body');
            $p->profile_title = $request->input('profile_title');
            $p->profile_body = $request->input('profile_body');
            if ($request->input('isDiplomado')) {
                $s->isDiplomado = true;
            }
            $p->save();
            $p->camposLaborales()->sync($request->input('campoLaboral'));
            return redirect('planes/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = PlanEstudio::find($id);
        return view('backend.planes.show', ['plan' => $p]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = PlanEstudio::find($id);
        return view('backend.planes.edit', ['plan' => $p]);
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
         'subtitle' => 'required',
         'body' => 'required',
         'front_pic' => 'mimes:jpeg,png,jpg|max:400',
         'banner_pic' => 'mimes:jpeg,png,jpg|max:400',
         'profile_title' => 'required',
         'profile_body' => 'required',
         'profile_pic' => 'mimes:jpeg,png,jpg|max:400',
         'plan_pdf' => 'mimes:pdf|max:2024'
        ];
        $messages = [
            'title.required' => 'El campo "título" es obligatorio',
            'subtitle.required' => 'El campo "subtítluo" es obligatorio',
            'body.required' => 'El campo "contenido" es obligatorio',
            'front_pic.mimes' => 'El archivo debe ser una imágen en formato jpg, jpeg o png',
            'front_pic.max' => 'La imagen no debe pesar más de 400Kb',
            'profile_title.required' => 'El campo "título de perfil" es obligatorio',
            'profile_body.required' => 'El campo "contenido de perfil" es obligatorio',
            'profile_pic.mimes' => 'La imagen de perfil debe ser una imágen en formato jpg, jpeg o png',
            'profile_pic.max' => 'La imagen de perfil no debe pesar más de 400Kb',
            'plan_pdf.mimes' => 'El archivo del plan debe ser un PDF',
            'plan_pdf.max' => 'El archivo PDF no debe pesar más de 2Mb'

        ];

       $validator = Validator::make($input, $rules, $messages);
       if ( $validator->fails() ) {
       return redirect('planes/'.$id.'/edit')
                   ->withErrors( $validator )
                   ->withInput();
        } else {
            $p = PlanEstudio::find($id);

            // front_pic
            if (Input::file('front_pic')) {
                $file = Input::file('front_pic');
                $name = str_replace(' ', '', strtolower($input['front_pic']));
                $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
                $img_path ='planEstudio/front_pics/'.$file_name;
                $request->front_pic->move('planEstudio/front_pics/', $file_name); 
                $p->front_pic = $img_path;
            }

            // banner_pic
            if (Input::file('banner_pic')) {
                $file = Input::file('banner_pic');
                $name = str_replace(' ', '', strtolower($input['banner_pic']));
                $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
                $img_path ='planEstudio/banner_pics/'.$file_name;
                $request->banner_pic->move('planEstudio/banner_pics/', $file_name); 
                $p->banner_pic = $img_path;
            }
            // profile_pic
            if (Input::file('profile_pic')) {
                $file = Input::file('profile_pic');
                $name = str_replace(' ', '', strtolower($input['profile_pic']));
                $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
                $img_path ='planEstudio/profile_pics/'.$file_name;
                $request->profile_pic->move('planEstudio/profile_pics/', $file_name); 
                $p->profile_pic = $img_path;
            }

            // plan_pdf
            if (Input::file('plan_pdf')) {
                $file = Input::file('plan_pdf');
                $name = str_replace(' ', '', strtolower($input['plan_pdf']));
                $file_name = $name.str_random(6).'.'.$file->getClientOriginalExtension();
                $pdf_path ='planEstudio/plan_pdf/'.$file_name;
                $request->plan_pdf->move('planEstudio/plan_pdf/', $file_name); 
                $p->plan_pdf = $pdf_path;
            }

            // save PlanEstudio
            $p->title = $request->input('title');
            $p->content = $request->input('subtitle');
            $p->body = $request->input('body');
            $p->profile_title = $request->input('profile_title');
            $p->profile_body = $request->input('profile_body');
            if ($request->input('isDiplomado')) {
                $s->isDiplomado = true;
            }
            $p->save();
            $p->camposLaborales()->sync($request->input('campoLaboral'));
            return redirect('planes/');
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
        $p = PlanEstudio::find($id);

        // front_pic
        if ($p->front_pic != null) {
         $file = $p->front_pic;
         $filename = public_path($file);
         File::delete($filename);
        }
        // banner_pic
        if ($p->banner_pic != null) {
         $file = $p->banner_pic;
         $filename = public_path($file);
         File::delete($filename);
        }
        // profile_pic
        if ($p->profile_pic != null) {
         $file = $p->profile_pic;
         $filename = public_path($file);
         File::delete($filename);
        }
        // plan_pdf
        if ($p->plan_pdf != null) {
         $file = $p->plan_pdf;
         $filename = public_path($file);
         File::delete($filename);
        }

        $p->delete();
        return redirect('planes/');
    }
}
