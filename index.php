<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://kit.fontawesome.com/81fb8b4ffd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container ">
        <div class="logo"></div>
        <form class="search-container" method="GET">
            <div class="wrapper">
                <input id="search-lable" type="text" autocomplete="off" placeholder="Enter URL.." name="url">
                <button class="search-button" type="submit" formaction="index.php">
                    <i class="search-icon fa fa-search"></i>
                </button>
            </div>
        </form>
        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : '';
            if(strstr($url, "https://www.facebook.com/")){
                $id = (explode('/', $url))[3];
                if (!file_exists("./TMHDetector-master/data/{$id}/Avatar.txt"))
                    exec("cd TMHDetector-master && py Client.py {$id} --output outfile.txt");
                else{
                    $info = "./TMHDetector-master/data/{$id}/Avatar.txt";
                    $lines = file($info);
                    $name = $lines[2];
                    $ava = $lines[6];
                    if (file_exists("./TMHDetector-master/outfile.txt")) {
                        $f = file('./TMHDetector-master/outfile.txt');
                        $status = strtoupper($f[0]);
                    }
                }
                echo '<div class="info">';
                echo '<div class="avatar"><img src="'.$ava.'" alt="avatar"></div>';
                echo '<div class="name"><div>'.$name.'</div><div class="status"> This is '.$status.' account</div></div>';
                echo '</div>';    
            }
        ?>
    </div>
</body>
</html>