@php
$route = 'admin.village.';
@endphp
@if(isset($model))
{!! Form::model($model, ['route' => [$route.'update', $model->id], 'class' => 'form-validate-jquery', 'id' => 'content_form', 'method' => 'PUT', 'files' => true]) !!}
@else
{!! Form::open(['route' => $route.'store', 'class' => 'form-validate-jquery', 'id' => 'content_form', 'files' => true, 'method' => 'POST']) !!}
@endif
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {{ Form::label('name', _lang('Word') , ['class' => 'col-form-label required']) }}

      <select class="form-control" name="word_id" id="word_id">
        <option>Select Word</option>
        <?php foreach ($models as $key => $value): ?>
        <option {{  @$model->word_id == $value->id ? 'Selected':"" }} data-id={{ $value->id }} value="{{$value->id}}">{{$value->word}}</option>
        <?php endforeach ?>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      {{ Form::label('name', _lang('Mowja') , ['class' => 'col-form-label required']) }}

            <select id="mowja_id" name="mowja_id" class="form-control select" data-parsley-errors-container="#sub_category_error">
              <option value="">Choose...</option>

       
              @if(isset($model))
                @foreach($mowjas as $m => $mm)

                   <option  {{  $model->mowja_id == $mm->id ? 'Selected':"" }} value="{{  $mm->id }}">{{  $mm->mowja }}</option>

                @endforeach
              @endif

   

            </select>
        

    </div>
  </div>

    <div class="col-md-12">
    <div class="form-group">
      {{ Form::label('name', _lang('Village') , ['class' => 'col-form-label required']) }}
      {{ Form::text('village', null, ['class' => 'form-control', 'id'=>'village', 'placeholder' => _lang('Village'),'required'=>'']) }}
    </div>
  </div>


</div>
<div class="row">
  <div class="col-md-6 mx-auto text-center">

    {{ Form::submit(isset($model) ? _lang('Update'):_lang('Create'), ['class' => 'btn btn-outline btn-success btn-round btn-wd w-100 ', 'id' => 'submit']) }}
    <button type="button" class="btn btn-link" id="submiting" style="display: none;" disabled="">{{ _lang('Submiting') }} <img src="{{ asset('loading.gif') }}" width="15"></button>
  </div>
</div>
{!!Form::close()!!}


<script type="text/javascript">
  $(document).on('change', '#word_id', function() {
      var word_id = $(this).val();
      var type = $('#word_id option:selected').data('id');
      $.ajax({
          type: 'GET',
          url: 'get_mowja',
          data: {
              word_id: word_id
          },
          dateType: 'json',
        success: function(data) {

          

                    $('#mowja_id').html("");
                    $('#mowja_id').append($('<option>').text("Select Mowja").attr('value', ""));
                    $.each(data, function(i, sub_act) {
                        $('#mowja_id').append($('<option>').text(sub_act.mowja).attr('value', sub_act.id));
                    });
                }
            });
        });




</script>