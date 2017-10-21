<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Mission;
use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipmentid = DB::table('equipments')->insert([
            'mission_id' => $request->missionid,
            'name' => $request->name,
            'need_count' => 0
        ]);

        DB::table('equipmentlist')->insert([
            'mission_id' => $request->missionid,
            'equipment_id' => $equipmentid,
            'volunteer_id' => Session::get('volunteerid'),
            'count' => $request->count
        ]);

        return redirect()->action('EquipmentsController@show', ['mission' => $request->missionid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        $equipments = DB::table('equipments')
            ->leftjoin('equipmentlist', function($join){
                $join->on('equipments.mission_id', '=', 'equipmentlist.mission_id');
            })
            ->get();

        $equipments = $equipments->where('mission_id', $mission->id);
        // dd($equipments);

        return view('donations.show', compact('mission', 'equipments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //
    }
}
