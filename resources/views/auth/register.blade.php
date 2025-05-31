<x-layout>
<x-slot name="title">
    -صفحه ثبت نام
</x-slot>

<x-slot name="PageTitle">
    فرم ثبت نام
</x-slot>

    <body class="bg-light d-flex align-items-center justify-content-center min-vh-100">
    <div class="container form-register">

    <form class="bg-white p-4 rounded shadow" style="width: 300px; " action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">نام و نام خانوادگی</label>
            <input type="text" class="form-control" id="fullName" placeholder=" نام و نام خانوادگی" name="name">

           <div class="input-error">
            @error('name')
            {{ $message }}
            @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="mobile">شماره موبایل</label>
            <input type="text" class="form-control" id="fullName" placeholder="شماره موبایل" name="mobile">

            <div class="input-error">
                @error('mobile')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="email">آدرس ایمیل</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل را وارد کنید"
            name="email">

            <div class="input-error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="password">رمز عبور</label>
            <input type="password" class="form-control" id="password" placeholder="رمز عبور" name="password">

            <div class="input-error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password_confirmation">تأیید رمز عبور</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="تأیید رمز عبور" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary btn-block">ثبت نام</button>

    </form>

    <!-- لینک جاوااسکریپت بوت‌استرپ -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
    </body>


</x-layout>
