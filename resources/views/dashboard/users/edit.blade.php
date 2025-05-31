
<x-dashboard-layout>
    <x-slot name="title">
        -ویرایش کاربران
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}" >پیشخوان</a></li>
            <li><a href="{{ route('users.index') }}" class="is-active">کاربران</a></li>
            <li><a href="{{ route('users.create') }}" class="is-active">کاربر جدید</a></li>
            <li><a href="{{ route('users.edit' , 1) }}" class="is-active">ویرایش کاربر </a></li>
        </ul>
    </div>
    <form action="{{ route('users.update' , $user->id) }}" method="POST" style="max-width: 400px; margin-top: 30px ;margin-right: 400px; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        @csrf
        @method( 'put')
        <h2 style="text-align: center ; color: blue">ویرایش کاربر</h2>

        <label for="Name">نام و نام خانوادگی:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">

        @error( 'name')
        <p class="input-error">{{ $message  }}</p>
        @enderror

        <label for="mobile">شماره موبایل:</label>
        <input type="tel" id="mobile" name="mobile" value="{{ $user -> mobile }}" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">

        @error( 'mobile')
        <p class="input-error">{{ $message  }}</p>
        @enderror


        <label for="email">آدرس ایمیل:</label>
        <input type="email" id="email" name="email" value="{{ $user -> email }}"  style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">

        @error( 'email')
        <p class="input-error">{{ $message  }}</p>
        @enderror

        <label for="role">نقش کاربر:</label>
        <select class="select" id="role" name="role" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="user" @if( $user->role === 'user') selected @endif>کاربرعادی</option>
            <option value="admin" @if( $user->role === 'admin') selected @endif>ادمین</option>
            <option value="author" @if( $user->role === 'author') selected @endif>نویسنده</option>
        </select>

        @error( 'role')
        <p class="input-error">{{ $message  }}</p>
        @enderror

        <button type="submit" style="width: 100%; padding: 10px; margin-top: 10px;
         background-color: blue; color: white; border: none; border-radius: 4px;  ">ویرایش کاربر</button>
    </form>


</x-dashboard-layout>

