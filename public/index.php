<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Ann of the Future</title>
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/icon.min.css">
    <link rel="stylesheet" type="text/css" href="css/g.css">
</head>
<body>
<script>
if(window.location.href.indexOf('com') > -1) {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-88347917-1', 'auto');
    ga('send', 'pageview');
}
</script>
<div id="page">
    <div class="page home">
        <h1><img src="annofthefuture.png" alt="Ann of the Future"></h1>

        <!-- <a href="login" class="aof btn">login <i class="long arrow right icon"></i></a> -->
        <a href="invite" class="aof">request an invite</a>
        <div class="invite">
            <form action="//afrolicious.us5.list-manage.com/subscribe/post?u=b166a3c52504065ea50c230ad&amp;id=08bac5c0fa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="fields">
                    <div class="field">
                        <label for="mce-FNAME">First Name </label>
                        <input type="text" placeholder="First Name" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="field">
                        <label for="mce-LNAME">Last Name </label>
                        <input type="text" placeholder="Last Name" value="" name="LNAME" class="" id="mce-LNAME">
                    </div>
                    <div class="field">
                        <label for="mce-EMAIL">Email Address </label>
                        <input type="email" placeholder="Email Address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<!--                     <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_b166a3c52504065ea50c230ad_08bac5c0fa" tabindex="-1" value="">
                    </div> -->
                    <div class="field">
                        <label for="f">&nbsp;</label>
                        <input class="button" type="submit" value="Subscribe">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/semantic.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.aof').on('click', function(event) {
            event.preventDefault()
            $('.page.home h1').animate(
                {
                    marginTop: '30vh'
                },
                1000
            );

            $('.invite').fadeIn(2000)
        });
    })
</script>
</body>
</html>