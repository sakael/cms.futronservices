<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadershipRequest;
use App\Http\Requests\UpdateLeadershipRequest;
use App\Models\Leadership;
use Illuminate\Support\Str;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderships = Leadership::all();
        return view('leaderships.index',['leaderships'=>$leaderships]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeadershipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeadershipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function show(Leadership $leadership)
    {
        return view('leaderships.edit',['leadership'=>$leadership]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function edit(Leadership $leadership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeadershipRequest  $request
     * @param  \App\Models\Leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeadershipRequest $request, Leadership $leadership)
    {
        $data = $request->validated();
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/leaderships/'), $imageName);
            $path = "/images/leaderships/".$imageName;
            $data['photo']=$path;
        }
        if(!isset($data['active'])){
            $data['active'] = false;
        }
        Leadership::where('id', $leadership->id)
        ->update($data);
        return redirect(route('leaderships.update',['leadership'=>$leadership->id]))->with('status', 'Leadership updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leadership  $leadership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leadership $leadership)
    {
        //
    }
}
