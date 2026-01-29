<?php
session_start();
require_once('db/config.php');
require_once('const/school.php');
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css">
<link type="text/css" rel="stylesheet" href="loader/waitMe.css">
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<title>SSHS - Login</title>
<style>
body {
    background: linear-gradient(135deg, #722992, #1e2180);
    min-height: 100vh;
}
.login-box {
    border-radius: 20px;
}
.btn-primary {
    background: #722992;
    border-color: #722992;
    color: #ffffff;
    font-weight: bold;
    padding: 12px 30px;
    border-radius: 50px;
    transition: var(--transition);
}
.btn-primary:hover {
    background: #1e2180;
    border-color: #1e2180;
    color: #ffffff;
}
.input-group-text {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    color: #722992;
}
.input-group-text i {
    font-size: 1.1rem;
}
.login-head {
    color: #722992 !important;
    font-size: 1.8rem;
    margin-bottom: 30px;
    text-align: center;
}
</style>
</head>
<body> 

<section class="login-content">

<div class="login-box">
<a href="../index.html" class="back-button" style="position: absolute; top: 20px; left: 20px; font-size: 1.5rem; color: #722992; text-decoration: none; z-index: 10;"><i class="fas fa-arrow-left"></i></a>

<form class="login-form app_frm" action="core/auth-teach" autocomplete="OFF" method="POST">
<center><img height="140" src="images/logo/<?php echo WBLogo; ?>"></center>
<h4 class="login-head"><i class="fas fa-user-tie me-2"></i> Teacher Login <?php// echo WBName; ?></h4>
<p class="text-center">Teacher Portal Access

</p>
<div class="mb-3">
<label class="form-label">Teacher Email</label>
<div class="input-group">
<span class="input-group-text"><i class="fas fa-envelope"></i></span>
<input class="form-control" type="text" placeholder="Teacher Email" required name="username">
</div>
</div>
<div class="mb-3">
<label class="form-label">Password</label>
<div class="input-group">
<span class="input-group-text"><i class="fas fa-lock"></i></span>
<input class="form-control" type="password" placeholder="Login Password" required name="password">
</div>
</div>
<div class="mb-3">
<div class="utility">
<p class="semibold-text mb-2"><a href="javascript:void(0);" data-toggle="flip">Forgot Password ?</a></p>
</div>
</div>
<div class="mb-3 btn-container d-grid">
<button type="submit" class="btn btn-primary btn-block app_btn"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>SIGN IN</button>
</div>
<div class="text-center">
<p class="mb-0">Need help? <a href="../contact.html">Contact Support</a></p>
<br>
<!-- <p class="mt-2"><a href="index.html">Back to Home</a></p> -->
</div>
</form>

<form class="forget-form app_frm" action="core/forgot_pw" method="POST" autocomplete="OFF">
<center><img height="140" src="images/logo/<?php echo WBLogo; ?>"></center>
<h4 class="login-head">Teacher Portal <?php// echo WBName; ?></h4>
<p class="text-center">Login Password Recovery</p>
<div class="mb-3">
<label class="form-label">Teacher Email</label>
<div class="input-group">
<span class="input-group-text"><i class="fas fa-envelope"></i></span>
<input class="form-control" type="text" placeholder="Teacher Email" required name="username">
</div>
</div>
<div class="mb-3 btn-container d-grid">
<button type="submit" class="btn btn-primary btn-block app_btn"><i class="bi bi-unlock me-2 fs-5"></i>RESET PASSWORD</button>
</div>
<div class="mb-3 mt-3">
<p class="semibold-text mb-0"><a href="javascript:void(0);" data-toggle="flip"><i class="bi bi-chevron-left me-1"></i> Back to Login</a></p>
</div>
</form>
</div>
</section>

<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="loader/waitMe.js"></script>
<script src="js/forms.js"></script>
<script src="js/sweetalert2@11.js"></script>
<script type="text/javascript">
$('.login-content [data-toggle="flip"]').click(function() {
$('.login-box').toggleClass('flipped');
return false;
});
</script>
<?php require_once('const/check-reply.php'); ?>
</body>
</html>
