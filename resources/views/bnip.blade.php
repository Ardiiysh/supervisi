
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/login.css') !!}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="login-container">
    <h3>Account Login</h3>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12">
           <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="email-label">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                </span>
              </div>
              <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-label">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="password-label">
                  <i class="fa fa-key" aria-hidden="true"></i>
                </span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-label">
            </div>

           

            <div class="text-center">
              <button type="submit" class="btn btn-customized">Login Account</button>
            </div>

          </form>
        </div>
      </div>
    </div>
</div>