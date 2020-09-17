<?php

namespace App\Http\Controllers;

use App\Material;
use App\Teacher;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::latest()->paginate(5);
  
        return view('materials.index',compact('materials'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Teacher::pluck('teacher_name','id');
        return view('materials.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lesson' => 'required',
            'material' => 'required|mimes:pdf,xlx,csv,|max:8192',
            'material_name' => 'required',
            'supervisor_name' => 'required',
            'status' => 'required',
            'comment' => 'required',
        ]);
  
        $fileModel = new Material;

        if ($request->file()) {
            $fileName = time() . '_' . $request->material->getClientOriginalName();
            $filePath = $request->file('material')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = $request->name;
            $fileModel->lesson = $request->lesson;
            // $fileModel->material = $request->material;
            $fileModel->material = time() . '_' . $request->material->getClientOriginalName();
            $fileModel->material_name = $request->material_name;
            $fileModel->status = $request->status;
            $fileModel->supervisor_name = $request->supervisor_name;
            $fileModel->comment = $request->comment;
            // $fileModel->tanggal_upload = $request->tanggal_upload;
            $fileModel->tanggal_upload = Carbon::now()->timezone('Asia/Jakarta');
            $request->material->move(public_path('uploads'), $fileName);
            $fileModel->save();
        }
   
        return redirect()->route('material.index')
                        ->with('success','Material created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        $myFile = public_path('uploads/' . $material->material);
        $headers = ['Content-Type: application/pdf'];
        $newName = $material->material . time() . '.pdf';

        return response()->download($myFile, $newName, $headers);
        return view('materials.show',compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        $teacher = Teacher::pluck('name', 'id');
        return view('materials.edit',compact('material', 'teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $request->validate([
            'name' => 'required',
            'lesson' => 'required',
            'material' => 'required',
            'material_name' => 'required',
            'supervisor_name' => 'required',
            'status' => 'required',
            'comment' => 'required',
        ]);
  
        $material->update($request->all());
  
        return redirect()->route('material.index')
                        ->with('success','Material updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $material->delete();
  
        return redirect()->route('material.index')
                        ->with('success','material deleted successfully');
    }
}
