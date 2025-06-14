<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وبلاگ - خانه</title>

    <link href="{{ asset('blog/css/bootstrap.css')}}" rel="stylesheet">
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
<div class="top-wwrap">
    <div class="container">
        <div class="row">
            <div class="main-menu">
                <div class="col-md-12">
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
            </div>
        </div>
        <div class="slider-box text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1>به وبلاگ ما خوش آمدید!</h1>
                    <P>در اینجا دنیایی از مطالب جذاب و الهام‌بخش منتظر شماست.
                        <br>ما به اشتراک‌گذاری ایده‌ها، تجربیات و دانش در زمینه‌های مختلف متعهد هستیم.
                        با ما همراه باشید و از خواندن مقالات و مطالب متنوع لذت ببرید!</P>
                    <a href="{{ route('register') }}" class="site-btn">ثبت نام</a>
                    <a href="{{ route('login') }}" class="site-btn">ورود</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-3 nopadding">
                <div class="item">
                    <img src="{{ asset('blog/img/icons/111.png') }}">
                    <span>افزونه وردپرس</span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="col-md-3 nopadding">
                <div class="item">
                    <img src=" {{ asset('blog/img/icons/222.png') }}">
                    <span>قالب وردپرس</span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="col-md-3 nopadding">
                <div class="item">
                    <img src="{{ asset('blpg/img/icons/333.png') }}">
                    <span>تنظیمات پیشرفته</span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="col-md-3 nopadding">
                <div class="item">
                    <img src="{{ asset('blog/img/icons/444.png') }}">
                    <span>قالب رسپانسیو</span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="index-blog">
    <div class="container">
        <div class="row row1">
            <div class="col-md-6">
                <div class="desc">
                    <h4>عنوان مطلب در این قسمت باشد</h4>
                    <div class="meta">
                        <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                        <span><i class="fa fa-comment-o"></i> 10 نظر</span>
                    </div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                    </p>
                    <div class="text-left">
                        <a href="#" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pic">
                    <img src="{{ asset('blog/img/custom_search-min.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row row2">
            <div class="col-md-6">
                <div class="pic">
                    <img src="{{ asset('blog/img/wordpress_sidebars-min.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="desc">
                    <h4>عنوان مطلب در این قسمت باشد</h4>
                    <div class="meta">
                        <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                        <span><i class="fa fa-comment-o"></i> 10 نظر</span>
                    </div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                    </p>
                    <div class="text-left">
                        <a href="#" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site_boxes_content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <span class="title">مطالب پربازدید</span>
                    <div class="post_itme_bx">
                        <div class="col-md-5">
                            <div class="pic">
                                <img src="{{ asset('blog/img/css_acardion_menu-min.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="desc">
                                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                                <p>عنوان مطلب در این قسمت ، عنوان مطلب در این قسمت ، آموزش وردپرس آموزش وردپرس</p>
                                <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_itme_bx">
                        <div class="col-md-5">
                            <div class="pic">
                                <img src="{{asset('blog/img/wordpress_sidebars-min.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="desc">
                                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                                <p>عنوان مطلب در این قسمت ، عنوان مطلب در این قسمت ، آموزش وردپرس آموزش وردپرس</p>
                                <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_itme_bx">
                        <div class="col-md-5">
                            <div class="pic">
                                <img src="{{ asset('blog/img/custom_search-min.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="desc">
                                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                                <p>عنوان مطلب در این قسمت ، عنوان مطلب در این قسمت ، آموزش وردپرس آموزش وردپرس</p>
                                <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <span class="title">آموزش وردپرس</span>
                    <div class="post_itme_bx">
                        <div class="col-md-5">
                            <div class="pic">
                                <img src="{{ asset('blog/img/css_acardion_menu-min.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="desc">
                                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                                <p>عنوان مطلب در این قسمت ، عنوان مطلب در این قسمت ، آموزش وردپرس آموزش وردپرس</p>
                                <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_itme_bx">
                        <div class="col-md-5">
                            <div class="pic">
                                <img src="{{ asset('blog/img/wordpress_sidebars-min.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="desc">
                                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                                <p>عنوان مطلب در این قسمت ، عنوان مطلب در این قسمت ، آموزش وردپرس آموزش وردپرس</p>
                                <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                            </div>
                        </div>
                    </div>
                    <div class="post_itme_bx">
                        <div class="col-md-5">
                            <div class="pic">
                                <img src="{{ asset('blog/img/custom_search-min.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="desc">
                                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                                <p>عنوان مطلب در این قسمت ، عنوان مطلب در این قسمت ، آموزش وردپرس آموزش وردپرس</p>
                                <span><i class="fa fa-calendar-o"></i> 99.9.16</span>
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="{{ asset('blog/js/bootstrap.js') }}"></script>
</body>

</html>
