<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Proftpd admin interface">
    <meta name="author" content="Noe Nieto">
    <title>Proftpd Admin interface - Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
      }

      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }
      .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>
  </head>
  <body>

    <div class="container">
      {{ Form::open(array("url" => "login", "class" => "form-signin", "role" => "form")) }}
        <h2 class="form-signin-heading">ProFTPd Login</h2>

        @if ($errors->first('user_id'))
        <div class="form-group has-error">
          <label class="control-label" for="user_id">$errors->first('user_id')</label>
        @endif
          {{ Form::text(
              'user_id',
              Input::old('user_id'),
              array(
                'class' => 'form-control',
                'placeholder' => 'Administrator\'s User Id',
                'required' => True,
                'autofocus'=>True
              ))
          }}
        @if ($errors->first('user_id'))
        </div>
        @endif

        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          {{ Form::checkbox('remember_me', 'yes') }}
          Remember me
        </label>
        {{ Form::submit('Log in', array('class' => 'btn btn-lg btn-primary btn-block')) }}
      {{ Form::close() }}

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>