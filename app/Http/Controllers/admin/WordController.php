<?php

namespace App\Http\Controllers\admin;
use App\Word;
use App\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Word::orderBy('id','DESC')->get();
        return view('admin.word.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.word.form');
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
            'word'=>'required',
           
        ]);

          $customer =new Word;
          $customer->word =$request->word;
          $customer->save();

          $log['user_id'] = auth()->user()->id;
          $log['work'] = 'Add'.$request->name .'As a Word';
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
        $model =word::find($id);
        return view('admin.word.form',compact('model'));
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
            'word'=>'required'
        ]);

          $customer = Word::find($id);
          $customer->word =$request->word;
          $customer->save();

          $log['user_id'] = auth()->user()->id;
          $log['work'] = 'Update'.$request->name .'As a Word';
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
        $customer=Word::find($id);
        $customer->delete();
        $log['user_id'] = auth()->user()->id;
        $log['work'] = 'Delete a Word';
        Log::create($log);
        if ($customer) {
            return response()->json(['success' => true, 'status' => 'success', 'message' => 'Information Delete Successfully.','load'=>true]);
        }
    }
}
