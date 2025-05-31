<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <title> پنل وبلاگ {{ $title ?? '' }} </title>
    <link rel="stylesheet" href="{{ asset('blog/dashboard/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/dashboard/css/responsive_991.css') }}" media="(max-width:991px)">
    <link rel="stylesheet" href="{{ asset('blog/dashboard/css/responsive_768.css') }}" media="(max-width:768px)">
    <link rel="stylesheet" href="{{ asset('blog/dashboard/css/font.css') }}">
</head>
<body>
<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href="https://netcopy.ir"></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img">
            <img src="{{ asset('blog/dashboard/img/pro.jpg') }}" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر :{{ auth()->user()->name }}</span>
        <span class="profile__name">کاربر :{{ auth()->user()->getRoleInFarsi() }}</span>
    </div>

    <ul>
        <li class="item-li i-dashboard  @if( request()->is('dashboard')) is-active @endif"><a href="{{ route('dashboard') }}">پیشخوان</a></li>
        @if( auth()->user()->role==='admin')

        <li class="item-li i-users @if( request()->is('dashboard/users') ||( request()->is('dashboard/users/*'))) is-active @endif"><a href="{{ route('users.index') }} "> کاربران</a></li>
        @endif
        <li class="item-li i-categories"><a href="categories.html">دسته بندی ها</a></li>


        <li class="item-li i-articles"><a href="articles.html">مقالات</a></li>

        <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>


        <li class="item-li i-user__inforamtion"><a href="user-information.html">اطلاعات کاربری</a></li>
    </ul>

</div>
<div class="content">
    <div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
        <div class="header__right d-flex flex-grow-1 item-center">
            <span class="bars"></span>

        </div>
        <div class="header__left d-flex flex-end item-center margin-top-2">

            <div class="notification margin-15">
                <a class="notification__icon"></a>
                <div class="dropdown__notification">
                    <div class="content__notification">
                        <span class="font-size-13">موردی برای نمایش وجود ندارد</span>
                    </div>
                </div>
            </div>
            <a href="{{ route('logout')}}" class="logout" title="خروج"
               onclick=" event.preventDefault(); document.getElementById('logout-form').submit()"></a>
            <form action="{{ route('logout') }}" method="post" id="logout-form">

                @csrf

            </form>
        </div>
    </div>

    {{ $slot }}
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(Session::has('status'))
<script>
    swal.fire({ title :"{{ session('status') }}" ,  cancelButtonText: 'تایید' , icon : 'success'})
</script>
@endif
<script src="{{ asset('blog/dashboard/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('blog/dashboard/js/js.js') }}"></script>
{{ $scripts ?? '' }}
</body>

</html>
