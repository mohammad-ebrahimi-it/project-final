
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/homeDir/css/style.css">
    <link rel="stylesheet" href="../../public/homeDir/css/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>صفحه اصلی </title>
</head>
<body>
<!--Menu-->
<div class="menu">
    <div class="logo">
        <p>
            <span>روز</span>
            <span>اسپرت</span>

        </p>
    </div>
    <input type="checkbox" id="chk">
    <label for="chk" class="btn"> <i class="fas fa-bars"></i> </label>
    <ul>
        <li><a href="#">صفحه اصلی</a></li>
        <hr>
        <li><a href="#time-work"> ساعات کاری </a></li>
        <hr>
        <li><a href="#contact"> تماس با ما </a></li>
            <hr>
            <li><a href="../login/index">ورود</a> <a href="../register/index">ثبت نام</a></li>
    </ul>
</div>

<!--Slider-->
<div class="slider">

    <div class="mySlider fade" style="display: block;">
            <img src="../../public/homeDir/img/slider1.jpg" style="width: 100%;height: 100%;">
    </div>

    <div class="mySlider fade">
        <img src="../../public/homeDir/img/slider2.jpg" style="width: 100%;height: 100%;">
    </div>

    <div class="mySlider fade">
        <img src="../../public/homeDir/img/slider3.jpg" style="width: 100%;height: 100%;">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align: center;">
        <span class="dot" onclick="currentSlider(1)"></span>
        <span class="dot" onclick="currentSlider(2)"></span>
        <span class="dot" onclick="currentSlider(3)"></span>
    </div>

</div>
<div class="container">
<!--Cards-->
<div class="card-title">
    <p> تازه ها </p>
    <p> آخرین باشگاه‌های بدنسازی ثبت شده</p>
</div>
<div class="line"></div>


<div class="cards">
    <a href="#card1">
        <div class="card">
        <div class="card-header"><img src="../../public/homeDir/img/card1.jpg" alt=""> </div>
        <div class="card-desc">
            <p>باشگاه ورزشی اکسین </p>
            <p>
                <span>اصفهان</span>
                <span> تخفیف %90</span>
            </p>

        </div>
    </div>
    </a>

    <a href="#card2">
        <div class="card">
        <div class="card-header"><img src="../../public/homeDir/img/card2.jpg" alt=""> </div>
        <div class="card-desc">
            <p>باشگاه بدنسازی اکسیر جوان </p>
            <p>
                <span>تهران</span>
                <span> تخفیف %10</span>
            </p>

        </div>
    </div>
    </a>

    <a href="#card3">
        <div class="card">
        <div class="card-header"><img src="../../public/homeDir/img/card3.jpg" alt=""> </div>
        <div class="card-desc">
            <p>باشگاه بدنسازی قدرتی  </p>
            <p>
                <span>مشهد</span>
            </p>

        </div>
    </div>
    </a>

    <a href="#card4">
        <div class="card">
        <div class="card-header"><img src="../../public/homeDir/img/card4.jpg" alt=""> </div>
        <div class="card-desc">
            <p>
                <span>آکادمی پرورش اندام</span>
                <span>VIP</span>
            </p>
            <p>
                <span>کرج</span>
                <span> تخفیف %5</span>
            </p>

        </div>
    </div>
    </a>

</div>
<br>

<!--Questions-->
<div class="question-title">
    <p>سوالات متداول </p>
    <p> بیشترین سوالاتی که از طرف اعضا پرسیده شده</p>
</div>
<div class="line"></div>

<div class="question">
    <div class="question_header">
        <p>
            <span> آیا دبیران و باشگاه مورد تایید است ؟</span>
            <span> (آقای محسن ضارعی) </span>
        </p>
    </div>
    <div class="question_answer">
        <p> بله ، تمامی مربیان قابل تایید ما هستند و باشگاه مجهز به جدید ترین تجهیزات است</p>
    </div>
</div>

<div class="question">
    <div class="question_header">
        <p>
            <span> آیا در صورت نگرفتن نتیجه از طرف مربی میتوان بازپرداخت گرفت؟ </span>
            <span> (کاربر مهمان) </span>
        </p>
    </div>
    <div class="question_answer">
        <p> در صورت نگرفتن نتیجه مطلوم خود از دبیران ما ، ما به شما %30 مبلغ پرداختی را باز میگردانیم </p>
    </div>
</div>

