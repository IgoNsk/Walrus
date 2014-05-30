{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal', 'role' => 'form')) }}
  {{ Form::email('Auth[login]', Input::old('Auth[login]'), ['placeholder'=>'Эл. почта', 'class'=>'form-control', 'required'=>'', 'autofocus'=>'']) }}
  {{ Form::password('Auth[password]', ['class'=>'form-control', 'placeholder'=>'Пароль', 'required'=>'']) }}
  <label class="checkbox">
    {{ Form::checkbox('Auth[rememberMe]', 'remember-me') }} Запомнить меня
  </label>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
{{ Form::close() }}
