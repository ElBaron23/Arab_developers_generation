<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/css/home.css">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الجيل البرمجي</title>
</head>
<body dir="rtl">
<?php
    session_start();
    include 'inc/if_not_regi.php';
    include 'inc/navbar.php';
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    
?>
<!-- start hello section -->
   <section id="hello">
<div class="hello_text">

    <h1> مرحبا <?php echo $firstname." ".$lastname  ?> </h1>
    <p>نحن في فريق الجيل البرمجي العربي نرحب بك بشدة في مجتمعنا. نحن نقدر انضمامك إلينا ونتطلع إلى تجربتك معنا.

بمجرد تسجيلك، فقد فتحت بابًا للعديد من الفرص والمزايا التي يقدمها موقعنا. سواء كنت تبحث عن المعلومات، أو حتى توسيع دائرة معارفك، نحن هنا لنجعل تجربتك سهلة وممتعة.
لا تتردد في استكشاف ما يمكن أن تقدمه لك خدماتنا ومواردنا المتنوعة. كما يمكنك دائمًا التواصل مع فريق الدعم الفني لدينا إذا كانت لديك أي أسئلة أو استفسارات.

نأمل أن تجد الجيل البرمجي العربي مفيدًا وملهمًا بالنسبة لك كما هو الحال بالنسبة لنا. نحن نتطلع إلى مستقبل مشرق معكم ونأمل أن تكون تجربتك معنا ممتعة ومثمرة.

مرة أخرى، أهلاً ومرحبًا بك في الجيل البرمجي العربي</p>
</div>
<div class="hello_img">
    <img src="file/image/hellping.jpg" alt="helping">
</div>
   </section>
<!-- end hello section -->
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>