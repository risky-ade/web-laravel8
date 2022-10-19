<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.services.index',[
            'services'=> Service::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
            'title'=>'required|max:255',   
            'image' => 'image|file|max:5024',
        ]);

        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('post-images');
        }

        Service::create($validatedData);
        return redirect('/dashboard/services')->with('success', 'Scope berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit', [
            'service'=> $service
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validatedData = $request -> validate([
            'title'=>'required|max:255',   
            'image' => 'image|file|max:5024',
        ]);

        // validasi jika image kosong sc dibawah tidak dijalankan, tapi kalau ada isinya akan ke upload ke post-image dan ke insert ke database
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->store('post-images');
        }

        Service::where('id', $service->id)
                -> update($validatedData);

        return redirect('/dashboard/services')->with('success', 'scope berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->image){
            Storage::delete($service->image);
        }
        Service::destroy($service->id);

        return redirect('/dashboard/services')->with('success', 'scope berhasil dihapus!');
    }
}
