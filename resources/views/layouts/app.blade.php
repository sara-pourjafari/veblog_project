<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> وبلاگ{{ $title }}</title>

    <link href="{{asset('blog/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/style.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="menu-items">
                    <ul>
                        <li><a href="#">خانه</a></li>
                        <li><a href="#">اخبار</a></li>
                        <li><a href="#">تماس با ما</a></li>
                        <li><a href="#">درباره ما</a>
                            <ul>
                                <li><a href="#">خانه</a></li>
                                <li><a href="#">اخبار</a></li>
                                <li><a href="#">تماس با ما</a>
                                    <ul>
                                        <li><a href="#">خانه</a></li>
                                        <li><a href="#">اخبار</a></li>
                                        <li><a href="#">تماس با ما</a></li>
                                        <li><a href="#">درباره ما</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">درباره ما</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logo-box">

                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-baner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>{{ $PageTitle }}</span>
            </div>
        </div>
    </div>
</div>



<div class="container">

    <div class="row">
        <div class="page-content ">
            <div class="col-md-12 justify-center">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>


<div class="footer_box">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسترسی سریع</span>
                        <ul>
                            <li><a href="#">خانه</a></li>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">حریم خصوصی</a></li>
                            <li><a href="#">مجلات</a></li>
                            <li><a href="#">بلاگ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسنه بندی موضوعی</span>
                        <ul>
                            <li><a href="#">وردپرس</a></li>
                            <li><a href="#">اندروید</a></li>
                            <li><a href="#">سیستم عامل</a></li>
                            <li><a href="#">دانلود</a></li>
                            <li><a href="#">موبایل</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu">
                        <span class="title">دسترسی سریع</span>
                        <ul>
                            <li><a href="#">خانه</a></li>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">حریم خصوصی</a></li>
                            <li><a href="#">مجلات</a></li>
                            <li><a href="#">بلاگ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="desc_footer footer-menu">
                    <span class="title">دسترسی سریع</span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                        زیادیلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                        است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                    </p>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="copy-r">
                        <span>
                            &copy; حقوق انتشار برای سئو 90 محفوط است
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('blog/css/bootstrap.css') }}"></script>
</body>

</html>
