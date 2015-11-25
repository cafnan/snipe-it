@extends('backend/layouts/default')
@section('content')


{{ Form::open(["url" =>"/custom_fieldsets/create-field"])}}
Name: {{ Form::text("name")}}<br>
type: {{ Form::select("element",["text" => "Text Box"])}}<br>
format: {{ Form::select("format",predefined_formats(),"ANY") }}
Custom Format (if selected): {{ Form::text("custom_format") }}<br>
<input type='submit'>
{{ Form::close() }}
<br><a href='/custom_fieldsets'>Back to Custom Fieldset List</a>
@stop
