<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <title>-NGA- Natural Gaming Athleticism | Join Us</title>
        <script src="http://www.digitalmarketingbox.com/unoapp/js/jquery.webinquiry.js"></script>
    </head>
    <body>
        <?php require_once('components/responsive-nav.html'); ?>
    	<div class="wrapper">
            <?php require_once('components/header.php'); ?>
            <div class="content-wrapper" id="join">
                <?php require_once('components/nav.html'); ?>
                <div class="content-area">
                    <!-- <img src="img/headline-join.png" class="headline" title="Want to Join?"> -->
                    <div class="headline">
                        Join the Fray
                    </div>
                    <div class="content">
                        <h2>We're always looking for new recruits!</h2>

                        <p>NGA is on the pursuit of active, dedicated and simply awesome gamers from all nationalities and platforms. There's no discrimination when you're a Natural Gaming Athlete. In order to complete your registration and become an official member, we ask that all new recruits sign-up to our <a href="http://therealnga.com/forum/">forum</a> and post in the New Recruits section under the Rules and Regulations topic. We simply want to know you're active, and get to know you a bit. Real -nGa-'s stick together.</p>

                        <p>Thanks,<br>
                            Team -<span class="highlight">nGa</span>-</p>

                        <form action="javascript:void(0)" class="join-us-form" id="joinUsForm" data-recipient="evanparadis@gmail.com,lambo8604@gmail.com" data-formtype="NGA Sign Up Form Submission">
                            <!-- Success -->
                            <div id="customSuccessMsg" style="display: none;">
                                <div>
                                    <h2 class="thanks">Thank You.</h2>
                                    <p>Thank you for submitting your reservation.</p>
                                    <p>We'll get back to you shortly to confirm your request.</p>
                                    <p>If you have further questions, please <a href="mailto:info@unoapp.com">email us</a>.</p>
                                    <div onclick="$('#customSuccessMsg').hide();">OK</div>
                                </div>
                            </div>

                            <!-- Error -->
                            <div id="errorModal" style="display: none;">
                                <div>
                                    <h2 class="error">Error</h2>
                                    <p class="msg">This text will be replaced with the error message.</p>
                                    <div onclick="$('#errorModal').hide();">OK</div>
                                </div>
                            </div>

                            <div class="left-side">
                                <input data-name="Name" placeholder="Name" type="text" data-required>
                            </div>
                            <div class="right-side">
                                <input data-name="Location" placeholder="Location" type="text">
                            </div>
                            <div class="clear"></div>
                            <div class="left-side">
                                <input data-name="Email" placeholder="Email" type="text" data-email>
                            </div>
                            <div class="right-side">
                                <input data-name="Gamer Tag" placeholder="Gamer tag" type="text">
                            </div>
                            <div class="clear"></div>
                            <!-- <div class="left-side">
                                <input data-name="Platform" placeholder="System / Platform" type="text">
                            </div>
                            <div class="right-side">
                                <input data-name="Games Played" placeholder="Games you Play?" type="text">
                            </div>
                            <div class="clear"></div>
                            <div class="left-side">
                                <input data-name="Twitch ID" placeholder="Twitch ID" type="text">
                            </div>
                            <div class="right-side">
                                <input data-name="Twitter ID" placeholder="Twitter ID" type="text">
                            </div>
                            <div class="clear"></div>
                            <textarea data-name="Why do you want to join?" placeholder="Why do you want to join?"></textarea>
                            <div class="clear"></div> -->
                            <p class="disclaimer">Submitting this form will take you to our forums</p>
                            <div onclick="submitReservation();" class="submit-btn">Join the Community!</div>
                            <div class="clear"></div>
                        </form>
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
        $('#joinNow').addClass('selected');
        $('#resJoin').addClass('selected');
    </script>
    <script>
        // Form Functionality
        var successMsg = function(msg) {
            $('#customSuccessMsg').show();
        }
        var errorMsg = function(msg, $elems) {
            $('#errorModal').show();
            $('#errorModal .msg').text(msg);

            // Highlight the input fields with errors
            if ($elems) {
                $elems.addClass('highlighted');
            }
        }
        function submitReservation() {
            submitWebFormById('joinUsForm',
                {
                    alwaysSubmitEmptyFields: true,
                    successURL: 'http://therealnga.com/forum/'
                }
            );
        }
    </script>
</html>