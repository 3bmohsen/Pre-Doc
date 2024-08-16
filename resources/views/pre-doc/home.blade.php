@extends('pre-doc.master')
@section('title','Home')

@section('header')

@include('pre-doc.header')

@endsection

@section('content')

<div class="d-flex align-items-center justify-content-center" style="background-image:url({{ asset('img/img.jpg') }});height: 500px;">
<div class="f1 text-center cairo-bold " style="">سنصلك لدكتورك بسهولة</div>
</div>
<div class="d-flex flex-column align-items-center justify-content-center" style="background-color:#1556D9;height: auto;width: auto;overflow-x: hidden;">
<div class="p-5">
<div class="d-flex flex-lg-row flex-column">
@foreach ($docs as $doc)
<div class="col">
    <div class="card d-flex align-items-center p-3" >
      <img src="data:image/jpeg;base64,{{ base64_encode($doc->usr_img) }}" style="height:200px;object-fit: cover;" class="card-img-top p-2" alt="...">
      <div class="card-body">
      <h5 class="card-title text-center">{{$doc->name}}</h5>
      <p class="card-text text-center">دكتور {{$doc->docSpec->specialization_name }}</p>
      </div>
    </div>
  </div>
@endforeach

  </div>
</div>
<div class="pb-5 f2 text-center" style="color:#ffffff; font-size:30px">يوجد لدينا العديد من الدكاترة المتميزين في جميع التخصصات</div>
</div>
<div class="d-flex align-items-center justify-content-center justify-content-lg-end" style="background-image:url({{ asset('img/bg.png') }});background-repeat: no-repeat;height: 500px;">

  <div class="p-5 justify-content-center align-items-center text-center">
<div class="f1 text-lg-end cairo-bold " style="color:#0054f8;-webkit-text-stroke: 1px black; /* Stroke width and color */
  text-stroke: 1px black;">هل تحتاج إلى دكتور الأن؟</div>
<button type="button" class="btn btn-primary m-5 p-3 pe-5 ps-5" style="background-color:#1556D9;">تصفح جميع الدكاترة</button>
</div>
</div>
<div class="d-flex justify-content-center align-items-center" style="background-color:#aaa2a0">
<div class="p-5 justify-content-center align-items-center text-center">
<div class="f1 text-lg-end cairo-bold " style="color:#0054f8;">تريد الأنضمام إلينا كادكتور</div>
<button type="button" class="btn btn-primary m-5 p-3 pe-5 ps-5" style="background-color:#1556D9;">تعرف على المتطلبات</button>
</div>
</div>
@endsection
@section('footer')

@include('pre-doc.footer')

@endsection