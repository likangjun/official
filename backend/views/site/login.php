<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>和晟天成后台管理系统</title>
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/layer.js"></script>
</head>
<body>
<div class="login-container">
    <div class="content" id="formId">
        <div class="title">和晟天成后台管理系统</div>
        <div class="login-form">
            <input class="inpt" type="text" name="username" placeholder="用户名"/>
            <input class="inpt" type="password" name="password" placeholder="密码"/>
            <button class="smt-btn" type="button" id="submit">登录</button>
        </div>
    </div>
    <div class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </div>
</div>
</body>
<script>
    $(document).keypress(function (event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            login();
        }
    });
    $('#submit').on('click', function () {
        login();
    });

    function login() {
        $("#submit").html('登录中<div class="scroll"></div>');
        var username = $("input[name='username']").val();
        var password = $("input[name='password']").val();
        $.post("index.php?r=site/login", {
            "username": username,
            "password": password,
            "<?=Yii::$app->request->csrfParam?>": '<?= Yii::$app->request->csrfToken ?>'
        }, function (data) {
            var res = JSON.parse(data);
            if (res.code == 0) {
                $(".content").addClass("content-move");
                $(".login-container").fadeOut(800);
                setTimeout(function () {
                    window.location.href = 'index.php?r=site/index'
                }, 600);
            } else {
                $('#submit').html('登录');
                layer.alert(res.message, {
                    icon: 2
                })
            }
        });
    }

</script>
</html>