     <div class="card border border-primary">
	   <div class="card-body">
      <div class="stats bg-info">
            <p class="text-muted text-center" style="color: #fff !important">
            {{_lang('Member_details')}}
            </p>
          </div>
        <div class="row">
        	      <div class="col-md-12">
                          <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <td>
                                      <label for="member_name">{{_lang('Name')}}</label>
                                        <input type="text" name="packege_variation[{{$row_index}}][member_name]" id="member_name" class="form-control" placeholder="{{_lang('Member_name')}}">
                                       
                                     </td>
                                      <td>
                                      <label for="member_education">{{_lang('Education')}}</label>
                                        <input type="text" name="packege_variation[{{$row_index}}][member_education]" id="member_education" class="form-control" placeholder="{{_lang('Member_Educaation')}}">  
                                     </td>
                                      <td>
                                      <label for="member_occupation">{{_lang('Occupation')}}</label>
                                            <select id="member_occupation" name="packege_variation[{{$row_index}}][member_occupation]" class="form-control select" data-parsley-errors-container="#sub_category_error">
			                                <option value="">{{_lang('Let_Select')}}</option>
			                                <option value="government">{{_lang('Government')}}</option>
			                                <option value="non_government">{{_lang('Non_Government')}}</option>
			                                <option value="business">{{_lang('Business')}}</option>
			                                <option value="foreigner">{{_lang('Foreigner')}}</option>
			                                <option value="day_labor">{{_lang('Day_labor')}}</option>
			                                <option value="student">{{_lang('Student')}}</option>
			                                <option value="begger">{{_lang('Begger')}}</option>
			                                
			                                </select> 
                                     </td>
                                      <td>
                                      <label for="member_government_grants">{{_lang('Government_grants')}}</label>
                                         <select id="member_government_grants" name="packege_variation[{{$row_index}}][member_government_grants]" class="form-control select" data-parsley-errors-container="#sub_category_error">
			                                <option value="">{{_lang('Let_Select')}}</option>
			                                <option value="freedom">{{_lang('Freedom')}}</option>
			                                <option value="dissabaled">{{_lang('dissabaled')}}</option>
			                                <option value="older">{{_lang('older')}}</option>
			                                <option value="widow">{{_lang('widow')}}</option>
			                                <option value="others">{{_lang('others')}}</option>
			                                
			                               </select> 

                                     </td> 
                                     <td colspan="2">
                                     <label for="member_allowance_eligible">{{_lang('Is_the_allowance_eligible')}}</label>
                                     <select id="member_allowance_eligible" name="packege_variation[{{$row_index}}][member_allowance_eligible]" class="form-control select" data-parsley-errors-container="#sub_category_error">
		                                <option value="">{{_lang('Let_Select')}}</option>
		                                <option value="dissabaled">{{_lang('dissabaled')}}</option>
		                                <option value="older">{{_lang('older')}}</option>
		                                <option value="widow">{{_lang('widow')}}</option>
		                                <option value="others">{{_lang('others')}}</option>
		                                
		                                </select> 

                                     </td>
                                 </tr>
                    
                                     <tr>
                                     <td colspan="4">
                                          <div class="stats bg-info">
                                            <p class="text-muted text-center" style="color: #fff !important">
                                            {{_lang('Sub_Member_details')}}
                                            </p>
                                          </div>
 
                                     </td>
                                     <td>
                                        <button data-id="{{$row_index}}" type="button" class=" btn-icon btn btn-info btn-outline btn-round btn-wd mt-2 add_variation_value_row">
                                        
                                            <span class="btn-label">
                                                <i class="fa fa-check"></i>
                                            </span>{{_lang('Add_new_Sub_Member')}}
                                        </button>
                                             <input type="hidden" id="variation_id_{{$row_index}}" value="1">
                                     </td>
                                 </tr>
                             </thead>
                             <tbody id="itinary_option_{{$row_index}}">
                                 <tr>
                                    <td>
                                         <label>{{_lang('Name')}}</label>
                                           <input type="text" name="packege_variation[{{$row_index}}][variation][0][sm_name]" id="sm_name" class="form-control" placeholder="{{_lang('Member_name')}}"> 
                                     </td>
                                     <td>
                                     <label>{{_lang('Education')}}</label>
                                         <input type="text" name="packege_variation[{{$row_index}}][variation][0][sm_education]" id="sm_education" class="form-control" placeholder="{{_lang('Member_Educaation')}}">   
                                     </td>
                                      <td>
                                       <label>{{_lang('Occupation')}}</label>
                                            <select id="sm_occupation" name="packege_variation[{{$row_index}}][variation][0][sm_occupation]" class="form-control select" data-parsley-errors-container="#sub_category_error">
			                                <option value="">{{_lang('Let_Select')}}</option>
			                                <option value="government">{{_lang('Government')}}</option>
			                                <option value="non_government">{{_lang('Non_Government')}}</option>
			                                <option value="business">{{_lang('Business')}}</option>
			                                <option value="foreigner">{{_lang('Foreigner')}}</option>
			                                <option value="day_labor">{{_lang('Day_labor')}}</option>
			                                <option value="student">{{_lang('Student')}}</option>
			                                <option value="begger">{{_lang('Begger')}}</option>
			                                
			                                </select>   
                                     </td>
                                      <td>
                                       <label>{{_lang('Government_grants')}}</label>
                                      <select id="sm_government_grants" name="packege_variation[{{$row_index}}][variation][0][sm_government_grants]" class="form-control select" data-parsley-errors-container="#sub_category_error">
			                                <option value="">{{_lang('Let_Select')}}</option>
			                                <option value="freedom">{{_lang('Freedom')}}</option>
			                                <option value="dissabaled">{{_lang('dissabaled')}}</option>
			                                <option value="older">{{_lang('older')}}</option>
			                                <option value="widow">{{_lang('widow')}}</option>
			                                <option value="others">{{_lang('others')}}</option>
			                                
			                               </select>
                                     </td>
                                      <td>
                                       <label>{{_lang('Is_the_allowance_eligible')}}</label>
                                         <select id="sm_allowance_eligible" name="packege_variation[{{$row_index}}][variation][0][sm_allowance_eligible]" class="form-control select" data-parsley-errors-container="#sub_category_error">
		                                <option value="">{{_lang('Let_Select')}}</option>
		                                <option value="dissabaled">{{_lang('dissabaled')}}</option>
		                                <option value="older">{{_lang('older')}}</option>
		                                <option value="widow">{{_lang('widow')}}</option>
		                                <option value="others">{{_lang('others')}}</option>
		                                
		                                </select>   
                                     </td>
                                     <td>
                                         <button type="button" class="btn btn-danger btn-xs remove_variation_value_row" data-id="{{$row_index}}">-</button>
                                     </td>
                                 </tr>
                             </tbody> 
                          </table>
                          <input type="hidden" id="variation_counter" value="1">
                      </div>
        </div>
	   </div>
    </div>