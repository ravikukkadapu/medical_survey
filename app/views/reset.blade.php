@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@endif

{{ Form::open(array('route' => array('patient_update', $token))) }}
@foreach($data as $value)

  <p>{{ Form::label('email', 'Email') }}
  {{-- {{ Form::text('email',{{}}) }}</p> --}}
  <input type = 'text' name = 'email' id = 'email' value ='{{$value->email}}' >

  <p>{{ Form::label('password', 'Password') }}
  <input type = 'password' name = 'password' id = 'password' >

  <p>{{ Form::label('confirm_password', 'Password confirm') }}
  <input type = 'password' name = 'confirm_password' id = 'confirm_password' >

  {{ Form::hidden('token', $token) }}

  <p>{{ Form::submit('Submit') }}</p>

@endforeach
{{ Form::close() }}
