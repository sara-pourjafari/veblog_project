
<x-dashboard-layout>
    <x-slot name="title">
        -افزودن کاربران
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}" >پیشخوان</a></li>
            <li><a href="{{ route('users.index') }}" class="is-active">کاربران</a></li>
            <li><a href="{{ route('users.create') }}" class="is-active">کاربر جدید</a></li>
        </ul>
    </div>
    <form action="{{ route('users.store') }}" method="POST" style="max-width: 400px; margin-top: 30px ;margin-right: 400px; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        @csrf
        <h2 style="text-align: center ; color: blue">ایجاد کاربر جدید</h2>

        <label for="Name">نام و نام خانوادگی:</label>
        <input type="text" id="name" name="name"  style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">

        @error( 'name')
        <p class="input-error">{{ $message  }}</p>
        @enderror

        <label for="mobile">شماره موبایل:</label>
        <input type="tel" id="mobile" name="mobile" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">

        @error( 'mobile')
        <p class="input-error">{{ $message  }}</p>
        @enderror


        <label for="email">آدرس ایمیل:</label>
        <input type="email" id="email" name="email"  style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">

        @error( 'email')
        <p class="input-error">{{ $message  }}</p>
        @enderror

        <label for="role">نقش کاربر:</label>
        <select class="select" id="role" name="role" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="user" selected>کاربرعادی</option>
            <option value="admin">ادمین</option>
            <option value="author">نویسنده</option>
        </select>

        @error( 'role')
        <p class="input-error">{{ $message  }}</p>
        @enderror

        <button type="submit" style="width: 100%; padding: 10px; margin-top: 10px;
         background-color: blue; color: white; border: none; border-radius: 4px;  ">ایجاد کاربر</button>
    </form>


</x-dashboard-layout>

