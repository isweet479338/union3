<?php

namespace App\Http\Controllers\admin;
use App\Word;
use App\Mowja;
use App\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MowjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Mowja::orderBy('id','DESC')->get();
        return view('admin.mowja.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $models = Word::orderBy('id','DESC')->get();
          return view('admin.mowja.form', compact('models'));
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
            'mowja'=>'required',
           
        ]);

          $customer =new Mowja;
          $customer->word_id = $request->word;
          $customer->mowja =$request->mowja;
          $customer->save();

          $log['user_id'] = auth()->user()->id;
          $log['work'] = 'Add'.$request->name .'As a Mowja';
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
        $model = Mowja::find($id);
        return view('admin.mowja.form',compact('model', 'models'));
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
            'word'=>'required',
            'mowja'=>'required',
        ]);

          $customer = Mowja::find($id);
          $customer->word_id =$request->word;
          $customer->mowja =$request->mowja;
          $customer->save();

          $log['user_id'] = auth()->user()->id;
          $log['work'] = 'Update'.$request->name .'As a Mowja';
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
        $customer=Mowja::find($id);
        $customer->delete();
        $log['user_id'] = auth()->user()->id;
        $log['work'] = 'Delete a Mowja';
        Log::create($log);
        if ($customer) {
            return response()->json(['success' => true, 'status' => 'success', 'message' => 'Information Delete Successfully.','load'=>true]);
        }

    }
}
