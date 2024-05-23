<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con); // Corrected function call
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="come.css">
</head>
<body>
    <div class="menu-bar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">undergraduate</a></li>
            <li><a href="services.html">graduate</a></li>
            <li><a href="contact.html">course</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="text_container">
            <h>DUKE</h>
            <p>trinity college of <br>art and siences</p>
        </div>
        <div class="text_container">
            <h>PROGRAM IN <BR> LITERATURE</h>
                <p>welcome</p>
        </div>
    </div>
    <div class="container_2">
        <div class="image_container_2">
            <img src="lit.jpeg" alt="image" class="resized_image_2">
        </div>
    </div>
    <div class="container_3">
        <div class="text_container_3">
            <h>major<br>requirement</h>
        </div>
        <div class="text_container_3">
            <h>film&media<br>concentration</h>
        </div>
        <div class="text_container_3">
            <h>ph.d<br>requirement</h>
        </div>
        <div class="text_container_3">
            <h>our faculty</h>
        </div>
    </div>
    <div class="container_4">
        <div class="text_container_4">
            <p>Duke's Literature Program seeks to rethink what comparison might mean in a world rapidly being altered by complex forces of economic<br> and technological integration. Although a focus on language, literature, and aesthetics continues to ground our work, we have pioneered<br> by drawing together philosophical and theoretical reflections on the status of “literature” and “culture” with work in history,<br> political economy, the sociology of culture, anthropology, visual culture, and cinema studies, all of which seeks to make sense of the complex <br>factors affecting the historically changing nature of the relationship between society and culture.</p>
            <p>Literature has, in short, employed philosophical critique to interrogate and mediate our relationship to the social sciences thereby<br> modeling a new kind of program in global studies from the perspective of the humanities, a program that recognizes that literature and <br>culture are always crucially important agents in the understanding, definition and alteration of social formations.
                Explore Program</p>
        </div>
    </div>

<div class="container_5">
    <div class="text_container_5">
        <h>Global Cultural Studies <br>Undergraduate Program</h>
        <p>Our major and minor in Global Cultural Studies will engage you in investigating the life and culture of today's interconnected, globalized world. Our curriculum explores the humanities as the source of a distinct kind of knowledge that is essential for understanding and engaging the complexities of the contemporary social environment. Courses in literary studies, critical theory, gender studies and queer theory, philosophy, political theory, film, visual culture, and new media form the foundation for such inquiry. Our Global Cultural Studies programs aim to provide you with the broad knowledge base and analytical skills that will prepare you for leadership roles in the 21st century.</p>
    </div>
    <div class="image_container_5">
        <img src="gt.jpeg" alt="image" class="resized_image_5">
    </div>
</div>

    <div class="container_1">
        <ul>
            <h>about us</h>
            <ul><a href="program.html">about PROGRAM</a></ul>
            <ul><a href="statement of harassment and displine.html">statement on harassment and displine</a></ul>
        </ul>
        <ul>
            <h>undergraduate</h>
            <ul><a href="major.html">major</a></ul>
            <ul><a href="minor.html">minor</a></ul>
            <ul><a href="concetration.html">concentration</a></ul>
        </ul>
        <ul>
            <h>graduate</h>
            <ul><a href="ph.D.degree.html">ph.D.degree</a></ul>
            <ul><a href="for prospective.html">for prospective</a></ul>
            <ul><a href="for current student.html">for current students</a></ul>
        </ul>
    </div>
</body>
</html>
