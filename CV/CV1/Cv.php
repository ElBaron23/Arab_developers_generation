<?php
session_start();
require_once('../../inc/if_not_regi.php');

$data = $_SESSION['data'];
$name = "{$data->firstname} {$data->lastname}";
$country = $data->country;
$birthDate = $data->datebirdth;
$desc = $data->description;
$linkedin = $data->linkedin;
$instagram = $data->instagram;
$email = $data->email;
$number = $data->phone;
$skills = $_SESSION['skills'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="CV/cv1/CvStyle.css">
</head>
<body>
    <header>
        <h1><?=$name?></h1>
        <p>Front-End Developer</p>
    </header>

    <div class="container">
        <section class="section">
            <h2>Profile</h2>
            <ul class="profile">
                <li>Passionate about web development and data analysis.</li>
                <li>Experience in HTML, CSS, JavaScript, and Python.</li>
                <li>Member of the EMJE club at ENSA Marrakech.</li>
            </ul>
        </section>

        <section class="section">
            <h2>Education</h2>
            <ul class="education">
                <li><strong><?=$country?></strong> - <?=$desc?></li>
            </ul>
        </section>

        <section class="section">
            <h2>Skills</h2>
            <ul class="skills">
                <?php  foreach ($skills as $skill): ?>
                    <li><?=$skill?></li>
                <?php endforeach?>
            </ul>
        </section>

        <section class="section">
            <h2>Experience</h2>
            <ul class="experience">
                <li>Intern at Codesoft - Worked on landing page projects using HTML and CSS.</li>
                <li>Hackathon Participant - Built creative solutions in coding competitions.</li>
                <li>Developed a cybersecurity quiz for beginners during a competition.</li>
            </ul>
        </section>

        <section class="section">   <?php


?>
y
            <h2>Contact</h2>
            <ul class="profile">
                <li>Email: <?=$email?></li>
                <li>Phone: <?=$number?></li>
                <li>LinkedIn: <a href="<?=$linkedin?>" target="_blank"><?=$name?></a></li>
                <li>Instagram: <a href="<?=$instagram?>" target="_blank"><?=$name?></a></li>
            </ul>
        </section>
    </div>
</body>
</html>
