@extends('pre-doc.userdashb.master')
@section('title','حجز دكتور')
@section('header')
@include('pre-doc.userdashb.cust_sb')
@endsection
@section('content')
<div class="container d-flex flex-md-row flex-column justify-content-center align-items-center">

    <div class="pt-3">
    <nav class="navbar bg-body-tertiary" style="background-color:#f8f9fa00 !important;padding-top: !important">
  <div class="container-fluid">
    <form class="d-flex" role="search" action="/doctors/search/" method="GET">
      <input class="form-control me-2 text-center" type="search" name="search" id="search" placeholder="ابحث عن اسم الدكتور" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">بحث</button>
    </form>
  </div>
</nav>
    </div>
    <div class="pt-3">
    <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    التخصصات
  </a>

  <ul class="dropdown-menu text-center">
  <li><a href="/user/doctors/" class="dropdown-item" >جميع التخصصات</a></li>

    @foreach ($specs as $spec)
    <li><a class="dropdown-item" href="/user/doctors/{{$spec->id}}">{{$spec->specialization_name }}</a></li>

    @endforeach
  </ul>
</div>
    </div>
</div>
<div class="container d-flex justify-content-center align-items-center">
@if($doctors->isEmpty())
    <div class="alert  text-center align-items-center justify-content-center cairo-bold alert-danger p-3 mt-5">
    لا يوجد دكتور بهذا الاسم
    </div>
@endif
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($doctors as $doc)
        <div class="col justify-content-center d-flex">
            <div class="card text-center align-items-center" style="width: 996px;background-color:#1556D9;">
                <img src="data:image/jpeg;base64,{{ base64_encode($doc->usr_img) }}" style="height:200px;object-fit: cover;"  class="card-img-top p-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-light">{{$doc->name}}</h5>
                    <p class="card-text text-light">دكتور {{$doc->docSpec->specialization_name }}</p>
                    <a href="/user/book/{{$doc->id}}" class="btn btn-light">تفاصيل</a>
                </div>
            </div>
        </div>
        @endforeach
        
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection