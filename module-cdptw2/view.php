<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./1/css/1.css">
    <link rel="stylesheet" href="./2/css/2.css">
    <link rel="stylesheet" href="./3/css/3.css">
    <link rel="stylesheet" href="./4/css/4.css">
    <link rel="stylesheet" href="./26/css/26.css">
    <link rel="stylesheet" href="./27/css/27.css">
    <link rel="stylesheet" href="./28/css/28.css">
    <link rel="stylesheet" href="./29/css/29.css">
    <link rel="stylesheet" href="./30/css/30.css">
    <link rel="stylesheet" href="./31/css/31.css">
    <link rel="stylesheet" href="./32/css/32.css">
    <link rel="stylesheet" href="./css/view.css">

    <link rel="stylesheet" href="./27/css/jquery-ui.css">
    <link rel="stylesheet" href="./2/css/animate.css">
    <link rel="stylesheet" href="./3/css/swiper.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro</title>
</head>

<body>
    <?php include "./1/1.php" ?>
    <?php include "./2/2.php" ?>
    <?php include "./3/3.php" ?>
    <?php include "./4/4.php" ?>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php include "./26/26.php" ?>
                <?php include "./27/27.php" ?>
            </div>
            <div class="col-md-8">
                <?php include "./28/28.php" ?>
            </div>
        </div>
    </div>

    <?php include "./30/30.php" ?>

    <div class="module_31-32__container container">
        <ul class="nav nav-tabs wc-tabs" id="myTab" role="tablist">
            <li class="nav-item description_tabs">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item description_tabs">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Review(0)</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php include "./31/31.php" ?></div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php include "./32/32.php" ?></div>
        </div>
    </div>


    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./3/js/swiper.min.js"></script>
    <script src="./27/js/jquery-ui.min"></script>


    <script src="./2/js/2.js"></script>
    <script src="./3/js/3.js"></script>
    <script src="./27/js/27.js"></script>
    <script src="./30/js/30.js"></script>
    <script src="./31/js/31.js"></script>

</body>

</html>