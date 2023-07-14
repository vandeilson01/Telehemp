<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialistas;

use Illuminate\Support\Facades\Hash;

class EspecialistasController extends Controller
{
    public function index()
    {
        $especialistas = Especialistas::latest()->paginate(10);
        
        return view('pages.especialistas.especialistas',compact('especialistas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.especialistas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        
        $add = Especialistas::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'valid' => $request->input('valid'),
            'especialit' => $request->input('especialit'),
            'details' => $request->input('details'),
        ]);

        if($add){
            $files = [];
            if ($request->file('img')){
                $file = $request->file('img');
                $fileName = time().rand(1,99).'.'.$file->extension();  
                $file->storage('especialista/img', $fileName);
                $files[]['name'] = $fileName;

                Especialistas::where('id', $add->id)->update([
                    'img' => $fileName,
                ]);
            }

            $filestwo = [];
            if ($request->file('icon')){
                $file = $request->file('icon');
                $fileName = time().rand(1,99).'.'.$file->extension();  
                $file->storage('especialista/icon', $fileName);
                $filestwo[]['name'] = $fileName;

                Especialistas::where('id', $add->id)->update([
                    'icon' => $fileName,
                ]);
            }
        }
        
        return redirect('/especialist');

    }

    /**
     * Display the specified resource.
     */
    public function show(Especialistas $especialista, $id)
    {
         
        $especialistas = Especialistas::where('id', $id)->first();

        return view('pages.especialistas.show',compact('especialistas'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especialistas $especialista, $id)
    {
        $especialistas = Especialistas::where('id', $id)->first();
        return view('pages.especialistas.edit',compact('especialistas'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especialistas $especialista)
    {
        Especialistas::where('id', $request->id)->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'valid' => $request->input('valid'),
            'especialit' => $request->input('especialit'),
            'details' => $request->input('details'),
        ]);

            $files = [];
            if ($request->file('img')){
                $file = $request->file('img');
                $fileName = time().rand(1,99).'.'.$file->extension();  
                $file->storage('especialista/img', $fileName);
                $files[]['name'] = $fileName;

                Especialistas::where('id', $request->id)->update([
                    'img' => $fileName,
                ]);
            }

            $filestwo = [];
            if ($request->file('icon')){
                $file = $request->file('icon');
                $fileName = time().rand(1,99).'.'.$file->extension();  
                $file->storage('especialista/icon', $fileName);
                $filestwo[]['name'] = $fileName;

                Especialistas::where('id', $request->id)->update([
                    'icon' => $fileName,
                ]);
            }
        
        return back();
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especialistas $especialista, Request $request)
    {
        
        $especialista->where('id', $request->Mid)->delete();
         
        // return redirect('/especialist');
    }

}
