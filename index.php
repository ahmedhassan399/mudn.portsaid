<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الصفحة الرئيسية </title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />


  <!-- Bootstrap Style -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <!-- fontawesome Style -->
  <link rel="stylesheet" href="./assets/css/all.min.css" />
  <!-- CSS Style -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <style> 
  @keyframes gaber-left- {
    50%{
       left: 0;
       border-radius: 0; 
       width: 12px;
       height: 12px;
    }
    100%{
        border-radius: 6px;
        width: 100%;
        height: 100%;
        left: 0;
    }
}
  @keyframes gaber-left {
    50%{
       left: 0;
       border-radius: 0; 
       width: 12px;
       height: 12px;
       background-color: var(--main-color);
    }
    100%{
        border-radius: 6px;
        width: 100%;
        height: 100%;
        left: 0;
        background-color: var(--main-color);
        border: 2px solid white;
    }
}
  @keyframes gaber-right {
    50%{
       right: 0;
       border-radius: 0; 
       width: 12px;
       height: 12px;
    }
    100%{
        border-radius: 6px;
        width: 50%;
        height: 100%;
        right: 0;
        background-color: var(--main-color);
        border: 2px solid white;
    }
}
@keyframes gaber-right- {
    50%{
       right: 0;
       border-radius: 0; 
       width: 12px;
       height: 12px;
    }
    100%{
        border-radius: 6px;
        width: 100%;
        height: 100%;
        right: 0;
    }
}
   @keyframes gaber-up-down {
    0%,
    100%{
        top:0
    }
    50%{
        top:-30px
    }
}
  .gaber {
    animation: gaber-up-down 1.5s linear infinite;
    position: relative;
  }
  .button,
  .button- {
    position: relative;
    transition: .5s;
  }
  .button-:hover::after {
    animation: gaber-left- .5s linear forwards;
    z-index: 0;
  }
  .button-:hover::before {
    animation: gaber-right- .5s linear forwards ;
    z-index: 0;
  }
  .button:hover::before {
    animation: gaber-right .5s linear forwards ;
    z-index: 0;
  }
  .button:hover::after{
    animation: gaber-left .5s linear forwards;
    z-index: 0;
  }
  .button a,
  .button- a {
    position: relative;
    z-index: 1;
  }
  .button:hover a{
    color: white;
    transition-delay: 0.5s;
  }
  .button::before {
    content: "";
    width: 12px;
    height: 12px;
    background-color: white;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: -30px;
    border-radius: 50%;
  }
  .button-::before {
    content: "";
    width: 12px;
    height: 12px;
    background-color: var(--main-color);
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: -30px;
    border-radius: 50%;
  }
  .button::after{
    content: "";
    width: 12px;
    height: 12px;
    background-color: white;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: -30px;
    border-radius: 50%;
  }
  .button-::after {
    content: "";
    width: 12px;
    height: 12px;
    background-color: var(--main-color);
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: -30px;
    border-radius: 50%;
  }
  .nav-item {
    background-color: #f8f8f8;
    opacity: .95;
  }
  .text{
    text-align: center;
  }
  @media (max-width: 767px) {
    .header_contain .d-flex {
      flex-direction: column;
    }
    .header_contain .text {
      position: relative;
      top: -20px;
      right: -40px;
    }
    .header_contain .text h2{
      font-size: 22px;
    }
    .header_contain .text p{
      font-size: 15px;
    }
    .logInStudents .d-flex img {
      display: none;
    }
    .logInStudents .text {
      transform: translateX(-50%);
      position: relative;
      left: 50%;
    }
    .navbar-toggler-icon {
      background-color: var(--main-color);
      width: 2em;
      height: 2em;
      border-radius: 6px;
    }
    nav .ms-3 {
      margin-left: 0;
    }
    img.gaber {
      width: 85%;
    }
    .lng {
      display: none;
    }
    .rsb {
      max-width: 50%;
    }
    .rsb-logo {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      margin-right: 5px;
    }
    .phone {
      display: flex;
    }
    .footer {
      padding-top: 5px;
      padding-bottom: 5px;
    }
    .rsb-img {
      order: 1;
      width: 100px;
    }
    img {
      width: 162px;
    }
  }
  </style>
