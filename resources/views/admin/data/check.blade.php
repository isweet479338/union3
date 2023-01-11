@extends('layouts.master', ['title' => __('Input'), 'modal' => 'lg'])
@section('content')
<form action="{{ route('admin.people_search') }}" method="post">
    @csrf
<div class="row">
    <div class="col-md-12">
            <div class="card border-primary">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                     <label for="word_id">{{_lang('Word')}}</label>

                      <select class="form-control select" name="word_id" id="word_id">
                        <option>{{_lang('Select_Word')}}</option>
                        <?php foreach ($words as $key => $value): ?>
                        <option data-id={{ $value->id }} value="{{$value->id}}">{{$value->word}}
                        </option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                    <div class="col-md-4">
                    <div class="form-group">
                     <label for="mowja_id">{{_lang('Mowja')}}</label>

                      <select class="form-control select" name="mowja_id" id="mowja_id">
                        <option value="">{{_lang('Select_Mowja')}}</option>
                     
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                     <label for="village_id">{{_lang('Village')}}</label>

                      <select class="form-control select" name="village_id" id="village_id">
                        <option value="">{{_lang('Select_Village')}}</option>
                     
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                     <label for="village_id">{{_lang('People')}}</label>

                      <select class="form-control select" name="people_id" id="people_id">
                        <option value="">{{_lang('Select_People')}}</option>
                     
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                     <div class="card-footer text-center">
                        <button type="submit" type="button" class="btn btn-info btn-outline btn-fill btn-wd" id="click_here">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Check Input
                        </button>
                         <button type="button" class="btn btn-wd btn-info btn-outline" id="checking"  style="display: none;" disabled=""> <i class="fa fa-spinner fa-spin" style="font-size: 20px" aria-hidden="true"></i></button>
                    </div>  
                  </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</form>
    @endsection
    @push('js')
    <script type="text/javascript">
    $(document).on('change', '#word_id', function() {
      var word_id = $(this).val();
      var type = $('#word_id option:selected').data('id');
      $.ajax({
          type: 'GET',
          url: '/admin/get_mowja',
          data: {
              word_id: word_id
          },
          dateType: 'json',
        success: function(data) {

          

                    $('#mowja_id').html("");
                    $('#mowja_id').append($('<option>').text("Select Mowja").attr('value', ""));
                    $.each(data, function(i, sub_act) {
                        $('#mowja_id').append($('<option>').text(sub_act.mowja).attr('value', sub_act.id).attr('data-id', sub_act.id));
                    });
                }
            });
        });

   $(document).on('change', '#mowja_id', function() {
      var mowja_id = $(this).val();
      var type = $('#mowja_id option:selected').data('id');
      $.ajax({
          type: 'GET',
          url: '/admin/get_village',
          data: {
              mowja_id: mowja_id
          },
          dateType: 'json',
        success: function(data) {

                    $('#village_id').html("");
                    $('#village_id').append($('<option>').text("Select Village").attr('value', ""));
                    $.each(data, function(i, sub_act) {
                        $('#village_id').append($('<option>').text(sub_act.village).attr('value', sub_act.id));
                    });
                }
            });
        });

   $(document).on('change', '#village_id', function() {
      var village_id = $(this).val();
      var type = $('#village_id option:selected').data('id');
      $.ajax({
          type: 'GET',
          url: '/admin/get_user',
          data: {
              village_id: village_id
          },
          dateType: 'json',
        success: function(data) {
            
                    console.log( data );
                    $('#people_id').html("");
                    $('#people_id').append($('<option>').text("Select People").attr('value', ""));
                    $.each(data, function(i, sub_act) {
                        $('#people_id').append($('<option>').text(sub_act.holder_name+', '+sub_act.mobile+', Holding No.'+sub_act.holding_no).attr('value', sub_act.id));
                    });
                }
            });
        });
 
</script>
    @endpush