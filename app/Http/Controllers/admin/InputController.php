<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainInput;
use App\Member;
use App\SubMember;
use App\Word;
use Session;

class InputController extends Controller
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
     return view('admin.input.check',compact('words'));
    }

    public function go_input(Request $request)
    {
        $word_id=$request->word_id;
        $mowja_id=$request->mowja_id;
        $village_id=$request->village_id;
        session::put('word_id', $word_id);
        session::put('mowja_idmowja_id', $mowja_id);
        session::put('village_id', $village_id);
        return response()->json(['success' => true, 'status' => 'success', 'message' =>'Checking Successfully','goto'=>route('admin.input_form')]);
    }

    public function input_form()
    {
        $word =session::get('word_id');
        if ($word==null) {
         return redirect()->route('admin.input.create');
        }
        return view('admin.input.create');
    }


    public function input_first(Request $request)
    {
        // dd($request->input());
        $check_session =session::get('word_id');
        if ($check_session ==null) {
          return response()->json(['status' => 'danger', 'message' => 'Session Time Out','dangoto'=>route('admin.input.create')]);
        }
        $model_id =$request->model_id;
        if ($model_id==null) {
        $is_default =true;
          $model =new MainInput;
        }else{
         $is_default =false;
         $model=MainInput::find($model_id);   
        }
        $model->word_id =session::get('word_id');
        $model->mowja_id =session::get('mowja_id');
        $model->village_id =session::get('village_id');
        $model->road_no =$request->road_no;
        $model->holding_no =$request->holding_no;
        $model->holder_name =$request->holder_name;
        $model->education =$request->education;
        $model->house_name =$request->house_name;
        $model->mobile =$request->mobile;
        $model->house_type =$request->house_type;
        $model->occupation =$request->occupation;
        $model->government_grants =$request->government_grants;
        $model->allowance_eligible =$request->allowance_eligible;
        $model->status ='inactive';
        $model->save();
        $model_id =$model->id;
        session::put('model_id', $model->id);
        if ($model_id==null) {
         $model =null;
        }else{
         $model=$model;   
        }
  
        $html = view('admin.input.step_two',compact('model_id','model','is_default'))->render();
        return response()->json(['status' => 'success', 'message' => 'Well Done.Goto Next Step', 'stepOver' => $html]);
    }
    
   public function get_packege_option(Request $request)
   {

    $row_index =$request->row_index;
    return view('admin.input.packege.get_packege_option',compact('row_index'));
   }

   public function get_variation_value_row(Request $request)
   {
    $variation_id =$request->variation_id;
    $row =$request->row;
    return view('admin.input.packege.get_variation_value_row',compact('variation_id','row'));
   }

   public function back_first_step(Request $request)
   {
       if ($request->ajax()) {
         $model_id = $request->model_id;
         $model =MainInput::find($model_id);
         return view('admin.input.first_step',compact('model'));
      }
   }

    public function back_second_step(Request $request)
   {
       if ($request->ajax()) {
         $model_id = $request->model_id;
         return view('admin.input.step_two',compact('model_id'));
      }
   }


   public function input_second(Request $request)
   {
    // dd($request->input());

    $variable =$request->get('packege_variation');
    if ($variable !=null) {
   
      for ($i=0; $i <count($variable) ; $i++) {
        if ($variable[$i]['member_name'] !=null) {
        $member =new Member;
        $member->main_input_id =$request->model_id;
        $member->member_name =$variable[$i]['member_name'];
        $member->member_education =$variable[$i]['member_education'];
        $member->member_occupation =$variable[$i]['member_occupation'];
        $member->member_government_grants =$variable[$i]['member_government_grants'];
        $member->member_allowance_eligible =$variable[$i]['member_allowance_eligible'];
        $member->save();
        $option_id =$member->id;
        for ($j=0; $j <count($variable[$i]['variation']) ; $j++) { 
         if ($variable[$i]['variation'][$j]['sm_name'] !=null) {
          $submember =new SubMember;
          $submember->member_id =$option_id;
          $submember->sm_name =$variable[$i]['variation'][$j]['sm_name'];
          $submember->sm_education =$variable[$i]['variation'][$j]['sm_education'];
          $submember->sm_occupation =$variable[$i]['variation'][$j]['sm_occupation'];
          $submember->sm_government_grants =$variable[$i]['variation'][$j]['sm_government_grants'];
          $submember->sm_allowance_eligible =$variable[$i]['variation'][$j]['sm_allowance_eligible'];
          $submember->save();
         }
        }
       }
      }
     }

        $model_id =$request->model_id;
        $model =MainInput::find($model_id);
        if ($request->default_required==1) {
            $is_default=false;
          }else{
            $is_default=true;
          }
        $html = view('admin.input.step_three',compact('model_id','model','is_default'))->render();
        return response()->json(['status' => 'success', 'message' => ' Well Done Second Step.Goto Next Step', 'stepOver' => $html]); 
   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $model_id =$request->model_id;
         $model=MainInput::find($model_id);   
         $model->arable_land =$request->arable_land;
         $model->unclaimed_and =$request->unclaimed_and;
         $model->is_landless =$request->is_landless;
         $model->status ='Active';
         $model->save();

        $html = view('admin.input.back_first')->render();
        return response()->json(['status' => 'success', 'message' => 'Data Save Successfully', 'stepOver' => $html]); 
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
}
