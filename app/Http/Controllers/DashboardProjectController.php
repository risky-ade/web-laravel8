<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.projects.index',[
            'projects'=> Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.create',[
            'clients'=> Client::all(),
            'services'=> Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request ->validate([
            'title'=>'required',
            'client_id'=>'required',
            'service_id'=>'required',
            'date'=>'required',
            'alamat'=>'required',
            'deskripsi'=>'required'
        ]);

        // if($request->file('image')){
        //     $data['image']= $request->file('image')->store('post-images');
        // }

        $new_project = Project::create($data);

        if($request->hasFile('images')){
            foreach($request->file('images') as $image)
            {
                $imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('project_img'),$imageName);
                Image::create([
                    'project_id'=>$new_project->id,
                    'image'=>$imageName
                    
                ]);
            }
        }
        return back()->with('Berhasil','Ditambahkan');
    }

    // public function images($id){
    //     $project = Project::find($id);
    //     if(!$project) abort(404);
    //     $images = $project->images;
    //     return view('images',compact('project','images'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
