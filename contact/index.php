<?php
        include '../inc/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$contact_s?>">
    <link rel="stylesheet" href="<?=$scrollbar?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا</title>
</head>
<body dir="rtl">
    <header>
        <?php
include $navIndex;
        ?>
</section>
    </header>


          <form action="" class="contact-form">
<div class="pranet">
            <div class="input-wrapper">
              <input type="number" name="name   " placeholder="الاسم" class="input-field">
              <input type="text" name="email"  placeholder="البريد  الالكتروني " class="input-field">
            </div>

</div>
<div class="pranet">
            <div class="input-wrapper">
              <input type="text" name="subject" aria-label="subject" placeholder="الموضوع" class="input-field">

              <input type="number" name="phone" aria-label="phone" placeholder="رقم الهاتف" class="input-field">
            </div>

</div>

<div class="parent">
            
<div class="input-wrapper">
<textarea name="message" aria-label="message" placeholder="الرساله" required
              class="input-field"></textarea>
</div>
</div>
            <div class="checkbox-wrapper">
              <input type="checkbox" name="terms_and_policy" id="terms" required class="checkbox">

              <label for="terms" class="label">
                Accept <a href="#" class="label-link">Terms of Services</a> and <a href="#" class="label-link">Privacy
                  Policy</a>
              </label>
            </div>

            <button type="submit" class="btn send">ارسال الرساله </button>

          </form>
<div class="list">

          <ul class="contact-list">

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
<img src="../file/icons/mail.png" alt="">
                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Mail Here</h3>

                  <a href="mailto:hello@luaz.com" class="card-link">hello@luaz.com</a>
                  <a href="mailto:info@luaz.com" class="card-link">info@luaz.com</a>

                </div>

              </div>
            </li>

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">

<img src="../file/icons/map.png" alt="">

                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Visit Here</h3>

                  <address class="card-address">
                    27 Division St, New York,<br>
                    NY 10002, USA
                  </address>

                </div>

              </div>
            </li>

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
<img src="../file/icons/call.png" alt="">

                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Call Here</h3>

                  <a href="tel:+1234567890" class="card-link">+123 456 7890</a>
                  <a href="tel:+2414524526" class="card-link">+241 452 4526</a>

                </div>

              </div>
            </li>

          </ul>


</div>


    <?php
    include $footer;
    ?>
</body>
</html>