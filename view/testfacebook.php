<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<script>
    // [1] load lên các thành phần cần thiết.
        window.fbAsyncInit = function() {
        FB.init({
            appId      : '178582412842433',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.5' // use graph api version 2.8
        });
        // kiểm tra trạng thái hiện tại
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };
    // hàm xử lý trạng thái đăng nhập
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);

        if (response.status === 'connected') {
            // người dùng đã đăng nhập vào facebook ,        chưa biết có đăng nhập ứng dụng không
            alert("Bạn đã đăng nhập fb");
        } else {
            // The person is not logged into your app or we are unable to tell.
            alert("bạn chưa đăng nhập facebook;")
            document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';
        }
    }
    // [3] yêu cầu đăng nhập facebook
    function RequestLoginFB() {
        window.location ='https://www.facebook.com/login.php?skip_api_login=1&api_key=178582412842433&redirect_uri=localhost/web/';
        // &redirect_uri= địa chỉ sẽ được gọi lại khi người dùng đăng nhập facebook.
    }
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=310302665968750';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<!--nut đăng nhập-->
<input type="button" value="đăng nhập" onclick="RequestLoginFB();">
<!--like button-->

<!--<div class="fb-like" data-href="http://localhost/web/view/testfacebook.php" data-layout="standard" data-action="like"-->
<!--     data-size="small" data-show-faces="true" data-share="true"></div>-->
<!--<br>-->
<!--<!--page plugin-->-->
<!--<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="300"-->
<!--     data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"-->
<!--     data-show-facepile="true">-->
<!--    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">-->
<!--        <a href="https://www.facebook.com/facebook">-->
<!--            Facebook-->
<!--        </a>-->
<!--    </blockquote>-->
<!--</div>-->
<!--<br>-->
<!--<!--comments plugin-->-->
<!--<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator"-->
<!--     data-width="50" data-numposts="5">-->
<!--</div>-->


</body>
</html>