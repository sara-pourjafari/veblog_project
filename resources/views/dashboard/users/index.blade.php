<x-dashboard-layout>
    <x-slot name="title">
        -مدیریت کاربران
    </x-slot>

    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}" >پیشخوان</a></li>
            <li><a href="{{ route('users.index') }}" class="is-active">کاربران</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('users.index') }}">همه کاربران</a>

                <a class="tab__item" href="{{ route('users.create') }}">ایجاد کاربر جدید</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی کاربر">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="ایمیل">
                            <input type="text"  class="text" placeholder="شماره">
                            <input type="text"  class="text" placeholder="آی پی">
                            <input type="text"  class="text margin-bottom-20" placeholder="نام و نام خانوادگی">
                            <btutton class="btn btn-netcopy_net">جستجو</btutton>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>شماره موبایل</th>
                    <th>سطح کاربری</th>
                    <th>تاریخ عضویت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user)
                <tr role="row" class="">
                    <td><a href="">{{ $user->id }}</a></td>
                    <td><a href="">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->getRoleInFarsi() }}</td>
                    <td>{{ $user->getCreatedAtInJalali() }}</td>
                    <td>
                        @if( auth()->user()->id !== $user->id  &&  $user->role !== 'admin')
                        <a href="{{ route('users.destroy', $user->id) }}" onclick="destroyUser(event , {{$user->id}})" class="item-delete mlg-15" title="حذف"></a>
                        @endif
                        <a href="{{ route('users.edit' , $user->id) }}" class="item-edit " title="ویرایش"></a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post" id="destroy-user-{{$user->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <x-slot name="scripts">

    <script>
        function destroyUser(event , id){
            event.preventDefault();

            Swal.fire({
                title: "آیا مطمئن هستید که این کاربر را حذف کنید؟",

                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                cancelButtonText: "انصراف",
                confirmButtonText: "بله حذف کن!",

            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`destroy-user-${id}`).submit()
                }
            })

        }
    </script>
    </x-slot>



</x-dashboard-layout>
