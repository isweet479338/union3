<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainInput;
use App\Member;
use App\SubMember;
use App\Word;
use Session;

class DataController extends Controller
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
         Session::flash('model_id');
        Session::flash('word_id');
        Session::flash('mowja_id');
        Session::flash('village_id');
      $words = Word::orderBy('id','DESC')->get();
     return view('admin.data.check',compact('words'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function get_user(Request $r){
        $id = $r->village_id;
        $village = MainInput::where('village_id', $id )->get();
        return response()->json($village);
    }

    public function people_search(Request $r){

        $id = $r->people_id;
        $people = MainInput::where('id', $id )->first();
        $data['people'] = $people;
        $data['member'] = Member::where('main_input_id', $people->id )->get();


        $d = [];
        if ( count($data['member']) > 0 ) {
            foreach ($data['member'] as $key => $value) {
                $d[] = SubMember::where('member_id', $value->id )->get();
            } 
        }
        
        $data['sub'] = $d;
        return view('admin.data.show', $data);
    }





}
