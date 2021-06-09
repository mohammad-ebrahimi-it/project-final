<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/panelDir/css/pannel.css">
    <link rel="stylesheet" href="../../public/panelDir/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/panelDir/css/fontawesome/css/all.css">
    <script src="../../public/js/sweetalert.min.js"></script>

    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <script src="../../public/bootstrap/js/jquery.min.js"></script>
    <script src="../../public/bootstrap/js/bootstrap.min.js"></script>

    <title>پنل کاربری </title>
    <style>

    </style>
</head>
<body>

<input type="checkbox" id="chk">
<div class="top_menu">
    <div class="username">
        <label for="chk" class="btn"> <i class="fas fa-bars"></i> </label>
        <p>
            <?php


            if (isset($_SESSION['emailUser1'])) {
                echo $_SESSION['emailUser'];
            } else {
                session_unset();
                session_destroy();
                $this->redirect('../login/index');
            }
            //            $date = ['get' => $_SESSION['emailUser1']];
            ?>

        </p>
    </div>
</div>


<!--Alert-->
<div class="right_menu">
    <ul>
        <li><a href="#">
                <i class="fas fa-home"></i>
                صفحه اصلی
            </a></li>
        <li><a href="#">
                <i class="fas fa-list"></i>
                لیست خرید ها
            </a></li>
        <?php echo "<li><a  href='../order/index'>" ?>

        <i class="fas fa-cart-arrow-down"></i>
        محصولات برای خرید
        </a></li>
        <li><a href="logout">

                <i class="fas fa-times"></i>
                خروج از حساب کاربری
            </a></li>
    </ul>
</div>

<div class="alert">
    <p>
        به پنل کاربری خود خوش آمدید در پایین صفحه میتوانید معلم ورزشی خود را انتخاب کنید
    </p>
</div>

<!--buy-->
<div class="container">

<div class="buy_title">
    <p> خرید های اخیر</p>
</div>
<hr>


    <form action="delete_items" method="post">

    <table class="table table-striped " style="text-align: left">
        <thead dir="rtl">
        <tr>
            <th>انتخاب دست جمعی</th>
            <th>نام مربی</th>
            <th>شاگرد</th>
            <th>وضعیت</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data[] =[];
        $resultsPlan = $data['get_plan'];
        $resultsUser = $data['get_user'];
        $resultsTrainer = $data['get_trainer'];

        foreach ($resultsPlan as $result){
            foreach ($resultsUser as $item)
                foreach ($resultsTrainer as $value)

        if ($result['user_id'] === $_SESSION['useID'] ){
            if ( $result['trainer_id'] == $value['id']){
                if ($item['id'] === $result['user_id']) {
                    $id = 0;
        ?>
        <div id="<?=$result['id']?>">
        <tr data-id="<?= $result['id']?>">
            <td><input type="checkbox" class="buy_title" value="<?=$result['id']?>" name="delete[]" id=""></td>
            <td><?=$value['first_name'] ." ". $value['last_name'];?></td>
            <td><?=$item['first_name'] ." ". $item['last_name']?></td>
            <td><?= $result['posting']?></td>
            <td><a class="delete" href="#">حذف</a></td>
        </tr>
            <?php }}}}?>
            </div>
        </tbody>



    </table>
        <input type="submit" style="left: 25px" class="btn btn-danger " value="حذف دست جمعی">
        <div class="btn  btn-info">
            <a href="../order/index" style="color: white"> انتخاب دبیر و شروع تمرین</a>
        </div>

    </form>
    <script>
        <?php
        if (isset($_SESSION['check_select'])){?>
        swal("خطا !", "<?= $_SESSION['check_select']; unset($_SESSION['check_select']);} ?>", "warning");


    </script>
</div>
<script>


    $(function () {
        $("a.delete").on("click", function (e) {
            e.preventDefault();
            $.ajax({
                url: `/final/public/panel/api_delete/${$(this).parent().parent().attr("data-id")}`,
                method: "delete",
                success: function (response_id) {
                    $(`tr[data-id=${response_id}]`).remove();

                }
            })
        })
    })
</script>


</body>
</html>
