<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <script src="https://kit.fontawesome.com/81fb8b4ffd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container ">
        <div class="logo"></div>
        <form class="search-container" method="GET">
            <div class="wrapper">
                <input id="search-lable" type="text" autocomplete="off" placeholder="Enter URL.." name="url">
                <button class="search-button" type="submit" formaction="loadding.php">
                    <i class="search-icon fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</body>
</html>