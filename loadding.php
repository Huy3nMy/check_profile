<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading..</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <script src="https://kit.fontawesome.com/81fb8b4ffd.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        $id = (explode('/', $url))[3];
    ?>
    <div class="container ">
        <div class="loading">
            <i class="icon_loading fas fa-spinner"></i>
            <p>Crawling ID <?php echo $id; ?>...</p>
        </div>
    </div>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        if(!strstr($url, "https://www.facebook.com/"))
            header('Location: ./index.php');
        else
        header("Location: ./info-profile.php?url={$url}");
    ?>
</body>
</html>