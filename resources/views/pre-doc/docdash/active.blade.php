@extends('pre-doc.docdash.doc_sb')
@section('title','الحجوزات النشطة')
@section('content')
<div class="container">
    <h1 class="p-5 text-center cairo-bold">قائمة الحجوزات النشطة</h1>
    @if(session('success'))
            <div class="alert alert-success text-center cairo-bold m-5">
                {{ session('success') }}
            </div>
        @endif  
        <div class="table-responsive" dir="rtl">

<table class=" table text-center" style="direction: rtl;">
  <thead>
    <tr>
      <th scope="col">اسم الدكتور</th>
      <th scope="col">تاريخ الجلسة</th>
      <th scope="col">السعر المقترح</th>
      <th scope="col">العنوان</th>
      <th scope="col" colspan="2">الموافقة</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <td>{{$book->user->name}}</td>
      <td>{{$book->session_date}}</td>
      <td>{{$book->sug_price}}</td>
      <td>{{$book->address}}</td>
      <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sure{{$book->id}}">موافق</button>
 <!-- Modal -->
 <div class="modal fade" id="sure{{$book->id}}" tabindex="-1" aria-labelledby="sure{{$book->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <h1 class="modal-title fs-5 text-center cairo-bold" id="sure{{$book->id}}">تأكيد</h1>

        </div>
        <div class="modal-body text-center">
           هل انت موافق على الحجز الخاص بـ {{$book->user->name}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        <form action="/book/approve/{{$book->id}}" method="POST">
          @csrf
          <input type="hidden" name="yes" id="yes" value="yes">
          <button type="submit" class="btn btn-success">تأكيد الموافقة</button>
        </form>
        </div>
        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#surer{{$book->id}}">رفض</button></td>
 <!-- Modal -->
 <div class="modal fade" id="surer{{$book->id}}" tabindex="-1" aria-labelledby="surer{{$book->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-center cairo-bold" id="surer{{$book->id}}">تأكيد</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
           هل انت رافض الحجز الخاص بـ {{$book->user->name}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        <form action="/book/decline/{{$book->id}}" method="POST">
          @csrf
          <input type="hidden" name="no" id="no" value="no">
          <button type="submit" class="btn btn-danger">تأكيد الرفض</button>
        </form>
        </div>
        </td>
        </div>
      </div>
    </div>
  </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
    </tr>
    @endforeach
  
  </tbody>
</table>
</div>
@if ($books->isEmpty())
    <div class="alert alert-danger text-center cairo-bold m-5">
                ليس لديك اي حجوزات نشطة
            </div>
    @endif
</div>
@endsection
