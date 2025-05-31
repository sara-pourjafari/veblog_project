<x-layout>
    <x-slot name="title">
        -صفحه ورود
    </x-slot>

    <x-slot name="PageTitle">
        فرم ورود
    </x-slot>
    <body class="bg-light d-flex align-items-center justify-content-center min-vh-100">
    <div class="container form-register">

        <form class="bg-white p-4 rounded shadow" style="width: 300px; " action="{{ route('login.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="mobile">شماره موبایل </label>
                <input type="text" class="form-control" id="fullName" placeholder="شماره موبایل" name="mobile">

                <div class="input-error">
                    @error('mobile')
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                       <p> مرا به خاطر بسپار</p>
                    </label>
                    <br>
                    <a href="">بازیابی رمز عبور</a>
                       <br><br>

                    <button type="submit" class="btn btn-primary btn-block">ورود به سایت</button>
            </div>
            </div>
        </form>

        <!-- لینک جاوااسکریپت بوت‌استرپ -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>


</x-layout>
