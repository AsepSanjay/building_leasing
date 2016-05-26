<!DOCTYPE html>
<html>
<head>
<title>Ar Rahmah | Login</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
    <h1>Login</h1>
        <div class="login"> 
            <div class="ribbon-wrapper h2 ribbon-red">
                <div class="ribbon-front">
                    <h2>Login Form</h2>
                </div>
                <div class="ribbon-edge-topleft2"></div>
                <div class="ribbon-edge-bottomleft"></div>
            </div>
            <form action="{{url(action('LoginController@postLogin'))}}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <ul>
                    <li>
                        <input type="email" name="email" class="text" placeholder="Email" value="<?php echo Form::old('email') ?>"><a href="#" class=" icon user"></a>
                    </li>
                     <li>
                        <input type="password" name="password" placeholder="Password" value="<?php echo Form::old('password') ?>"><a href="#" class=" icon lock"></a>
                    </li>
                </ul>

            
            <div class="submit">
                <input type="submit" value="Log in" >
            </div>
            </form>
        </div>
<!--start-copyright-->
        <div class="copy-right">
                <p>Copyright &copy; 2015  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    <!--//end-copyright-->
</body>
</html>