
 <?php
    session_start();
    if(!isset($_SESSION['users'])){
        header('location:login.php');
        exit();
    }
    else if(isset($_SESSION['users'])){
      include_once "con_db.php";
        $email =$_SESSION['users']['email'];
        $name =$_SESSION['users']['name'];
        $gender =$_SESSION['users']['gender'];
        $phone =$_SESSION['users']['phone'];
        $level =$_SESSION['users']['level'];
        $college =$_SESSION['users']['college'];
        $img_p =$_SESSION['users']['img_p'];
    }
    if(isset($_POST['logout'])){
      unset($_SESSION['users']);
      header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الصفحة الشخصية</title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />

  <!-- Bootstrap Style -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- CSS Style -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- CSS Media -->
  <link rel="stylesheet" href="assets/css/media.css" />
  <style>
    .container- {
      display: flex;
      flex-direction: column;
      gap: 30px;
      align-items: center;
      padding: 50px;
    }
    .imgs {
      height: 60vh;
      width: 100%;
      background-image: url(./assets/images/background/1.png);
      background-size: 100% 100%;
      animation: img 15s infinite linear backwards;
      transition: .5s;
      border-radius: 6px;
    }
    ul {
      list-style: none;
      display: flex;
      gap: 5px;
    }
    .le {
      height: 20px;
      width: 20px;
      background-color: #038387;
      opacity: .5;
      border-radius: 50%;
    }
    .li11 {
      animation: li1 15s infinite linear reverse;
    }
    .li22 {
      animation: li2 15s infinite linear reverse;
    }
    .li33 {
      animation: li3 15s infinite linear reverse;
    }
    .logo-1 {
      text-align: left;
      margin-bottom: 10px;
    }
    .sid {
      height: 100vh;
    }
    @keyframes img {
      32% {
        background-image: url(./assets/images/background/1.png)
      }
      33% {
        background-image: url(./assets/images/background/2.png)
      }
      65% {
        background-image: url(./assets/images/background/2.png)
      }
      66% {
        background-image: url(./assets/images/background/3.png)
      }
      99% {
        background-image: url(./assets/images/background/3.png)
      }
    }
    @keyframes li1 {
      0% {
        opacity: 1;
      }
      32% {
        opacity: 1;
      }
      33% {
        opacity: .5;
      }
      65% {
        opacity: .5;
      }
      66% {
        opacity: .5;
      }
    }
    @keyframes li2 {
      32% {
        opacity: .5;
      }
      33% {
        opacity: 1;
      }
      65% {
        opacity: 1;
      }
      66% {
        opacity: .5;
      }
    }
    @keyframes li3 {
      33% {
        opacity: .5;
      }
      65% {
        opacity: .5;
      }
      66% {
        opacity: 1;
      }
      99% {
        opacity: 1;
      }
    }
    @media (max-width: 767px) {
      .imgs {
        width: 100%;
      }
      .container- {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 20px;
        height: 50vh;
        
      }
      .logo-2 {
        opacity: 0;
      } 
      
    }
    @media (max-width: 575px) {
        .sid {
        height: 62vh;
      }
      }
    @media (min-width: 575px) {
      .logo-1 {
        display: none;
      }
    }
  
  </style>
</head>

<body>
  <div class=" logo-1">
              
    <form method="POST">
      <button type="submit" class="border-0 mt-4" name="logout" value="logout">           
              <img src="./assets/images/logout.png" alt="" width=60 height=60 >
      </button>
    </form>
  </div>
  <!-- the start -->
  <div class="landing">
    <div class="row mx-0">
      <!--Start Saide Par-->
      <div class="col-md-3 col-sm-4 px-sm-0">
        <div class="siadePare sid ">

        <!-- Logo -->
          <a href="#" class="icon d-flex justify-content-center align-items-center main_color_text ">
            <img class=" mt-1 " src="./assets/images/house.png" alt="logo" width="50px" height="50">
            <h3 class="main_color_text fw-bold fs-40 mt-4 mx-3 ">الصفحة الشخصية</h3>
          </a>

          <div class="user main_color_text text-center mt-3 ">
            <img class="4rounded-circle " style="width: 180px; height:180px" src="a/img_p/<?php echo $img_p; ?>" alt="Image User">
            <h1 class="text-center fw-bold mt-2 fs-22"><?php echo $name; ?></h1>
          </div>

          <div class="forms mt-3">
            <div class="mb-2 mx-2 d-flex justify-content-center mt-4 align-items-center">
              <span class="main_color_text fw-bold fs-24">الفرقة</span>
              <span class="me-3 px-2 fw-bold fs-22  bg-light w-80 main_color_text py-2"> <?php echo $level ; ?></span>
            </div>

            <div class="mb-2 mx-2 d-flex justify-content-center mt-4 align-items-center">
              <span class="fs-24 main_color_text fw-bold">الكلية</span>
              <span class="me-3 px-2 fw-bold fs-22 bg-light w-80 main_color_text py-2"> <?php echo $college; ?></span>
            </div>

            <div class="mb-2 mx-2 d-flex justify-content-center mt-4 align-items-center">
              <span class="fs-24 main_color_text fw-bold">النوع</span>
              <span class="me-3 px-2 fw-bold fs-22 bg-light w-80 main_color_text py-2"><?php echo $gender; ?></span>
            </div>

            <div class="mb-2 mx-2 d-flex justify-content-center mt-4 align-items-center">
              <span class="fs-24 main_color_text fw-bold">الهاتف</span>
              <span class="me-2 px-2 fw-bold fs-22 bg-light w-80 main_color_text py-2"><?php echo $phone; ?></span>
            </div>

            <div class=" mb-2 mx-2 d-flex justify-content-center mt-4 align-items-center">
              <span class="fs-24 main_color_text fw-bold">البريد</span>
              <span class="me-3 px-2 fw-bold fs-22 bg-light w-80 main_color_text py-2"> <?php echo $email ; ?></span>
            </div>


          </div>

          <div class="email mt-3 mx-5">
            <svg class="main_color_text " xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
            </svg>
            <span class=" sa main_color_text mt-3"> لتسجيل شكوى عبر البريد الإلكتروني :</span>
            <a class="text-center main_bag main_w mt-3 mx-4">email@gmail.com</a>
          </div>
          
        </div>

      </div>
      <!--End Saide Par-->

      <!-- Start Contain Page -->
      <div class="col-md-9 col-sm-8">

        <div class="parent">
            <div class="d-flex justify-content-end logo-2">
              
              <form method="POST">
                <button type="submit" class="border-0 mt-4" name="logout" value="logout">           
                        <img src="./assets/images/logout.png" alt="" width=60 height=60 >
                </button>
              </form>
            </div>
            <h3 class=" title text-center  main_color_bg text-white w-40 mx-auto py-1 mt-4 fs-39"><b>أهم الأخبار</b></h3>
          <div class="container-">
            <div class="imgs">
              
            </div>
            <ul>
              <li class="li11 le"></li>
              <li class="li22 le"></li>
              <li class="li33 le"></li>
            </ul>
          </div>  
        <!-- <div class="child  mb-1 mx-5 p-3 ">
          <div class="row justify-content-around">

          
          <div id="carouselId" class="carousel my-2 slide " data-bs-ride="carousel">
            
          <ol class="carousel-indicators mb-0 my-3 mt-1">
              <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active main_color_bg" aria-current="true" aria-label="First slide"></li>
              <li data-bs-target="#carouselId" data-bs-slide-to="1" class="main_color_bg" aria-label="Second slide"></li>
              <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>

            <div class="carousel-inner " role="listbox">

              <div class="carousel-item mb-4 active text-center">
                <img src="./assets/images/background/3.png" class="w-90"  height="300" alt="Second slide">
                <!-- <div class="main_color_text main_color_bg carousel-caption d-block">
                  <p class="fs-18 mb-0 fw-bold text-white w-100 h-100" >من الساعة السابعة صباحا الي الساعة السادسة مساءا للاناث</p>
                </div>
              </div>

              <div class="carousel-item  mb-4 active text-center">
              <img src="./assets/images/background/2.png" class="w-90" height="300" alt="Second slide">
                <!-- <div class="main_color_text main_color_bg carousel-caption d-block ">
                  <p class="fs-18 fw-bold mb-0 text-white w-100 h-100" >من الساعة السابعة صباحا الي الساعة السادسة مساءا للذكور</p>
                </div> 
              </div>

              <div class="carousel-item  mb-4 active text-center">
              <img src="./assets/images/background/1.png" class="w-90" height="300" alt="Second slide">
                <!-- <div class="main_color_text main_color_bg carousel-caption d-block ">
                  <p class="fs-18 fw-bold mb-0 text-white w-100 h-100" >من الساعة السابعة صباحا الي الساعة السادسة مساءا للذكور</p>
                </div> 
              </div>
           
            </div>

            <button class="carousel-control-prev " type="button" style="top: 135px; left: 15px;" data-bs-target="#carouselId" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" style="top: 135px; right: 15px;" data-bs-target="#carouselId" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
              </button>
          </div>

          
          
          <!-- end 
          </div>
        </div> -->

        <div class="alctorn mb-2  ">
          <div class="row justify-content-around">
            <div class=" alctorn mt-2 col-lg-4 col-md-6 col-sm-6">
              <div class="up main_color_bg text-center rounded">
                <img src="./assets/images/card_2.png" alt="card_1" class="w-100" height="200">
                <p class="fs-24 fw-bold text-center mb-1 text-white">الدفع الألكتروني</p>
                <button type="button" class="px-3 btn mb-2 border-0 bg-white fw-bold fs-16 ">
                  <a href="./pay_page/index.php" class="main_color_text">اضغط هنا</a>
                </button>
              </div>
            </div>

            <div class=" alctorn mt-2 col-lg-4 col-md-6 col-sm-6">
              <div class="up main_color_bg text-center rounded">
                <img src="./assets/images/card_1.png" alt="card_1" class="w-100" height="200">
                <p class="fs-24 fw-bold text-center mb-1 text-white"> الكشف الطبي</p>
                <button type="button" class="px-3 btn mb-2 border-0 bg-white fw-bold fs-16 main_color_text" data-bs-toggle='modal' data-bs-target='#s7aa'>أضغط هنا</button>
              </div>
            </div>

            <div class=" alctorn mt-2 col-lg-4 col-md-6 col-sm-6">
              <div class="up main_color_bg text-center rounded">
                <img src="./assets/images/leftover food.png" alt="card_1" class="rounded w-100" height="200">
                <p class="fs-24 fw-bold text-center mb-1 text-white">الطعام الفائض</p>
                <button type="button" class="px-3 btn mb-2 border-0 bg-white fw-bold fs-16 main_color_text" data-bs-toggle='modal' data-bs-target='#food'>أضغط هنا</button>
              </div>
            </div>

          </div>
        </div>
        </div>
      </div>
      <!-- End Contain Page -->

    </div>
  </div>

      <!-- model s7aaaa -->
      <div class='modal fade' id='s7aa' tabindex='-1' aria-labelledby='s7aa' aria-hidden='true'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title' id='s7aa'>التأمين الصحي لطلاب جامعه بورسعيد  </h5>
            </div>

            <div class='modal-body'>
              <ul class='list-group list-group-flush'>
                <li class='list-group-item fs-16 main_color_text'>يتلقي الطلاب الكشف من خلال الوحده الصحيه بالجامعه من خلال الخطوات التالية : </li>
                <li class='list-group-item fs-16 main_color_text'> - يحضر الطلاب ورقه التأمين الصحي من الكليه المقيد بها  </li>
                <li class='list-group-item fs-16 main_color_text'> - يذهب الطالب إلي الوحده الصحيه بكليه تجاره بورفؤاد- بورسعيد  </li>
                <li class='list-group-item fs-16 main_color_text'>  - متاح هناك كشف الاسنان والجلديه داخل الوحده دون التحويل إلي اي مكان اخر ( بالإضافه إلي الادويه المجانيه الخاصه بالاسنان والجلديه ) </li>
                <li class='list-group-item fs-16 main_color_text'> - اي كشف خارج الجلديه والاسنان يتم تحويل الطالب الي مستشفي جامعه الاسماعليه العام علي نفقه الجامعه تبعاً للمصاريف التي دفعها الطالب للكليه مسبقًا العنوان : الاسماعيليه ، الشيخ زايد ، ثالث الاسماعيليه </li>
                <li class='list-group-item fs-16 main_color_text'>  - توفر الجامعه مجانيه التحاليل في معمل اوميترا ، بالإضافه إلي عمل الاشعه اللازمه مجاناً عند مركز الايمان بورسعيد</li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>


      <!-- model food -->
      <div class='modal fade' id='food' tabindex='-1' aria-labelledby='food' aria-hidden='true'>
        <div class='modal-dialog'>
          <div class='modal-content'>

            <div class='modal-header'>
              <h5 class='modal-title' id='food'> الطعام الفائض </h5>
            </div>

            <div class='modal-body'>
              <ul class='list-group list-group-flush'>
                <li class='list-group-item fs-16 main_color_text'> الجمعيه الاسلاميه العزميه
                      العنوان :٢٧ شارع الجيش ، احمد شوقى ، حى الشروق ببورسعيد  
                      رقم التليفون : ٠٦٦٣٢٢١١٨٣ 
                      </li>
                <li class='list-group-item fs-16 main_color_text'> صناع الحياه بورسعيد 
                          العنوان : ١١ شارع العيسوى ، حى الشروق بورسعيد 
                          رقم التليفون : ٠٦٦٣٢٤٢٠١٢  </li>
                <li class='list-group-item fs-16 main_color_text'> جمعيه الخدمات الاجتماعيه 
                    العنوان : برج المحروسه ، شارع محمود صبحى وبنما ، حى الشرق بورسعيد
                    رقم التليفون : ٠٦٦٣٢٢٧٤٥
                                </li>
                <li class='list-group-item fs-16 main_color_text'>جمعيه المساعدات الاسلاميه 
                      العنوان : شارع سيد درويش تقاطع شارع طرح البحر ، العرب ، بورسعيد
                      رقم التليفون : ٠٦٦٣٢٢٧٥٠٤
                        </li>
                <li class='list-group-item fs-16 main_color_text'>  
                      جمعيه رساله للأعمال الخيريه 
                      العنوان : ٢١ شارع الشعراوى ، عماره خالد بن الوليد ، الدور الاول ، شقه٣ بورفؤاد بورسعيد
                      رقم التليفون : ٠٦٦٣٤٢٨٦٢٩/ ٠١٢٧١٨٤٩٣١٦/١٩٤٥٠
                      </li>
                <li class='list-group-item fs-16 main_color_text'> جمعية رعايه طلبة الجامعات والمعاهد
                    العنوان : شارع الشهداء والملاحة ، بورفؤاد بورسعيد 
                    رقم التليفون : ٠٦٦٣٤٠٢٦٢٧ </li>
              </ul>
            </div>

          </div>
        </div>
      </div>

  <!-- JS -->
  <script src="./assets/js/jquery-3.3.1.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <br>
  <br>
  
  <!--start footer-->
  <footer class="footer main_color_bg text-white py-2">
    <!-- <div class="container">
      <div class="row">
        <h2 class="fs-36 text-center fw-bold">تواصل معنا</h2>

        <div class="col-sm-6">
          <div class="connect_us">
            <h3 class="fs-22 fw-bold">البريد الالكتروني</h3>
            <p class="fs-16">ارسل لنا بريدا الكترونيا لمعرفة اخر اخبار الجامعة و المدينه الجامعية</p>

            <div class="mail w-100 mb-3">
              <i class="fa-regular fa-envelope fs-20 text-dark"></i>
              <form action="#" method="post" class="d-inline">
                <input type="email" name="email_us" id="email_us" class="form-control d-inline w-75 mx-2">
                <button type="submit" class="fs-16 btn btn-primary bg-white main_color_text fw-bold button_hover_white border-0">ارسال</button>
              </form>
            </div>

            <div class="phone mb-3">
              <i class="fa-solid fa-phone fs-20 text-dark"></i>
              <span class="fs-16 fw-bold mx-3">الهاتف</span>
            </div>
          </div>

          <div class="addirce mb-3">
            <i class="fa-solid fa-location-dot s-20 text-dark"></i>
            <span class="fs-16 fw-bold mx-3">العنوان</span>
          </div>
        </div>

        <div class="col-sm-6 d-block me-auto text-start">
          <div class="logo text-start ">
            <img src="./assets/images/uni.png" alt="uni" class="ms-4" width="100">

            <div class="fece mb-3 text-start ">
              <span class="fs-16  mb-3 mx-2  me-auto text-start">فيس بوك الجامعة</span>
              <i class="fa-brands fa-facebook fs-20 text-dark  me-auto text-start "></i>
            </div>

            <div class="fece mb-3 text-start ">
              <span class="fs-16  mb-3 mx-2  me-auto text-start">الموقع الالكتروني للجامعة</span>
              <i class="fa-brands fa-chrome fs-20 text-dark  me-auto text-start "></i>
            </div>
          </div>
        </div>

      </div> -->

      <div class="text-center">
        <!-- <p>سياسة الخصوصية || شروط الاستخدام || ميثاق المتعاملين || سياسة المحتوى</p>
        <hr> -->
        <p>تم التنفيذ من قبل المجموعه الخامسة طلاب كلية تكنولوجيا الادارة ونظم المعلومات</p>
        <!-- <hr> -->

        <!-- <span class="fs-20"> جميع الحقوق محفوظة <i class="fa-regular fa-copyright text-dark"></i></span> -->

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