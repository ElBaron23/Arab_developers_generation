<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    include '../inc/init.php';
    include $if_not_reg;
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    $email = $_SESSION['data']->email;
    
    $photo = $_SESSION['data']->photo_profile ;
    $country = $_SESSION['data']->country;
    $desc = $_SESSION['data']->description;
    
    $cvFileName = "../upload/cvs/" .$_SESSION['data']->user_id . "_cv.pdf";
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../file/icon/logo.jpg>" type="image/x-icon">
    <title><?php echo  $firstname ." ". $lastname ?></title>
    
    
</head>
<body dir="rtl">
    <?php
    include $_nav;
?>
<div class="container">
 <div id="profile">
   <div class="user_profile">
       <div class="name">
           <h1><?php echo  $firstname ." ". $lastname ?></h1>
           <h4><?php  echo $email ?></h4>

             <div class="btn">
              <button onclick="downloadCv()" type="submit" id="downloaadcv">تحميل السيره الذاتيه</button>              
              <div class="follow">
                  <img src="../file/icons/star.png" alt="">
                  <span>00</span>
                </div>

             </div>
       </div>

    <div id="photo_profile">
      <img src="../upload/avatar/<?=$photo?>">
  </div>
</div>
</div>
<div class="about">
<div class="title">
    <h4>معلومات اكثر:</h4>
</div>
<div class="data">

<div class="desc">
<h4>الوصف</h4>
<p>
<?=$_SESSION['data']->description?>
</p>
</div>

<div class="country">
<h4>البلد</h4>
<span><?=$_SESSION['data']->country?></span>
</div>


<div class="birthDate">
<h4>تاريخ الميلاد</h4>
<p><?=$_SESSION['data']->datebirdth?></p>
</div>

<div class="gender">
<h4>الجنس</h4>
<span> 
<?= $_SESSION['data']->gender?>
</span>
</div>
</div>
<div class="title">
  <h4>الروابط</h4>
</div>
<div class="links">
<div class="instagram">
<div class="image"><img src="../file/icons/instagram.png" alt=""></div>
<div class="text">
<h4>رابط الانستجرام</h4>
<span><?=$_SESSION['data']->instagram ? $_SESSION['data']->instagram  : 'غير محدد' ?></span>
</div>
</div>

<div class="facebook">
<div class="image"><img src="../file/icons/facebook.png" alt=""></div>
<div class="text">
<h4>رابط الفيسبوك</h4>
<span><?=$_SESSION['data']->facebook ? $_SESSION['data']->facebook  : 'غير محدد' ?></span>
</div>
</div>

<div class="linkedin">
<div class="image"><img src="../file/icons/linkedin.png" alt=""></div>
<div class="text">
<h4>رابط لينكدان</h4>
<span><?=$_SESSION['data']->linkedin ? $_SESSION['data']->linkedin  : 'غير محدد' ?></span>
</div>
</div>


<div class="twitter">
<div class="image"><img src="../file/icons/twitter.png" alt=""></div>
<div class="text">
<h4>رابط اكس</h4>
<span><?=$_SESSION['data']->twitter ? $_SESSION['data']->twitter  : 'غير محدد' ?></span>
</div>
</div>



</div>
</div>
<div class="skills">
    <h4>المصارات التي تتابعها:</h4>
<div class="skill">
   لايوجد مسارات الان
</div>
<div class="skills">
    <h4>اللغات البرمجية التي تتابعها:</h4>
<div class="skill">
   لايوجد لغات الان
</div>
</div>
</div> 

    <script>
    function downloadCv(){
        const link = document.createElement('a');
        link.href = "<?=$cvFileName?>";
        link.innerHTML = "Cv";
        link.download = "<?=$firstname?>_cv";
        link.style.display="none";
        document.body.append(link);
        link.click();
        link.remove()
    }
    </script>

</body>
</html>
<?php
require(__DIR__ . '/../vendor/autoload.php');

$firstname = $_SESSION['data']->firstname ?? 'First Name';
$lastname = $_SESSION['data']->lastname ?? 'Last Name';
$email = $_SESSION['data']->email ?? 'example@example.com';
$phone = $_SESSION['data']->phone ?? '000-000-0000';
$linkedin = $_SESSION['data']->linkedin ?? '#';
$instagram = $_SESSION['data']->instagram ?? '#';
$country = $_SESSION['data']->country ?? 'Country';
$desc = $_SESSION['data']->descreption ?? 'Description';
$skills = ['html' , 'css' ,'js'];
$skillsStr = "<li>";
function displaySkills($skills){
    global $skillsStr;
       foreach ($skills as $skill) {
        $skillsStr .= " $skill -";
       }

       $skillsStr .= "</li>";
       
    }

displaySkills($skills);


$template = file_get_contents(__DIR__. "/../CV/Cv1/cv.php");


$data = [
    'name' => $firstname . " " . $lastname,
    'country' => $country,
    'desc' => $desc,
    'skills' => $skillsStr,
    'email' => $email,
    'number' => $phone
];

foreach ($data as $key => $value) {
    $template = str_replace('{{'  . $key . '}}' , $value, $template);
}
$cv = new \Mpdf\Mpdf(['mode' => 'utf-8' , 'format' => 'A3']);
$cv->WriteHTML($template);
$cv->SetHeader($firstname);
$cv->SetFooter('Arabic Programming Generation');
$cv->Output($cvFileName);

?>
