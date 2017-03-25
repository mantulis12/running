@include('layout')
<div class="container">
  <div class="row">
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <div class="row">
          <div class="col-md-6">
              Name
              <input type="text" name="name" value="{{ old('name') }}">
          </div>

          <div class="col-md-6">
              Email
              <input type="email" name="email" value="{{ old('email') }}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              Password
              <input type="password" name="password">
          </div>

          <div class="col-md-6">
              Confirm Password
              <input type="password" name="password_confirmation">
          </div>
        </div>
        <div class="col-md-12">
            <button type="submit">Register</button>
        </div>
    </form>
  </div>
</div>
@include('footer')
