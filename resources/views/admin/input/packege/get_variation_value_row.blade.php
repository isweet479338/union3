 <tr>
                                    <td>
                                         <label>{{_lang('Name')}}</label>
                                           <input type="text" name="packege_variation[{{$row}}][variation][{{$variation_id}}][sm_name]" id="sm_name" class="form-control" placeholder="{{_lang('Member_name')}}"> 
                                     </td>
                                     <td>
                                     <label>{{_lang('Education')}}</label>
                                         <input type="text" name="packege_variation[{{$row}}][variation][{{$variation_id}}][sm_education]" id="sm_education" class="form-control" placeholder="{{_lang('Member_Educaation')}}">   
                                     </td>
                                      <td>
                                       <label>{{_lang('Occupation')}}</label>
                                            <select id="sm_occupation" name="packege_variation[{{$row}}][variation][{{$variation_id}}][sm_occupation]" class="form-control select" data-parsley-errors-container="#sub_category_error">
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
                                      <select id="sm_government_grants" name="packege_variation[{{$row}}][variation][{{$variation_id}}][sm_government_grants]" class="form-control select" data-parsley-errors-container="#sub_category_error">
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
                                         <select id="sm_allowance_eligible" name="packege_variation[{{$row}}][variation][{{$variation_id}}][sm_allowance_eligible]" class="form-control select" data-parsley-errors-container="#sub_category_error">
		                                <option value="">{{_lang('Let_Select')}}</option>
		                                <option value="dissabaled">{{_lang('dissabaled')}}</option>
		                                <option value="older">{{_lang('older')}}</option>
		                                <option value="widow">{{_lang('widow')}}</option>
		                                <option value="others">{{_lang('others')}}</option>
		                                
		                                </select>   
                                     </td>
                                     <td>
                                         <button type="button" class="btn btn-danger btn-xs remove_variation_value_row" data-id="{{$row}}">-</button>
                                     </td>
                                 </tr>