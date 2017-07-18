<!DOCTYPE html>
<html>

<head>

   
   <?php echo view("opex/head",$dt_head)?>

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" method="post" action="<?=url("auth/register")?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?=url("auth/login")?>">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

      <!-- Mainly scripts -->
    <?php echo view("opex/js_under",$dt_js_under)?>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>