<div class="question">
    <div class="question_header">
        <p>
            <span> ساعات کاری باشگاه به چه صورت میباشد ؟</span>
            <span> (آقای حسین نعیمی) </span>
        </p>
    </div>
    <div class="question_answer">
        <p id="time-work"> ساعات کاری باشگاه در روز های عادی از 9 صبح تا 9 شب میباشد و در روز های تعطیل باشگاه باز نیست  </p>
    </div>
</div>

<div class="question">
    <div class="question_header">
        <p>
            <span> آیا میتوان به عنوان مربی در باشگاه شروع به کار کرد ؟ </span>
            <span> (کاربر مهمان) </span>
        </p>
    </div>
    <div class="question_answer">
        <p> در صورت نیاز به دبیر آگهی در سایت و یا در باشگاه گذاشته میشود و در صورت تمایل به کار میتوانید در صورت داشتن مدارک (1 - پنج سال سابقه ورزشی ، 2 - داشتن مدارک و یا رتبه در مسابقات و ...) در موسسه شروع به کار کنید </p>
    </div>
</div>
<br>
<!--History-->
<div class="question-title">
    <p>تاریخ چه باشگاه</p>
    <p> سال شروع به کار و سال ساخت</p>
</div>
<div class="line"></div>
<div class="history">
        <p>
            پیشاپیش بابت زمانی که برای مطالعه این مقدمه اختصاص می دهید، از شما تشکر میکنیم.
            سایتی که در حال بازدید آن هستید، وب سایت تخصصی اطلاعات باشگاه های ورزشی و فدراسیون های هر ورزش مربوطه با تفکیک هر رشته و هر شهر است که با هدف ایجاد تسهیلات لازم در فضای اینترنت، جهت دسترسی آسان و سریع مردم عزیزمان به اطلاعات باشگاه ها و خدمات ورزشی ایجاد شده است.
            <br>
            در همین راستا زیرساخت های لازم جهت معرفی باشگاه ها و مراکز ورزشی با ایجاد پروفایل اختصاصی و درج مشخصات باشگاه، اطلاعات تماس و آدرس، همراه با دیگر اطلاعات لازم برای انتخاب یک باشگاه به زودی به سایت افزوده خواهد شد.
            <br>
            انتخاب يک باشگاه خوب ورزشی هميشه دغدغه ورزشکاران بوده است. اسپرت رزرو سايت جامع و کامل معرفی باشگاه های ورزشی در سراسر ايران است.
            <br>
            اسپرت رزرو سايت جامع باشگاه و سالن هاي ورزشی ايران است که باشگاه های ورزشی رشته های مختلف را به صورت تفکيک شهر ها معرفی می کند.
            <br>
            اسپرت رزرو در کنار معرفی اماکن ورزشی به تفکيک شهر، به معرفی تخصصی هر باشگاه و سالن به صورت تخصصی با اختصاص دادن پيج تخصصی به هر باشگاه پرداخته است.
            <br>
            معرفی انواع باشگاه‌های ورزشی بدنسازی، رزمی، استخر، فوتبال، تنيس، پينت بال، بولينگ، پينگ پنگ، شنا، کشتي، هندبال، ايروبيک، بدمینتون، تنيس، جودو، زومبا، کاراته و … اين امکان را فراهم آورده است تا هموطنان انتخابی آگاهانه‌ در این زمینه داشته باشند.
        </p>
</div>
<br>
<!--Contact-->
<div class="question-title">
    <p id="contact">راه های ارتباطی </p>
    <p> ارتباط با ما ازطریق ایمیل ، تلگرام و ....</p>
</div>
<div class="line"></div>

<div class="contact">
    <p>شما میتوانید برای ارتباط با ما و پرسیدن سوال و در یافت اطلاعات تکمیلی از راه های زیر استفاده کنید :</p>
    <p>
        <i class="fas fa-inbox"></i>
        ارتباط با ما از طریق ایمیل <span> <a href="#gmail"> roozsport@gmail.com </a> </span>
    </p>
    <p>
        <i class="fab fa-telegram"></i>
        ارتباط از طریق تلگرام با ایدی <span> <a href="#telegram">@roozsport2020 </a> </span>
    </p>
    <p>
        <i class="fab fa-whatsapp"></i>
        ارتباط با واتساپ از طریق شماره : ****98913+
    </p>
</div>
</div>

<br>

<!--Footer-->
<div class="footer">
    <p> </p>
    <p> website name : rooz sport </p>
</div>


<script src="../../public/homeDir/js/layout1.js"></script>
</body>
</html>