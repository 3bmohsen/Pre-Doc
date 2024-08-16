@extends('pre-doc.docdash.doc_sb')
@section('title','تفاصيل الدكتور و الحجز')
@section('content')
@if(session('success'))
            <div class="alert alert-success text-center cairo-bold m-5">
                {{ session('success') }}
            </div>
        @endif
<h1 class="text-center cairo-bold p-5">تفاصيل الدكتور</h1>
<div class="container d-flex flex-md-row flex-column align-items-center justify-content-between">
    <div class="p-5 ">
    <img src="data:image/jpeg;base64,{{ base64_encode($doc->usr_img) }}" class="card-img-top p-2" alt="...">

        <h4 class="text-center">{{$doc->name}}</h4>
    </div>
    <div class="p-5 d-flex text-center flex-column justify-content-end">
        <h4>سعر الجلسة الخاصة: {{$doc->session_price}}</h4>
        <h4>محافظة سكن الدكتور: {{$doc->gov}}</h4>

    </div>

</div>

<form class="p-5 d-flex flex-column justify-content-end align-items-center" action="/user/book/add" method="POST">
    @csrf
    <input type="hidden" value="{{$doc->id}}" name="doc_id" id="doc_id">
    <h3 class="text-center">إنشاء حجز</h3>
    
    <div class="d-flex flex-md-row flex-column align-items-center justify-content-center ">
        <div class="form-floating m-3">
            <input type="date" class=" form-control" style="border: 2px solid black;" id="book_date" name="book_date" placeholder="" disabled>
            <label for="book_date" class="text-center cairo-bold">ميعاد الجلسة</label>
        </div>
        <div class="form-floating m-3">
            <input type="text" class=" form-control text-center" style="border: 2px solid black;" id="book_addr" name="book_addr" placeholder="" disabled>
            <label for="book_addr" class="text-center cairo-bold">عنوانك بالتفصيل</label>
        </div>
    </div>
    <div class="d-flex flex-column">
    <div class="form-floating ">
            <input type="number" class=" form-control text-center" style="border: 2px solid black;" id="book_price" name="book_price" placeholder="" disabled>
            <label for="book_price" class="text-center cairo-bold">السعر المقترح للجلسة</label>
        </div>

    
</div>
<button class="btn btn-primary  m-3" style="width: 160px;" type="submit" disabled>إرسال الحجز</button>
    

</form>

@endsection