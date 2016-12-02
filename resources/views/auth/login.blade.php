<html>
<head>
  <title>AZService - Login</title>

  <!-- Styles -->
    <link href="/css/all.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <style type="text/css">
      html, body, .container-table{
        height: 100%;
      }
      
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
  <div class="container container-table">
    <div class="row vertical-center-row">
      <div class="col-md-4 col-sm-8 col-md-offset-4 col-sm-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12 col-sm-12 text-center">
                <h1>Login</h1>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <form role="form" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}
              <div id="infoMessage"></div>
              <div class="form-group has-feedback has-feedback-left">
                <input type="username" name="username" id="username" class="form-control custInput" placeholder="Username">
                <i class="form-control-feedback glyphicon glyphicon-user"></i>
                @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group has-feedback has-feedback-left">
                <input type="password" name="password" id="username" class="form-control custInput" placeholder="Password">
                <i class="form-control-feedback glyphicon glyphicon-lock"></i>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <button id="btn_Login" name="btn_Login" type="submit" class="btn btn-block btn-primary" value="Login">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>