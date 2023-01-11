   <div class="card-body">
              <form action="{{ route('admin.input_first') }}" method="post" accept-charset="utf-8" class="validate_form1">
               <input type="hidden" name="model_id" id="model_id" value="{{$model->id}}">
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
                                        <input autocomplete="off" type="text" name="road_no" id="road_no" class="form-control" placeholder="{{_lang('Enter_road_no')}}" value="{{$model->road_no}}">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="holding_no">{{_lang('Holding_no')}}</label>
                                        <input autocomplete="off" type="text" name="holding_no" id="holding_no" class="form-control" placeholder="{{_lang('Enter_holding_no')}}" value="{{$model->holding_no}}">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="holder_name">{{_lang('Holder_name')}}</label>
                                        <input autocomplete="off" type="text" name="holder_name" id="holder_name" class="form-control" placeholder="{{_lang('Enter_holder_name')}}" value="{{$model->holder_name}}">
                                       </div>
                                    </div>
                                 </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="education">{{_lang('Education')}}</label>
                                        <input autocomplete="off" type="text" name="education" id="education" class="form-control" placeholder="{{_lang('Enter_education')}}" value="{{$model->education}}">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="house_name">{{_lang('House_name')}}</label>
                                        <input autocomplete="off" type="text" name="house_name" id="house_name" class="form-control" placeholder="{{_lang('Enter_house_name')}}" value="{{$model->house_name}}">
                                       </div>
                                    </div>

                                     <div class="col-md-4 form-group">
                                       <div class="form-group">
                                        <label for="mobile">{{_lang('Mobile')}}</label>
                                        <input autocomplete="off" type="text" name="mobile" id="mobile" class="form-control" placeholder="{{_lang('Enter_mobile')}}" value="{{$model->mobile}}">
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
                                <option {{$model->house_type=='seasoned'?'selected':''}} value="seasoned">{{_lang('Seasoned')}}</option>
                                <option {{$model->house_type=='half_seasoned'?'selected':''}} value="half_seasoned">{{_lang('Half_Seasoned')}}</option>
                                <option {{$model->house_type=='row'?'selected':''}} value="row">{{_lang('Raw')}}</option>
                                
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
                                <option {{$model->occupation=='government'?'selected':''}} value="government">{{_lang('Government')}}</option>
                                <option {{$model->occupation=='non_government'?'selected':''}} value="non_government">{{_lang('Non_Government')}}</option>
                                <option {{$model->occupation=='business'?'selected':''}} value="business">{{_lang('Business')}}</option>
                                <option {{$model->occupation=='foreigner'?'selected':''}} value="foreigner">{{_lang('Foreigner')}}</option>
                                <option {{$model->occupation=='day_labor'?'selected':''}} value="day_labor">{{_lang('Day_labor')}}</option>
                                <option {{$model->occupation=='student'?'selected':''}} value="student">{{_lang('Student')}}</option>
                                <option {{$model->occupation=='begger'?'selected':''}} value="begger">{{_lang('Begger')}}</option>
                                
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
                                <option {{$model->government_grants=='freedom'?'selected':''}} value="freedom">{{_lang('Freedom')}}</option>
                                <option {{$model->government_grants=='dissabaled'?'selected':''}} value="dissabaled">{{_lang('dissabaled')}}</option>
                                <option {{$model->government_grants=='older'?'selected':''}} value="older">{{_lang('older')}}</option>
                                <option {{$model->government_grants=='widow'?'selected':''}} value="widow">{{_lang('widow')}}</option>
                                <option {{$model->government_grants=='others'?'selected':''}} value="others">{{_lang('others')}}</option>
                                
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
                                <option {{$model->allowance_eligible=='dissabaled'?'selected':''}} value="dissabaled">{{_lang('dissabaled')}}</option>
                                <option {{$model->allowance_eligible=='older'?'selected':''}} value="older">{{_lang('older')}}</option>
                                <option {{$model->allowance_eligible=='widow'?'selected':''}} value="widow">{{_lang('widow')}}</option>
                                <option {{$model->allowance_eligible=='others'?'selected':''}} value="others">{{_lang('others')}}</option>
                                
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
            <script>
              _useselect2();
            </script>