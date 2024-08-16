@extends('pre-doc.userdashb.cust_sb')
@section('title','سجل الحجوزات')
@section('content')
<div class="container">

    <h1 class="p-5 text-center cairo-bold">سجل الحجوزات</h1>
    
<table class=" table text-center" style="direction: rtl;">
  <thead>
    <tr>
      <th scope="col">اسم الدكتور</th>
      <th scope="col">تاريخ الجلسة</th>
      <th scope="col">السعر المقترح</th>
      <th scope="col">موافقة الدكتور</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <td>{{$book->doc->name}}</td>
      <td>{{$book->session_date}}</td>
      <td>{{$book->sug_price}}</td>
      @if ($book->approve == 'yes')
      <td><button type="button" class="btn cairo-bold text-success" data-bs-toggle="modal" data-bs-target="#sure{{$book->id}}">موافق (اضغط هنا لعرض رقم الدكتور)</button></td>
 <!-- Modal -->
 <div class="modal fade" id="sure{{$book->id}}" tabindex="-1" aria-labelledby="sure{{$book->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-center cairo-bold" id="sure{{$book->id}}">تحذير</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center cairo-bold">
          {{$book->doc->phone}} :رقم الدكتور للتواصل 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
      @endif
      @if ($book->approve == 'no')
      <td class="cairo-bold text-danger">رفض</td>

      @endif

    </tr>
    @endforeach

  </tbody>

</table>
@if ($books->isEmpty())
    <div class="alert alert-danger text-center cairo-bold m-5">
                ليس لديك اي حجوزات مسبقة
            </div>
    @endif
</div>
@endsection