</head>

<body>

  <header class="header ">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark px-4  ">
      <!-- Logo -->
      <a class="navbar-brand me-0 ms-3" href="#">
        <img src="./assets/images/logo.png" alt="logo" width="100" height="100">
      </a>

      <!-- Button Down -->
      <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links header -->
      <div class="collapse navbar-collapse incode" id="navbarNavDropdown">
        <ul class="navbar-nav justify-content-between ms-5  mt-2 mt-lg-0">
          <li class="nav-item ms-3 shadow fw-bold">
            <a class="nav-link active" href="Mang/login_mang.php" aria-current="page">الادارة <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item ms-3 shadow fw-bold">
            <a class="nav-link " href="./login.php">خدمات الدفع </a>
          </li>

          <li class="nav-item ms-3 shadow fw-bold">
            <a class="nav-link " href="./terms_sign.php">التسجيل</a>
          </li>

          <li class="nav-item ms-3 shadow fw-bold">
            <a class="nav-link " href="./login.php">تسجيل دخول </a>
          </li>

          <li class="nav-item ms-3 shadow fw-bold">
            <a class="nav-link " href="contact.php"> الشكاوي و البلاغات</a>
          </li>

        </ul>

        <!-- Mobile -->
        <div class="text-center me-auto lng">
          <a href="#" class="app text-center main_color_text fw-bold">
            <i class="fa-solid fa-mobile-screen fa-2x "></i>
            <span class="d-block">التطبيق </span>
          </a>

          <div class="Lang text-center main_color_text">
            <p class="mb-0">
              اللغة /
              <span>Ar</span>
            </p>
          </div>
        </div>
      </div>
    </nav>

    <div class="header_contain main_color_bg text-white d-flex align-items-center">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="text">
            <h1 class="title fw-bold fs-40">الخدمات الالكترونية</h1>
            <h2 class="text2 fw-bold fs-32"> للمدن الجامعية بجامعة بورسعيد </h2>
            <p class="disc fs-24"> خدمات الكترونية شاملة لكافة الطلاب <br>
              <span class="me-5 d-block"> بكافة المحافظات </span>
            </p>
          </div>

          <img src="./assets/images/header.png" class="h-100 gaber" width="50%" alt="Header Image">
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!--start Registration-->
  <div class="registration main_color_text d-flex align-items-center py-3">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        <div class="text text-center w-40">
          <h2 class="title fw-bold fs-32">شروط التسجيل</h2>
          <p class="fs-18 fw-bold">لمعرفة كافة متطلبات و شروط التسجيل بالمدينه</p>
          <button class="btn btn-primary  main_color_bg border-0 button_hover fw-bold button-">
            <a href="./terms.php" class="fs-18 text-white"> اضغط هنا </a>
          </button>
        </div>

        
          <img src="./assets/images/registration.png " alt="Registration" width="100%" height="300" />
        
      </div>
    </div>
  </div>
  <!--end Registration-->

  <!--start First_registration-->
  <div class="First_registration main_color_bg text-white d-flex align-items-center py-3">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="text w-60">
          <h2 class="title fw-bold fs-32">التسجيل في المدينه لأول مرة</h2>
          <p class="fs-18 fw-bold">اذا كنت بالعام الاول بكليتك يمكنك التسجيل من هنا الكترونياً بالمدينه الجامعية في بورسعيد و اتمام جميع الاوراق المطلوبة</p>
          <button class="btn btn-primary fs-18 bg-white main_color_text fw-bold border-0 button_hover_white button">
            <a href="./terms_sign.php" class="fs-18 main_color_text "> سجل هنا </a>
          </button>
        </div>

       
          <img src="./assets/images/First_Registration.png" alt="First_Registration" width="100%" height="300" />
        

      </div>
    </div>
  </div>
  <!--end First_registration-->

  <!--start LogInStudents-->
  <div class="logInStudents main_color_text d-flex align-items-center py-3">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="image w-40">
          <img src="./assets/images/LogInStudents.png " alt="LogInStudents" width="100%" height="300" />
        </div>

        <div class="text text-center w-60">
          <h2 class="title fw-bold fs-32">تسجيل دخول الطلاب</h2>
          <p class="fs-18 fw-bold">يمكنك تسجيل الدخول علي الموقع والتسجيل الالكترونيا بالمدينة الجامعية في بورسعيد واتمام جميع الاوراق المطلوبة الكترونيا
          </p>
          <button class="btn btn-primary fs-18 main_color_bg text-white border-0 button_hover fw-bold button-">
            <a href="./login.php" class="fs-18 text-white"> سجل الأن </a>
          </button>
        </div>

      </div>
    </div>
  </div>
  <!--end LogInStudents-->

  <!--start Electronic-->
  <div class="electronic main_color_bg text-white d-flex align-items-center py-3">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="text w-60">
          <h2 class="title fw-bold fs-32">خدمه الدفع الالكتروني</h2>
          <p class="fs-18 fw-bold">بيمكنك باستخدام خدمتنا الدفع الشهري الكترونيا</p>
          <button class="btn btn-primary fs-18 bg-white main_color_text fw-bold border-0 button_hover_white button">
            <a href="./login.php" class="fs-18 main_color_text"> اضغط هنا </a>
          </button>
        </div>

        
          <img src="./assets/images/electronic.png" alt="Electronic" width="100%" height="300" />
        

      </div>
    </div>
  </div>
  <!--end Electronic-->

  <!--start StudentAdmission-->
  <div class="studentAdmission main_color_text d-flex align-items-center py-3">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between border_studentAdmission pb-2">
        <div class="text text-center w-40">
          <h2 class="title fw-bold fs-32">قبول الطلاب</h2>
          <p class="fs-18 fw-bold">يمكنك الاستعلام عن قبولك بالمدن الجامعية</p>
          <button class="btn btn-primary fs-18 main_color_bg text-white border-0 button_hover fw-bold button-"><a href="./Mang/login_mang.php" style="color: white;">من هنا</a></button>
        </div>

      
          <img src="./assets/images/studentAdmission.png " alt="StudentAdmission" width="100%" height="300" />
        
      </div>
    </div>
  </div>
  <!--end StudentAdmission-->

  <!-- Start Services -->
  <div class="services py-4">
    <div class="container">
      <div class="row">

        <div class="col-sm-4 mb-5 rsb" >
          <div class="fate text-center">
            <i class="fa-regular fa-clipboard fa-2x mb-3 "></i>
            <h3 class="main_color_text fs-16 fw-bold ">  بيانات مباشرة</h3>
          </div>
        </div>

        <div class="col-sm-4 mb-5 rsb">
          <div class="fate text-center">
            <i class="fa-solid fa-house fa-2x mb-3 "></i>
            <h3 class="main_color_text fs-16 fw-bold">تسجيل الغرف</h3>
          </div>
        </div>

        <div class="col-sm-4 mb-5 rsb">
          <div class="fate text-center">
            <i class="fa-solid fa-wave-square fa-2x mb-3 "></i>
            <h3 class="main_color_text fs-16 fw-bold"> الكشف الطبي للمدن الجامعية</h3>
          </div>
        </div>

        <div class="col-sm-4 mb-5 rsb">
          <div class="fate text-center">
            <i class="fa-solid fa-qrcode fa-2x mb-3 "></i>
            <h3 class="main_color_text fs-16 fw-bold"> الدخول السريع</h3>
          </div>
        </div>

        <div class="col-sm-4 mb-5 rsb">
          <div class="fate text-center">
            <i class="fa-regular fa-credit-card fa-2x mb-3 "></i>
            <h3 class="main_color_text fs-16 fw-bold"> مصروفات ادارية</h3>
          </div>
        </div>

        <div class="col-sm-4 mb-5 rsb">
          <div class="fate text-center">
            <i class="fa-solid fa-dollar-sign  fa-2x mb-3 "></i>
            <h3 class="main_color_text fs-16 fw-bold">الدفع الالكتروني</h3>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Services -->

  <!--start footer-->
  <footer class="footer main_color_bg text-white py-4">
    <div class="container">
      <div class="row">
        <h2 class="fs-36 text-center fw-bold">تواصل معنا</h2>

        <div class="col-sm-6">
          <div class="connect_us">
            <!-- <h3 class="fs-22 fw-bold">البريد الالكتروني</h3> -->
            <div class="mail w-100 mb-3" style="display: flex;
            align-items: center;">
              <i class="fa-regular fa-envelope fs-20 text-dark"></i>
              <form action="#" method="post" class="d-inline" style="margin-right: 5px; font-size: 16px; font-weight: bold;" >
                <label for="#email_us" style="margin-right: 18px; font-size: 20px;">(066)3400344</label>
                <!-- <input type="email" name="email_us" id="email_us" class="form-control d-inline w-75 mx-2"> -->
                <!-- <button type="submit" class="fs-16 btn btn-primary bg-white main_color_text fw-bold button_hover_white border-0">ارسال</button> -->
              </form>
            </div>
            <div class="phone mb-3" >
              <i class="fa-solid fa-phone fs-20 text-dark" ></i>
              <span class="fs-16 fw-bold mx-3" style="font-size: 20px">3400341,3424074,3424075,3402344</span>
            </div>
          </div>

          <div class="addirce mb-3" style="display: flex; gap: 12px; align-items: center;">
            <i class="fa-solid fa-location-dot s-20 text-dark" ></i>
            <span class="fs-16 fw-bold mx-3 " style="font-size: 20px" >شارع الجلاء , مدينة بورفؤاد , بورسعيد</span>
          </div>
        </div>

        <div class="col-sm-6 d-block me-auto text-start">
          <div class="logo text-start rsb-logo">
            <img src="./assets/images/uni.png" alt="uni" class="ms-4 rsb-img" width="100">

            <div class="fece mb-3 text-start ">
              <span class="fs-16  mb-3 mx-2  me-auto text-start"> <a style="color: #f8f8f8;" href="https://facebook.com/psu.edu.eg/">facebook</a></span>
              <i class="fa-brands fa-facebook fs-20 text-dark  me-auto text-start "></i>
            </div>

            <div class="fece mb-3 text-start ">
            <span class="fs-16  mb-3 mx-2  me-auto text-start"> <a style="color: #f8f8f8;" href="https://psu.edu.eg">web site</a></span>
              <i class="fa-brands fa-chrome fs-20 text-dark  me-auto text-start "></i>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <p>سياسة الخصوصية || شروط الاستخدام || ميثاق المتعاملين || سياسة المحتوى</p>
        <hr>
        <p> تم التنفيذ من قبل المجموعه الرابعة طلاب كلية تكنولوجيا الادارة ونظم المعلومات تحت اشراف  د/  سيد السديمي</p>
        <hr>

        <span class="fs-20"> جميع الحقوق محفوظة <i class="fa-regular fa-copyright text-dark"></i></span>

      </div>

    </div>
    </div>
  </footer>

  <!-- start section loding-->
  <!-- <div class="loding-overlay">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div> -->
  <!-- end section loding-->

  <!-- button Down -->
  <!-- <button class="button main_color_bg">Down</button> -->

  <!-- JS -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>