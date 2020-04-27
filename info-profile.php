<html>
<head>
    <title>Info</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        $id = (explode('/', $url))[3];
        //echo $id;
        //exec("cd TMHDetector-master && py Client.py {$id} --output outfile.txt");
        if (file_exists("./TMHDetector-master/data/{$id}/Avatar.txt"))
        {
            $info = "./TMHDetector-master/data/{$id}/Avatar.txt";
            $lines = file($info);
            $name = $lines[2];
            $ava = $lines[6];
        }

        if (file_exists("./TMHDetector-master/outfile.txt")) {
            $f = file('./TMHDetector-master/outfile.txt');
            $status = strtoupper($f[0]);
        }
    ?> 
    <div class="container">
        <div class="info">
            <div class="avatar">
                <img src="<?php echo $ava;?>" alt="avatar">
            </div>
            <div class="name">
            <div><?php echo $name?></div>
            <div class="status"> <?php echo "This is {$status} account";?></div>
            </div>

        </div>
    </div>
</body>
</html>
