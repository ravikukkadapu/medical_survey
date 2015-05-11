@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@elseif (Session::has('success'))
  An email with the password reset has been sent.
@endif
{{--
{{ Form::open(array('route' => 'password_request')) }}


  <p>{{ Form::label('email', 'Patient Email') }}
  {{ Form::text('email') }}</p>

  <p>{{ Form::submit('Submit') }}</p>


{{ Form::close() }} --}}

<form method =post>
    Patient-Email : <input type='text' name='email' id ='email'><BR><BR>
    <a href="{{URL::route('patient_request')}}" class="button tiny">patient</a>
    <a href="{{URL::route('doctor_request')}}" class="button tiny">doctor</a>
</form>
