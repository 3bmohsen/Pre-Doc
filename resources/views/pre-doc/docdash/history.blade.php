@extends('pre-doc.docdash.doc_sb')
@section('title','سجل الحجوزات')
@section('content')
<div class="container">

    <h1 class="p-5 text-center cairo-bold">سجل الحجوزات</h1>
    
<table class=" table text-center" style="direction: rtl;">
  <thead>
    <tr>
      <th scope="col">اسم المريض</th>
      <th scope="col">تاريخ الجلسة</th>
      <th scope="col">السعر المقترح</th>
      <th scope="col">العنوان</th>
      <th scope="col">موافقة الدكتور</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <td>{{$book->user->name}}</td>
      <td>{{$book->session_date}}</td>
      <td>{{$book->sug_price}}</td>
      <td>{{$book->address}}</td>
      @if ($book->approve == 'yes')
      <td class="cairo-bold text-success">موافق</td>
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