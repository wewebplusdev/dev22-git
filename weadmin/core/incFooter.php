<!-- <div class="footerBackOffice">
    <div class="imgLogo"><?php echo $langTxt["login:footecopy"] ?> <i class="versionsmall"><?php echo 'Current PHP Version: ' . phpversion(); ?></i></div>
    <div class="divLogin"><?php echo $langTxt["login:footecontact"] ?></div>
</div> -->

<script type="text/javascript">
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200){  
            $('.divRightHead').addClass('fixed');
            $('.divRightMain').addClass('tiny');
        }
        else{
            $('.divRightHead').removeClass('fixed');
            $('.divRightMain').removeClass('tiny');
        }
    });

    // $(document).ready(function () {
    //     $('[href="#defTop"]').click(function() {     
    //         $('body,html').animate({
    //             scrollTop : 0                      
    //         }, 1000);
    //     });
    // });
</script>

<div class="footerBackOffice">
    <!-- <div>
        <div class="imgLogo">COPYRIGHT 2020 Unimit Co., Ltd. ALL RIGHTS RESERVED.</div>
    </div> -->
    <div>
    <!-- <i class="versionsmall"><?php echo 'Current PHP Version: ' . phpversion(); ?></i> -->
	    <div class="imgLogo"><?php echo $langTxt["login:footecopy"]; ?> </div>
	    <!-- <div class="divLogin"><?php echo $langTxt["login:footecontact"]; ?></div> -->
	</div>
</div>
<style>
    .versionsmall {
        color: #616161;
    }
</style>

<div id="loadCheckComplete"></div>
<div class="clearAll"></div>
<?php include("../lib/disconnect.php"); ?>
