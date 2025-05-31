<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\panel\user\createUserRequest;
use App\Http\Requests\panel\user\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  Illuminate\support\Facades\Hash;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
    return view ('dashboard.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.users.create');
    }


    public function store(CreateUserRequest $request)
    {

 $data =$request->validated();
     $data['password'] = Hash::make('password');
    User::create($data);
    $request->session()->flash('status', 'کاربر به درستی ایجاد شد');
    return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
       return view( 'dashboard.users.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {

      $user->update(
          $request->validated());
        $request->session()->flash('status', 'اطلاعات کاربر به درستی ویرایش شد');
        return redirect()->route('users.index');
    }

    public function destroy(Request $request , User $user)
    {
    $user->delete();
    $request->session()->flash('status', ' کاربر مدنظر به درستی حذف شد');
    return back();
    }
}
