<!DOCTYPE html>
<html>

<head>

    <?php echo view("opex/head",$dt_head)?>

</head>

<body>

    <div id="wrapper">

        <?php echo view("sidebar")?>

        <div id="page-wrapper" class="gray-bg">
        
            <?php echo view("opex/navbar")?>
        
            <?php echo view($template,$dt_tmpl); ?>            
            
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>
        
    </div>

    <?php echo view("opex/js_under",$dt_js_under)?>


</body>

</html>
