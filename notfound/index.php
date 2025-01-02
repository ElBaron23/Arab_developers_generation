<?php
include '../inc/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$register?>">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <title>صفحة غير موجودة حاليا</title>
</head>
<body dir="rtl">
      <style>
      body { 
        background-color: #191919; 
        text-align: center; 
        padding: 150px; }
      h1 { 
        font-size: 50px; }
      body { 
        font: 20px Helvetica, sans-serif; color: #fff; 
      }
      .links{
text-decoration: none;
        
      }
      #img360 {
        border-radius: 100px;
        margin-left: 0px;
        -webkit-animation:spin 4s linear infinite;
        -moz-animation:spin 4s linear infinite;
        animation:spin 4s linear infinite;
      }
      @-moz-keyframes spin {
         100% { 
            -moz-transform: rotate(360deg);
         }
         }
      @-webkit-keyframes spin { 
        100% {
            -webkit-transform: rotate(360deg); 
        } 
    }
      @keyframes spin { 
        
        100% { 
            -webkit-transform: rotate(360deg);
             transform:rotate(360deg); 
            } 
        }
    </style>
    <img id="img360" src="../file/icons/icon-white.png">
    <h1>نعتذر يتم تجهيز هذه الصفحة الان</h1>
    <h2>يمكنك الرجوع فيما بعد او العودة للصفحة الرئيسية
        <a href="<?=$indexP?>" class="link1">الصفحة الرئيسية</a>
    </h2>
</body>
</html>