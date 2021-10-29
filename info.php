<?php

    $danishInfo = json_decode(file_get_contents("data/kea_da.json"));
    $englishInfo = json_decode(file_get_contents("data/kea_en.json"));

    ob_start();
    setcookie("language", "english");
    ob_end_flush();

    if (isset($_POST["language"])) {
        ob_start();
        setcookie("language", $_POST["language"], 0);
        ob_end_flush();
    }   
?>