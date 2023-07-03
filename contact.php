<?php
require_once "./con_db.php";
if (isset($_POST['submit'])){
  echo" <h1 >  تم الارسال بنجاح </h1>"; 
  $pname= $_POST['name'];
  $preport= $_POST['report'];
  $pemail= $_POST['email']; 
  $stm = "INSERT INTO reports(name, email,report) 
  VALUE ('$pname','$pemail','$preport')";
  $GLOBALS['con']->prepare($stm)->execute();
}


  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تقديم شكاوي </title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />


  <!-- Bootstrap Style -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <!-- CSS Style -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  
 
</head>
<style scoped="" type="text/css">
#comments,.post_meta,#blog-pager {display:none;}
#ContactForm1_contact-form-name, #ContactForm1_contact-form-email{
width:100%;height:auto;margin:5px auto;padding:10px;background:#dee2e6;color:#444;border:2px solid #079baa;border-radius:3px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;transition:all 0.5s ease-out;}
#ContactForm1_contact-form-email-message{width:100%;height:175px;margin:5px 0;padding:10px;background:#dee2e6;color:#444;font-family:'Open Sans',sans-serif;border:2px solid #079baa;border-radius:3px;transition:all 0.5s ease-out;direction: rtl;text-align: justify;}
#ContactForm1_contact-form-name:focus, #ContactForm1_contact-form-email:focus, #ContactForm1_contact-form-email-message:focus{outline:none;background:#fff;color:#444;border-color:rgba(81,203,238,1);box-shadow:0 0 5px rgba(81,203,238,0.7);}
#ContactForm1_contact-form-submit {width:100%;font-family:'Open Sans';float:left;background:#079baa;color:#aaa;margin:10px auto;vertical-align:middle;cursor:pointer;padding:10px 18px!important;font-weight:700;font-size:14px;text-align:center;text-transform:uppercase;letter-spacing:0.5px;border-radius:3px;background-image: linear-gradient(110deg, #7986cb 0%, #7986cb 50%, transparent 50%, transparent 100%);background-size:200%;background-position:120% 0;background-repeat:no-repeat;border:1px solid #ddd;transition:all .8s ease, background-position .8s ease, color .8s ease;}
#ContactForm1_contact-form-submit:hover {color:#fff;background-position:0 0;border-color:#079baa;}
#ContactForm1_contact-form-error-message, #ContactForm1_contact-form-success-message{
width:100%;margin-top:35px;}
.contact-form-error-message-with-border {background:#f36c60;border:none;box-shadow:none;color:#fff;padding:5px 0;}
.contact-form-success-message {background:#4fc3f7;border:none;box-shadow:none;color:#fff;}
img.contact-form-cross {line-height:40px;margin-left:5px;}
.spetial-heading{
    color: #079baa;
    font-size: 80px;
    letter-spacing: -3px;
    text-align: center;
    font-weight: 800;
    margin: 10px auto 0;
    position: relative;
    border-right: 2px solid #079baa;
    padding-right: 20px;
    border-left: 2px solid #079baa;
    padding-left: 20px;
    border-top: 2px solid #079baa;
}
@media (max-width: 500px) {
  .spetial-heading {
    font-size: 40px;
  }
}
.spetial-heading::before {
  content: "";
  position: absolute;
  bottom: -5px;
  width: 100%;
  height: 2px;
  left: 0;
  background-color: #079baa;
}
.spetial-heading::after {
  content: "";
  position: absolute;
  bottom: -15px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 2px solid #079baa;
  left: 50%;
  transform: translateX(-5px);
  background-color: #079baa;
  background-color: #eeeae9;
}
.header {
  margin: 10px 0 100px;
}
.container {
  display: flex;
  justify-content: center;
}
form > span {
  font-size: 30px;
  font-weight: bold;
  color: #079baa;
}
form {
  margin: 10PX auto 50PX;
}

</style>


<body>
  <!--start header-->
  <div class="header  d-flex align-items-center justify-content-end">
    <h1 class=" spetial-heading"> الشكاوي و البلاغات  </h1>
    <a class="navbar-brand me-0 ms-3" href="#">
      <img class="mt-2" src="./assets/images/logo.png" alt="logo" width="100" height="100" />
    </a>
  </div>
  <!--end header-->

  <!--start leanding-->
<div dir="rtl"  trbidi="on" class="container">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<span ><i class="fa fa-user"></i>الاسم :</span>
<input id="ContactForm1_contact-form-name" name="name" size="15" type="text" value="" />  

<span ><i class="fa fa-envelope"></i> البريد الإلكترونى: </span> 
<input id="ContactForm1_contact-form-email" name="email" size="30" type="text" value="" />  

<span ><i class="fa fa-pencil-square-o"></i> محتوى الرساله:</span>
<textarea cols="25" id="ContactForm1_contact-form-email-message" name="report" rows="5"></textarea> 
<input id="ContactForm1_contact-form-submit" type="submit" name="submit" value="إرسال" style="width: 200px; color: white; font-size: 25px; margin-left: calc(100% - 200px); font-weight: bold;background-color: #079baa;"/>  
<br />
<div >
<div id="ContactForm1_contact-form-error-message">
</div>
<div id="ContactForm1_contact-form-success-message">
</div>
</div>
</form>
</div>





</body>

</html>