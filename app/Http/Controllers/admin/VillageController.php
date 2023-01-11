<?php

namespace App\Http\Controllers\admin;
use App\Word;
use App\Mowja;
use App\Village;
use App\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Village::orderBy('id','DESC')->get();
        return view('admin.village.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = Word::orderBy('id','DESC')->get();
        return view('admin.village.form', compact('models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = $request->validate([
            'word_id'=>'required',
            'mowja_id'=>'required',
            'village'=>'required',
           
        ]);

          $customer =new Village;
          $customer->word_id = $request->word_id;
          $customer->mowja_id =$request->mowja_id;
          $customer->village =$request->village;
          $customer->save();

          $log['user_id'] = auth()->user()->id;
          $log['work'] = 'Add'.$request->name .'As a Village';
          Log::create($log);

     return response()->json(['success' => true, 'status' => 'success', 'message' => _lang('Information Created'),'load'=>true]);
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
        $models = Word::orderBy('id','DESC')->get();
        $model = Village::find($id);
        $mowjas = Mowja::where('word_id', $model->word_id)->get();

        return view('admin.village.form',compact('models', 'mowjas', 'model'));

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
         $validator = $request->validate([
            'word_id'=>'required',
            'mowja_id'=>'required',
            'village'=>'required',
           
        ]);

          $customer = Village::find($id);
          $customer->word_id = $request->word_id;
          $customer->mowja_id =$request->mowja_id;
          $customer->village =$request->village;
          $customer->save();

          $log['user_id'] = auth()->user()->id;
          $log['work'] = 'Update'.$request->name .'As a Village';
          Log::create($log);

        return response()->json(['success' => true, 'status' => 'success', 'message' => _lang('Information Update'), 'load' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $customer=Village::find($id);
        $customer->delete();
        $log['user_id'] = auth()->user()->id;
        $log['work'] = 'Delete a Village';
        Log::create($log);
        if ($customer) {
            return response()->json(['success' => true, 'status' => 'success', 'message' => 'Information Delete Successfully.','load'=>true]);
        }
    }

public function get_mowja(Request $r){

    $id = $r->word_id;
    $mowja = Mowja::where( 'word_id', $id )->get();
    return response()->json($mowja);

}


public function get_village(Request $r){

    $id = $r->mowja_id;
    $mowja = Village::where( 'mowja_id', $id )->get();
    return response()->json($mowja);

}



















}
