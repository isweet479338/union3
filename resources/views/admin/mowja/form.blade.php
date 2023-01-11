@php
$route = 'admin.mowja.';
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

      <select class="form-control" name="word" id="word">
        <option>Select Word</option>

        <?php foreach ($models as $key => $value): ?>
        <option {{ @$model->word_id == $value->id ? 'selected' : '' }} value="{{$value->id}}">{{$value->word}}</option>
        <?php endforeach ?>

      </select>


    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      {{ Form::label('name', _lang('Mowja') , ['class' => 'col-form-label required']) }}
      {{ Form::text('mowja', null, ['class' => 'form-control', 'id'=>'mowja', 'placeholder' => _lang('Mowja'),'required'=>'']) }}
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