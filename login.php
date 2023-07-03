<?php
session_start();
include_once 'con_db.php';
    if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password = $_POST['password'];
    $stm = "SELECT * FROM student WHERE email='$email' AND password='$password '";
    $q = $con->prepare($stm);
    $q->execute();
    $data=$q->fetch();
    if (!$data) 
    {
      echo "Your username or password is incorrect!";
    } 
    else 
    {
      $_SESSION['users']=["email"=>$data['email'],"name"=>$data['name'],"gender"=>$data['gender'],"phone"=>$data['phone'],"level"=>$data['level'],"college"=>$data['college'],"img_p"=>$data['img_p'],"id"=>$data['id']];
      header("location:profile.php");
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تسجيل الدخول</title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />


  <!-- Bootstrap Style -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <!-- fontawesome Style -->
  <link rel="stylesheet" href="./assets/css/all.min.css" />
  <!-- CSS Style -->
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <!-- By CodeAstro - codeastro.com -->

  <body>

    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url('../assets/images/big/auth-bg.jpg') no-repeat center center;">
        <div class="auth-box row">
          <div class="col-lg-5 col-md-5 modal-bg-img bg-white">
            <div class="p-3 text-center">

              <img src="assets/images/big/icon.png" class="" alt="icon" while="55" height="55">
              <h2 class="mt-3 text-center main_color_text">تسجيل دخول الطالب</h2>
              <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="mt-4" method="POST">
                <div class="row">
                  <div class="col-lg-12 mb-3">
                    <div class="form-group text-end">
                      <label class="fs-18 main_color_text" for="uname">البريد الالكتروني</label>
                      <input class="form-control" name="email" id="uname" type="email" placeholder="البريد الالكتروني" required>
                    </div>
                  </div>
                  <div class="col-lg-12 mb-3">
                    <div class="form-group text-end">
                      <label class="fs-18 main_color_text" for="pwd">كلمة المرور</label>
                      <input class="form-control" name="password" id="pwd" type="password" placeholder="كلمة المرور" required>
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" name="login" class="btn btn-block main_color_bg text-white fs-18 w-100 button_hover">تسجيل الدخول</button>
                  </div>
                  <div class="col-lg-12 text-center mt-3">
                    <a href="./terms_sign.php" class="text-danger d-block mt-2">التسجيل لاول مرة</a>
                    <div class="col-lg-12 text-center mt-3">
                                   <a href="index.php" class="text-danger">العودة</a>
                                </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <div class="col-lg-7 px-0 col-md-7 bg-white">
            <div class="text-center">
              <img src="assets/images/signup.png" class="w-100 " height="400" alt="wrapkit">
            </div>
          </div>
        </div>
      </div>
      <!-- Login box.scss -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <!--end form-->
    <!-- start section loding-->
    <!-- <div class="loding-overlay">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div> -->
    <!-- end section loding-->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- <script src="Attach/js/wow.min.js"></script> -->
    <script src="assets/jquery.nicescroll.min.js"></script>
  </body>

</html>