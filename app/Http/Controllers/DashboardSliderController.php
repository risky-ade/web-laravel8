<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sliders.index',[
            'sliders'=> Slider::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sliders.create');
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
            'description' => 'required',   
            'image' => 'image|file|max:5024',
        ]);

        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('post-images');
        }

        Slider::create($validatedData);
        return redirect('/dashboard/sliders')->with('success', 'Slider berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
    //     if($slider->author->id !== auth()->user()->id) {
    //         abort(403);
    //    }
        return view('dashboard.sliders.edit', [
            'slider'=> $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $validatedData = $request -> validate([
            'title'=>'required|max:255',
            'description' => 'required',   
            'image' => 'image|file|max:5024',
        ]);

        // validasi jika image kosong sc dibawah tidak dijalankan, tapi kalau ada isinya akan ke upload ke post-image dan ke insert ke database
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->store('post-images');
        }

        Slider::where('id', $slider->id)
                -> update($validatedData);

        return redirect('/dashboard/sliders')->with('success', 'slider berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if($slider->image){
            Storage::delete($slider->image);
        }
        Slider::destroy($slider->id);

        return redirect('/dashboard/sliders')->with('success', 'slider has been deleted!');
    }
}
