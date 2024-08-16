@extends('pre-doc.admindash.admin_sb')
@section('title','لوحة التحكم')
@section('content')
<div class="d-flex align-items-center justify-content-center text-center vh-100" style="overflow:hidden">
    <p class="cairo-bold align-items-center justify-content-center text-center" style="font-size:xx-large">{{Auth::user()->name}}, مرحبا </p>
</div>
@endsection