@extends('layout.main')

@section('content')


<form action="{{ URL::route('account-create-post') }}" method="post">
<div class="field">
Email <input type="email" name="email" {{ (Input::old('email')) ? 'value = "' .e(Input::old('email')). '" ':'' }}><br>
@if($errors->has('email'))
{{ $errors->first('email') }}
@endif
</div>
<div class="field">
username <input type="text" name="username"{{ (Input::old('username')) ? 'value = "' .e(Input::old('username')). '" ':'' }}><br>
@if($errors->has('username'))
{{ $errors->first('username') }}
@endif
</div>
<div class="field">
<input type="submit" value="submit">
</div>
{{ Form::token() }}
</form>

@stop