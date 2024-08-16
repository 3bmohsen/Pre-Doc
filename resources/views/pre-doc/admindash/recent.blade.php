@extends('pre-doc.admindash.admin_sb')
@section('title','أخر الحجوزات')
@section('content')
<div class="container">

    <h1 class="p-5 text-center cairo-bold">اخر الحجوزات</h1>
<hr>
    <div class="p-3  text-success text-center"><h5 class="cairo-bold">اجمالي عدد الحجوزات: {{$count}}</h5></div>
    <hr>
<table class=" table text-center" style="direction: rtl;">
  <thead>
    <tr>
    <th scope="col">اسم المستخدم</th>
      <th scope="col">اسم الدكتور</th>
      <th scope="col">تاريخ الجلسة</th>
      <th scope="col">السعر المقترح</th>
      <th scope="col">موافقة الدكتور</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <td>{{$book->user->name}}</td>

      <td>{{$book->doc->name}}</td>
      <td>{{$book->session_date}}</td>
      <td>{{$book->sug_price}}</td>
      @if ($book->approve == 'yes')
      <td class="cairo-bold text-success">موافق</td>
      @endif
      @if ($book->approve == 'no')
      <td class="cairo-bold text-danger">رفض</td>
      @endif
      @if ($book->approve == 'pending')
      <td class="cairo-bold text-secondary">لم يرد بعد</td>
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