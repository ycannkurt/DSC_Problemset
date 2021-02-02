<h1>Gününüz güzel olsun! :)</h1>
<?php

$afternoon = "İyi günler";
$evening = "İyi akşamlar";
$night = "İyi geceler";
$morning = "Günaydın";
$bestWishes = "Esenlikler dilerim";

$current_time = date('H:i');

if ($current_time >= 6 && $current_time < 10) {
        echo "<script>alert('$morning');</script>";
    }
    
    elseif ($current_time >= 10 && $current_time < 17) {
        echo "<script>alert('$afternoon');</script>";
    }
    
    elseif ($current_time >= 17 && $current_time < 20) {
        echo "<script>alert('$evening');</script>";
    }
    
    elseif ($current_time >= 20 && $current_time < 0) {
        echo "<script>alert('$night');</script>";
    }
    
    elseif ($current_time >= 0 && $current_time < 6) {
        echo "<script>alert('$bestWishes');</script>";
        }
?>