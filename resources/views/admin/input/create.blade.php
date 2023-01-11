@extends('layouts.master', ['title' => __('Input|Data'), 'modal' => 'lg'])
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="badge-header">
            <div class="row">
            </div>
        </div>
      <div class="card">
        <div class="card-body">
        <div class="first_step">
            <div class="card-body">
              <form action="{{ route('admin.input_first') }}" method="post" accept-charset="utf-8" id="validate_form">
                <div class="row">
                    <div class="col-md-12">

                      <div class="card border border-primary">
                          <div class="card-body">
                               <div class="stats bg-danger">
                                <p class="text-muted text-center" style="color: #fff !important">
                                {{_lang('Holder_details')}}
                                </p>
                                </div>
                                  <div class="row">
                                    <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="road_no">{{_lang('Road_no')}}</label>
                                        <input autocomplete="off" type="text" name="road_no" id="road_no" class="form-control" placeholder="{{_lang('Enter_road_no')}}" value="">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="holding_no">{{_lang('Holding_no')}}</label>
                                        <input autocomplete="off" type="text" name="holding_no" id="holding_no" class="form-control" placeholder="{{_lang('Enter_holding_no')}}" value="">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="holder_name">{{_lang('Holder_name')}}</label>
                                        <input autocomplete="off" type="text" name="holder_name" id="holder_name" class="form-control" placeholder="{{_lang('Enter_holder_name')}}" value="">
                                       </div>
                                    </div>
                                 </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="education">{{_lang('Education')}}</label>
                                        <input autocomplete="off" type="text" name="education" id="education" class="form-control" placeholder="{{_lang('Enter_education')}}" value="">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="house_name">{{_lang('House_name')}}</label>
                                        <input autocomplete="off" type="text" name="house_name" id="house_name" class="form-control" placeholder="{{_lang('Enter_house_name')}}" value="">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="mobile">{{_lang('Mobile')}}</label>
                                        <input autocomplete="off" type="text" name="mobile" id="mobile" class="form-control" placeholder="{{_lang('Enter_mobile')}}" value="">
                                       </div>
                                    </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                      
                        <div class="card border border-primary">
                          <div class="card-body">
                              <div class="stats bg-info">
                                <p class="text-muted text-center" style="color: #fff !important">
                                {{_lang('House_details')}}
                                </p>
                              </div>
                            <div class="form-group">
                                <label for="house_type">{{_lang('House_type')}}</label>
                                <select id="house_type" name="house_type" class="form-control select" data-parsley-errors-container="#sub_category_error">
                                <option value="seasoned">{{_lang('Seasoned')}}</option>
                                <option value="half_seasoned">{{_lang('Half_Seasoned')}}</option>
                                <option value="row">{{_lang('Raw')}}</option>
                                
                                </select>
                            </div>
                          </div>
                       </div>  
                    </div> 

                    <div class="col-md-6">
                      
                        <div class="card border border-primary">
                          <div class="card-body">
                             <div class="stats bg-primary">
                                <p class="text-muted text-center" style="color: #fff !important">
                                {{_lang('Occupation_details')}}
                                </p>
                              </div>
                            <div class="form-group">
                                <label for="occupation">{{_lang('Occupation')}}</label>
                                <select id="occupation" name="occupation" class="form-control select" data-parsley-errors-container="#sub_category_error">
                                <option value="">{{_lang('Let_Select')}}</option>
                                <option value="government">{{_lang('Government')}}</option>
                                <option value="non_government">{{_lang('Non_Government')}}</option>
                                <option value="business">{{_lang('Business')}}</option>
                                <option value="foreigner">{{_lang('Foreigner')}}</option>
                                <option value="day_labor">{{_lang('Day_labor')}}</option>
                                <option value="student">{{_lang('Student')}}</option>
                                <option value="begger">{{_lang('Begger')}}</option>
                                
                                </select>
                            </div>
                          </div>
                       </div>  
                    </div> 

                    <div class="col-md-6">
                      
                        <div class="card border border-primary">
                          <div class="card-body">
                             <div class="stats bg-warning">
                                <p class="text-muted text-center" style="color: #fff !important">
                                {{_lang('Grants_details')}}
                                </p>
                              </div>
                            <div class="form-group">
                                <label for="government_grants">{{_lang('Government_grants')}}</label>
                                <select id="government_grants" name="government_grants" class="form-control select" data-parsley-errors-container="#sub_category_error">
                                <option value="">{{_lang('Let_Select')}}</option>
                                <option value="freedom">{{_lang('Freedom')}}</option>
                                <option value="dissabaled">{{_lang('dissabaled')}}</option>
                                <option value="older">{{_lang('older')}}</option>
                                <option value="widow">{{_lang('widow')}}</option>
                                <option value="others">{{_lang('others')}}</option>
                                
                                </select>
                            </div>
                          </div>
                       </div>  
                    </div> 

                    <div class="col-md-6">
                      
                        <div class="card border border-primary">
                          <div class="card-body">
                             <div class="stats bg-success">
                                <p class="text-muted text-center" style="color: #fff !important">
                                {{_lang('allowance_details')}}
                                </p>
                              </div>
                            <div class="form-group">
                                <label for="allowance_eligible">{{_lang('Is_the_allowance_eligible?')}}</label>
                                <select id="allowance_eligible" name="allowance_eligible" class="form-control select" data-parsley-errors-container="#sub_category_error">
                                <option value="">{{_lang('Let_Select')}}</option>
                                <option value="dissabaled">{{_lang('dissabaled')}}</option>
                                <option value="older">{{_lang('older')}}</option>
                                <option value="widow">{{_lang('widow')}}</option>
                                <option value="others">{{_lang('others')}}</option>
                                
                                </select>
                            </div>
                          </div>
                       </div>  
                    </div> 
                </div>

                <div class="col-lg-12 mt-3 ">
                  <p class="text-right">
                  <button type="submit" class="btn btn-wd btn-danger btn-outline submit">
                    {{_lang('Next')}}
                    <span class="btn-label btn-label-right">
                        <i class="fa fa-arrow-right"></i>
                    </span>
                </button>
                    <button type="button" class="btn btn-wd btn-info btn-outline submiting"  style="display: none;" disabled=""> <i class="fa fa-spinner fa-spin" style="font-size: 20px" aria-hidden="true"></i></button>
                  </p>
                 </div>

             </form>
            </div>
            </div>

            <div class="backfirst_step">
          
            </div>
                <div class="second_step">
                  
                </div>
                <div class="third_step">
          
                </div>

          </div>
        </div>
    </div>
</div>
@endsection
@push('js')
 <script src="{{asset('js/input.js')}}"></script>
@endpush