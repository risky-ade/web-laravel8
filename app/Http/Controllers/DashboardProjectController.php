<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
// use Image;

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
        // dd($request);
        // dd($request['image']);
        // $data = $request ->validate([
        //     'title'=>'required',
        //     'client_id'=>'required',
        //     'service_id'=>'required',
        //     'tanggal'=>'required',
        //     'alamat'=>'required',
        //     'deskripsi'=>'required'
        // ]);
        $project=Project::create([
            'title' => $request->title,
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,

        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $file->move(\public_path("/project_img"),$imageName);
                    Image::create([
                        'project_id'=>$project->id,
                        'image'=>$imageName
    
                    ]);
                }           
        }
        return redirect('/dashboard/projects')->with('Berhasil Ditambahkan');
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

        return view('dashboard.projects.edit', [
            'project'=> $project,
            'clients'=> Client::all(),
            'services'=> Service::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $project=Project::findOrFail($id);
         $project->update([
            'title' => $request->title,
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,

        ]);
        
        if($request->hasFile("images")){
            
            $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request["project_id"]=$id;
                    $request["image"]=$imageName;
                    $file->move(\public_path("/project_img"),$imageName);
                    Image::create($request->all());
                    //$imanges where project_id = $proeject->id;
                    //$images->delete;
                    
                }           
        }
        return redirect('/dashboard/projects')->with('Berhasil','Diupdate');
        // if($request->hasFile("images")){
            
        //     $files=$request->file("images");
        //         foreach($files as $file){
        //             $imageName=time().'_'.$file->getClientOriginalName();
        //             $file->move(\public_path("/project_img"),$imageName);

        //             $image = Image::where('project_id',$request->id);
        //             $image->delete();

        //             //$imanges where project_id = $proeject->id;
        //             //$images->delete;
        //             Image::create([
        //                 'project_id'=>$project->id,
        //                 'image'=>$imageName
    
        //             ]);
        //         }           
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Project::destroy($project->id);
        $project=Project::findOrFail($id);

         $images=Image::where("project_id",$project->id)->get();
         foreach($images as $image){
         if (File::exists("project_img/".$image->image)) {
            File::delete("project_img/".$image->image);
        }
         }
         $project->delete();
         return redirect('/dashboard/projects')->with('success', 'Project has been deleted!');
    }

    public function deleteimage($id){
        $images=Image::findOrFail($id);
        if (File::exists("project_img/".$images->image)) {
           File::delete("project_img/".$images->image);
       }

       Image::find($id)->delete();
       return back();
   }
}
