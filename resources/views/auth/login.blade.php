@include('layout')
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
<div class="row">
    <div class="col-md-12">
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="col-md-12">
        Password
        <input class="form-control" type="password" name="password" id="password">
    </div>

    <div class="col-md-12">
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div class="col-md-12">
        <button class="btn btn-default" type="submit">Login</button>
    </div>
</div>
</form>
@include('footer')
