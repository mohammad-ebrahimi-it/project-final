<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/panelDir/css/teaher.css">

    <link rel="stylesheet" href="../../public/panelDir/css/pannel.css">
    <link rel="stylesheet" href="../../public/panelDir/css/fontawesome/css/all.css">

    <title> دبیر و برنامه غذایی </title>
    <style>
        .btn {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            color: white;
        }

    </style>
</head>
<body>
<input type="checkbox" id="chk">
<div class="top_menu">
    <div class="username">
        <label for="chk" class="btn"> <i class="fas fa-bars"></i> </label>
        <p>

            <?php
            session_start();

            if (isset($_SESSION['emailUser'])) {
                echo $_SESSION['emailUser'];
            } else {
                session_unset();
                session_destroy();
                $this->redirect('../login/index');
            }
            ?>
            / انتخاب دبیر و برنامه </p>
    </div>
</div>
<div class="right_menu">
    <ul>
        <li><a href="../panel/index">
                <i class="fas fa-home"></i>
                صفحه اصلی
            </a></li>
        <li><a href="#">
                <i class="fas fa-list"></i>
                لیست خرید ها
            </a></li>
        <li><a href="#">
                <i class="fas fa-cart-arrow-down"></i>
                محصولات برای خرید
            </a></li>
        <li><a href="../panel/logout">
                <i class="fas fa-times"></i>
                خروج
            </a></li>
    </ul>
</div>

<!--Select-->

<div class="select_title">
    <p> انتخاب مربی</p>
</div>
<br>
<br>


<div class="select_cards">
    <?php


    $results = $data['get'];

    foreach ($results as $item) {
        ?>

        <div class="select_card">
            <div class="card_img"><img src="<?= $item['img'] ?>" alt=""></div>
            <div class="card_heading">
                <h3>نام :
                    <?= $item['first_name'] ?>
                </h3>
                <H3> نام خانوادگی :
                    <?= $item['last_name'] ?>
                </h3>
                <p>وظعیت : <?= $item['standing'] ?></p>
                <p> سن: <?= $item['age'] ?> </p>

                <div class="card_btn">

                    <form action="set_trainer" method="post">
                        <input type="hidden"  value="<?= $item['id'] ?>" name="id">
                        <input type="hidden" value='<?=$_SESSION["useID"]?>' name="user_id">
<!--                        <input type="hidden" name="posting">-->
                        <input class="btn" type="submit" value="انتخاب دبیر">
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

</body>
</html>


