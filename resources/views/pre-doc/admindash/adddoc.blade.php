@extends('pre-doc.admindash.admin_sb')
@section('title','إضافة دكتور')
@section('content')
<h1 class="text-center cairo-bold pt-5">إضافة دكتور</h1>

<form class="p-5 d-flex flex-column justify-content-end align-items-center" dir="rtl" action="/doc/insert" method="POST" enctype="multipart/form-data">
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    @csrf
    <div class="d-flex flex-md-row flex-row align-items-center justify-content-center ">
        <div class="form-floating text-center m-3">
            <input type="file" class="form-control" value="" style="border: 2px solid black; width: 300px;" id="user_img" name="user_img" placeholder="">
            <label for="user_img" class="text-center cairo-bold">صورة الدكتور</label>
        </div>
        </div>

    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
        <div class="form-floating text-center m-3">
            <input type="text" class="form-control" value="{{old('user_name')}}" style="border: 2px solid black; width: 300px;" id="user_name" name="user_name" placeholder="">
            <label for="user_name" class="text-center cairo-bold">الاسم</label>
        </div>
        <div class="form-floating text-center m-3">
            <input type="text" class="form-control text-center" value="{{old('user_gov')}}" style="border: 2px solid black; width: 300px;" id="user_gov" name="user_gov" placeholder="">
            <label for="user_gov" class="text-center cairo-bold">المحافظة</label>
        </div>
    </div>
    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
        <div class="form-floating text-center m-3">
            <input type="date" class="form-control" value="{{old('user_birth')}}" style="border: 2px solid black; width: 300px;" name="user_birth" id="user_birth" placeholder="">
            <label for="user_birth" class="text-center cairo-bold">تاريخ الميلاد</label>
        </div>
        <div class="form-floating text-center m-3" >
        <select class="text-center cairo-bold" value="{{old('user_s')}}" name="user_s" style="border: 2px solid black; width: 300px; height: 55px;" id="user_s">
            <option value="">أختر النوع</option>
            <option value="male">ذكر</option>
            <option value="female">انثى</option>

        </select>
        </div>
    </div>
    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
        <div class="form-floating text-center m-3">
            <input type="email" class="form-control" value="{{old('user_email')}}" name="user_email" style="border: 2px solid black; width: 300px;" id="user_email" placeholder="">
            <label for="user_email" class="text-center cairo-bold">البريد الالكتروني</label>
        </div>
        <div class="form-floating text-center m-3">
        <input type="password" class="form-control text-center" name="user_pass" style="border: 2px solid black; width: 300px;" id="user_pass" placeholder="">
        <label for="user_pass" class="text-center cairo-bold">كلمة السر</label>
        </div>
    </div>
    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
    <div class="form-floating text-center m-3">
            <input type="tel" class="form-control text-center" value="{{old('user_phone')}}" name="user_phone" style="border: 2px solid black; width: 300px;" id="user_phone" placeholder="">
            <label for="user_phone" class="text-center cairo-bold">رقم الهاتف</label>
            
        </div>
        <div class="form-floating text-center m-3" >
        <select class="text-center cairo-bold dropstart" value="{{old('spec')}}" name="spec" style="border: 2px solid black; width: 300px; height: 55px;" id="spec">
        <option value="">أختر التخصص</option>
        @foreach ($specs as $spec )
            <option value="{{$spec->id}}">{{$spec->specialization_name}}</option>
        @endforeach
        </select>
        </div>
</div>
<div class="form-floating text-center  d-flex flex-column">
            <input type="number" class="form-control text-center" value="{{old('price')}}" name="price" style="border: 2px solid black; width: 300px;" id="price" placeholder="">
            <label for="price" class="text-center cairo-bold">سعر الجلسة الخاصة</label>
            
        </div>

<button class="btn btn-primary m-3" style="width: 160px;" type="submit">إضافة دكتور</button>
    

</form>
@endsection