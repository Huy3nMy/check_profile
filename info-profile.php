<?php
    $url = isset($_GET['url']) ? $_GET['url'] : '';
    if(strstr($url, "https://www.facebook.com/"))
        echo exec('whoami');
    else
        header('Location: ./index.php');
?>