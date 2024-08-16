@extends('pre-doc.docdash.doc_sb')
@section('title','تعديل حسابي')
@section('content')
<h1 class="text-center cairo-bold pt-5">تعديل حسابي</h1>

<form class="p-5 d-flex flex-column justify-content-end align-items-center" dir="rtl" action="/user/update" method="POST">
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
@method('PUT')
    @csrf
    
    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
        <div class="form-floating m-3">
            <input type="text" class="form-control" value="{{$user->name}}" style="border: 2px solid black; width: 300px;" id="user_name" name="user_name" placeholder="">
            <label for="user_name" class="text-center cairo-bold">الاسم</label>
        </div>
        <div class="form-floating m-3">
            <input type="text" class="form-control text-center" value="{{$user->gov}}" style="border: 2px solid black; width: 300px;" id="user_gov" name="user_gov" placeholder="">
            <label for="user_gov" class="text-center cairo-bold">المحافظة</label>
        </div>
    </div>
    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
        <div class="form-floating m-3">
            <input type="date" class="form-control" value="{{$user->birth}}" style="border: 2px solid black; width: 300px;" name="user_birth" id="user_birth" placeholder="">
            <label for="user_birth" class="text-center cairo-bold">تاريخ الميلاد</label>
        </div>
        <div class="form-floating m-3" >
        <select class="text-center cairo-bold" value="{{$user->sex}}" name="user_s" style="border: 2px solid black; width: 300px; height: 55px;" id="user_s">
            <option value="male">ذكر</option>
            <option value="female">انثى</option>

        </select>
        </div>
    </div>
    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
        <div class="form-floating m-3">
            <input type="email" class="form-control" value="{{$user->email}}" name="user_email" style="border: 2px solid black; width: 300px;" id="user_email" placeholder="">
            <label for="user_email" class="text-center cairo-bold">البريد الالكتروني</label>
        </div>
        <div class="form-floating m-3">
        <input type="password" class="form-control text-center" name="user_pass" style="border: 2px solid black; width: 300px;" id="user_pass" placeholder="">
        <label for="user_pass" class="text-center cairo-bold">كلمة السر</label>
        </div>
    </div>
    <div class="d-flex flex-column">
    <div class="form-floating ">
            <input type="tel" class="form-control text-center" value="{{$user->phone}}" name="user_phone" style="border: 2px solid black; width: 300px;" id="user_phone" placeholder="">
            <label for="user_phone" class="text-center cairo-bold">رقم الهاتف</label>
        </div>

    
</div>
<button class="btn btn-primary m-3" style="width: 160px;" type="submit">تعديل الحساب</button>
    

</form>
@endsection