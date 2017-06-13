<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>NGA Gaming</title>
    </head>
    <body>
        <?php require_once('components/responsive-nav.html'); ?>
    	<div class="wrapper">
            <?php require_once('components/header.php'); ?>
    		<div class="content-wrapper" id="main">
                <?php require_once('components/nav.html'); ?>
                <div class="content-area">
                    <img src="img/headline-contact.png" class="headline" title="Contact Us">
                    <div class="content">
                        <?php include('forum/index.php'); ?>
                    </div>

                    <!-- <img src="img/top-left.png" class="borders top-left"> -->
                    <img src="img/top-right.png" class="borders top-right">
                    <img src="img/bottom-right.png" class="borders bottom-right">
                    <img src="img/bottom-left.png" class="borders bottom-left">
                </div>
                <div class="clear"></div>
            </div>
    	</div>
        <?php require_once('components/footer.html'); ?>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#forums').addClass('selected');
        $('#resForums').addClass('selected');
    </script>
</html>