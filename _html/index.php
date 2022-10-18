<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body>

    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container">

            <div class="container">

            
            </div>

        </section>

        <?php include('inc/footer.php'); ?>
        <?php include('inc/popup.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

    <script>
        $(document).ready(function(){
            $('.popup-item').first().trigger('click');
        });
    </script>

</body>

</html>