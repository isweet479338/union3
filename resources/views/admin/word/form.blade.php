@php
$route = 'admin.word.';
@endphp
@if(isset($model))
{!! Form::model($model, ['route' => [$route.'update', $model->id], 'class' => 'form-validate-jquery', 'id' => 'content_form', 'method' => 'PUT', 'files' => true]) !!}
@else
{!! Form::open(['route' => $route.'store', 'class' => 'form-validate-jquery', 'id' => 'content_form', 'files' => true, 'method' => 'POST']) !!}
@endif
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      {{ Form::label('name', _lang('Word') , ['class' => 'col-form-label required']) }}
      {{ Form::text('word', null, ['class' => 'form-control', 'id'=>'word', 'placeholder' => _lang('Word'),'required'=>'']) }}
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