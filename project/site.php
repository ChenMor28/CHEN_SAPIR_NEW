<?php

if(isset($_GET['submit'])) {
    $name = $_GET['name1'];
    $email = $_GET['email'];
    $prePhoneNumber = $_GET['prePhoneNumber'];
    $phoneNumber = $_GET['phoneNumber'];
    $arrival = $_GET['arrival'];
    $numOfGuests = $_GET['numOfGuests'];
    $comment = $_GET['comment'];

    $good = true;
    if (!(preg_match('/^[A-Za-z]+$/', $name)) || $name = "") {
        $msg = "Name-only letters.";
        $good = false;
    }

    if (!(preg_match('/^[0-9]*$/', $phoneNumber) )|| $phoneNumber = "") {
        $msg = "phoneNumber-only numbers, min 9 max 10";
        $good = false;
    }


    if (!(filter_var($email, FILTER_VALIDATE_EMAIL) )|| $email = "") {
        $msg = "Invalid email format";
        $good = false;
    }
    if (!($numOfGuests > 0)) {
        $msg = "○	Number of guests > 0 ";
        $good = false;
    }

    if($good){
        echo "Thanks ".$name." for ur form you guys $numOfGuests pepoles";
        echo $name;
    }
}



?>





<?php
include('header.php');
?>
    <p class="content">   משפחה וחברים יקרים ,
        <br>
        אנו שמחים ומתרגשים להזמינכם לחגוג איתנו את ברית נישאנו♥
        <br>
        החתונה תארך ב-26.9.19 באולם בבת ים.
        <br>
        הולכת להיות חתונה שלא תישכח !!! תכינו את עצמכם
        <br>
        יהיה dj מטורף ועוד המון הפתעות!
        <br>
        תהיינה 2 הסעות, אחת מאיזור הדרום והשנייה מהמרכז.
        <br>
        נשמח מאד לראותכם ,
        <br>
        ליאן ♥ מאור</p>
<?php
include('footer.php');
?>




