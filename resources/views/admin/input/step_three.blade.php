 <form action="{{ route('admin.input.store') }}" method="post" accept-charset="utf-8" class="form_third">
     @if($model->members->count()==0)
       <div class="row">
        <div class="col-md-6">
               <button type="button" class="btn btn-wd btn-info btn-outline previous_step2 back ">
                 <span class="btn-label">
                    <i class="fa fa-arrow-left"></i>
                </span>
                {{_lang('Bank')}}
             </button>
            <button type="button" class="btn btn-wd btn-primary btn-outline back1 previous_step" style="display: none;" disabled=""> <i class="fa fa-spinner fa-spin" style="font-size: 20px" aria-hidden="true"></i></button>
        </div>
        <div class="col-md-6" style="text-align: right;">
           
            </div>
        </div>
     @endif
 <div class="row">
   <div class="col-md-9">
     <div class="card border border-primary">
	   <div class="card-body">
	    <div class="stats bg-info">
            <p class="text-muted text-center" style="color: #fff !important">
            {{_lang('Land_details')}}
            </p>
          </div>
        <div class="row">
        <input type="hidden" name="model_id" id="model_id" value="{{$model_id}}">
        	 <div class="col-md-6">
                 <div class="form-group">
                    <label for="arable_land">{{_lang('Arable_land')}} ({{_lang('Percentage')}})%</label>
                    <input autocomplete="off" type="text" name="arable_land" id="arable_land" class="form-control" placeholder="{{_lang('Enter_Arable_land')}}" value="">
                  </div>
              </div>
               <div class="col-md-6">
                 <div class="form-group">
                    <label for="unclaimed_and">{{_lang('Unclaimed_and')}} ({{_lang('Percentage')}})%</label>
                    <input autocomplete="off" type="text" name="unclaimed_and" id="unclaimed_and" class="form-control" placeholder="{{_lang('Enter_Unclaimed_and')}}" value="">
                  </div>
              </div>

                  <div class="col-md-4">
                  <div class="form-check checkbox-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" name="is_landless" type="checkbox" value="landless">
                        <span class="form-check-sign"></span>
                        {{_lang('landless')}}
                    </label>
                </div>
              </div>
        </div>
	   </div>
    </div>
   </div>

      <div class="col-md-3">
     <div class="card border border-primary">
	   <div class="card-body">
	    <div class="stats bg-info">
            <p class="text-muted text-center" style="color: #fff !important">
            {{_lang('Tax_details')}}
            </p>
          </div>
        <div class="row">
        	 <div class="col-md-12">
                 <div class="form-group">
                    <label for="tax">{{_lang('Tax')}} ({{_lang('Percentage')}})%</label>
                    <input autocomplete="off" type="text" name="tax" id="tax" class="form-control" placeholder="{{_lang('Enter_Tax')}}" value="">
                  </div>
              </div>
        </div>
	   </div>
    </div>
   </div>
     <div class="col-lg-12 mt-3 ">
      <p class="text-right">
      <button type="submit" class="btn btn-wd btn-success btn-outline submit">
        {{_lang('Save_input')}}
        <span class="btn-label btn-label-right">
            <i class="fa fa-arrow-right"></i>
        </span>
    </button>
        <button type="button" class="btn btn-wd btn-info btn-outline submiting"  style="display: none;" disabled=""> <i class="fa fa-spinner fa-spin" style="font-size: 20px" aria-hidden="true"></i></button>
      </p>
     </div>
  </div>
</form>