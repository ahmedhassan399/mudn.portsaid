<!-- <?php
// $a="احم ني";
// if (strlen($a) <= 15 && preg_match( '/^[\p{Arabic}\s\']+$/u' , $a)) {
//     echo"aa";
// }
// else{
//     echo"ss";
// }
?> -->
<?php
require_once "./con_db.php";
if(isset($_POST['back']))
  {
  
    header('location:index.php');
  }
$vb="";
$error_msgn="";
$succ="";
  //==========================================================
  //=============== function check_pid_n  ====================
  //==========================================================
function select_pid_n($pid_n,$from)
  {
      $stm = "SELECT id_n FROM $from WHERE id_n = '$pid_n'";
      $q = $GLOBALS['con']->prepare($stm);   
      $q ->execute();
      $data = $q->fetch();
      return $data;
  }

  function check_pid_n($pid_n,$from){
      if(empty($pid_n)){
          return  "من فضلك ادخل رقم البطاقة";
      }else{
          $data = select_pid_n($pid_n,$from);
          if(!empty($data)){
              return  "رقم البطاقة هذا موجود بالفعل";
          }
      }
  }
    
//==========================================================
//=============== send to database ================================
//==========================================================
if (isset($_POST['submit'])){
  $pname= $_POST['name'];
  $pdate_age= $_POST['date_age'];
  $pgender= $_POST['gender'];
  $preligion= $_POST['religion'];
  $pnationality= $_POST['nationality'];
  $pgovernorate= $_POST['governorate']; 
  $pcollege= $_POST['college']; 
  $plevel= $_POST['level']; 
  $pgrate= $_POST['grate']; 
  $pstatus= $_POST['status']; 
  $pid_n= $_POST['id_n']; 
  $pphone= $_POST['phone']; 
  $pphone_f= $_POST['phone_f']; 
  $paddress= $_POST['address']; 
  $pemail= $_POST['email']; 
  $ppassword= $_POST['password']; 
  $pimg_id= $_POST['img_id']; 
  $sizes=$_FILES['img_p']['size']; 
  if($sizes < 10000000)
  {
      $ims=$_FILES['img_p']['name']; 
      move_uploaded_file($_FILES['img_p']['tmp_name'],'a/img_p/' .$_FILES['img_p']['name']);
      $data_pid_n = check_pid_n($pid_n ,'waiting'); 
      if($data_pid_n)
      {
          $error_pid_n= $data_pid_n;
      }
      else
      {
            //==========================================================
            //=============== check_name ================================
          //==========================================================
        if(isset($_POST['name']) && !empty($_POST['name'])) 
         {
            if (strlen($pname) <= 20 && !preg_match( '/^[\p{Arabic}\s\']+$/u' , $pname)) 
              {
                $succ="تم الارسال بنجاح , برجاء انتظار رسالة القبول *";
                $stm = "INSERT INTO waiting(name,date_age,gender,religion,nationality,governorate,college,level,grate,status,id_n,phone,phone_f,address, email,password,id_f,img_p) 
                VALUE ('$pname','$pdate_age','$pgender','$preligion','$pnationality','$pgovernorate','$pcollege','$plevel','$pgrate','$pstatus','$pid_n','$pphone','$pphone_f','$paddress','$pemail','$ppassword','$pimg_id','$ims')";
                $con->prepare($stm)->execute();
              } 
            else 
                {  
                        $error_msgn = "اسم المستخدم غير صالح , الرجاء استخدام اللغة العربية دون رموز او ارقام ";
                }
          }
       }
  }
  else
  {
    $vb="try to upload a small photo";
  }
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>التسجيل</title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />

  <!-- Bootstrap Style -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />

  <!-- CSS Style -->
  <link rel="stylesheet" href="assets/css/style.css" />

     <style>

          @media(max-width:767px){
            .title h1{
              /* width: 66px;
              height: 42px;
              margin-right: -100px;
              margin-bottom: 20px;
              border-radius: 15px;
              font-size: 12px; */
              font-size: 20px !important;
              margin-top: 40px !important;
              margin-bottom: 20px !important;
            }
            .form-group{
              margin-bottom: 50px !important;
            }
            .form-group .form-label{
              width: auto !important;
            }
            .form-group input{
              width: auto !important;
            }
          }
          

     </style>
</head>
<body>
  <!--start landeing-->
  <div class="landeing pb-5">
    <div class="container">
          <form method="POST" >
            <input type="submit" class=" btn main_color_bg text-white fs-18 " style= " position: absolute; top:30px; left:10px; width:max-content; z-index:100; font-size: 25px; font-weight: bold; " name="back" value="الرجوع للرئيسية">
          </form>
      <div class="d-flex align-items-center header my-4">
        <div class="logo ">
          <img src="assets/images/logo.png" alt="Logo" class="" width="100" height="100">
        </div>
        
      </div>
      <div class="title">
          
          <h1 class="fs-32 fw-bold text-center py-2 px-4  main_color_bg text-white ">تسجيل الطلاب</h1>
        </div>
        <br>
      <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="d-flex align-items-center justify-content-between" enctype="multipart/form-data">
        <div class="form-inputs w-50 mx-auto">
          <div class="form-group mb-3 ">
            <label for="username" class="form-label fw-bold fs-12  p-2 main_color_bg text-white">الاسم</label>
            <input type="text" class="form-control" placeholder="الاسم كامل بدون ارقام او رموز" name="name" >
            <span style="color: red;" ><?php echo $error_msgn ; ?> </span>  
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="date" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">تاريخ الميلاد</label>
            <input type="date" class="form-control" placeholder="date-b" name="date_age"required>
          </div>

          <div class="form-group mb-3">
            <label for="gender" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">النوع</label>
            <select class="form-select" id="gender" name="gender">
              <option value="ذكر">ذكر</option>
              <option value="انثى">أنثي</option>
            </select>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="religion" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">الديانة</label>
            <input type="text" class="form-control" placeholder="استخدم اللغة العربية" id="religion" name="religion"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="nationality" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">الجنسية</label>
            <input type="text" class="form-control"placeholder="استخدم اللغة العربية" id="nationality" name="nationality"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="governorate" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">المحافظة</label>
            <input type="text" class="form-control" placeholder="استخدم اللغة العربية"id="governorate" name="governorate"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="college" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">الكلية</label>
            <input type="text" class="form-control"placeholder="استخدم اللغة العربية"id="college" name="college"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="level" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">الفرقة / المستوى</label>
            <input type="text" class="form-control" placeholder="استخدم اللغة العربية" id="level" name="level"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="grate" class="form-label fw-bold fs-12 p-2 main_color_bg text-white"> التقدير العام</label>
            <input type="text" class="form-control" placeholder=" اذا كانت اول سنة اكتب جديد" id="grate" name="grate".>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="status" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">الحالة</label>
            <select class="form-select" id="status" name="status">
              <option value="newcomer">مستجد</option>
              <option value="resident">مقيم</option>
              <option value="non-resident">غير مقيم</option>
            </select>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="id_n" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">رقم البطاقة</label>
            <input type="text" class="form-control" placeholder="رقم البطاقة الشخصية" id="id_n" name="id_n".>
            <span>
              <?php
                  if(!empty($error_pid_n))
                  {
                    echo $error_pid_n;
                  }
                ?>
            </span>

          </div>
          <div class="form-group mb-3 mt-2">
            <label for="img_id" class="form-label fw-bold fs-12 p-2 main_color_bg text-white"> رقم بطاقة الوالد </label>
            <input type="text" class="form-control" style="direction: ltr;" placeholder="رقم البطاقة الخاص بلوالد" id="img_id" name="img_id"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="phone" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">الهاتف</label>
            <input type="text" class="form-control" placeholder="رقم الهاتف " id="phone" name="phone"required>
            <?php 
              //write code do vaild for phone number php 
              
            ?>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="phone_f" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">هاتف ولي الامر</label>
            <input type="text" class="form-control" placeholder="رقم الهاتف الخاص بلوالد " id="phone_f" name="phone_f"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="address" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">العنوان</label>
            <input type="text" class="form-control" placeholder="العنوان بداية من المحافظة" id="address" name="address"required>
          </div>

          <div class="form-group mb-3 mt-2">
            <label for="address" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">البريد الالكتروني</label>
            <input type="email" class="form-control" placeholder="البريد الالكتروني" id="address" name="email"required>
          </div>

          <div class="form-group mb-3 mt-2 mp-2">
            <label for="password" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">كلمة السر</label>
            <input type="password" class="form-control" placeholder="كلمة السر " id="password" name="password"required>
          </div>
          <div class="form-group mb-3 mt-2">
            <label for="img_p" class="form-label fw-bold fs-12 p-2 main_color_bg text-white">صورة شخصية</label>
            <input type="file" class="form-control" style="direction: ltr;" placeholder="personal_p" id="img_p" name="img_p"required>
            <span> <?php echo $GLOBALS['vb']?> </span>
          </div>
          <input type="submit" value="أرسال" class="form-control main_color_bg text-white button_hover" name="submit"> 
          <span style="color: red;"><?php echo $succ; ?> </span>  
        </div> 
      </form>

</body>

</html>