@extends('pre-doc.admindash.master')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand cairo-bold text-success" href="/admin/dashboard">Admin: {{Auth::user()->name}}</a>
          <div class="d-flex justify-content-end align-items-center">
              <a class="btn btn-success d-flex align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  قائمة المشرف
              </a>
      </div>
    </button>

</div>
</nav>
<div class="offcanvas offcanvas-end bg-success" style="border: 2px black solid;border-radius: 5% 0% 0% 5%;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
  <a href="/admin/dashboard"><h5 class="offcanvas-title krona-one-regular text-light text-center" id="offcanvasExampleLabel">Pre-Doc</h5></a>  
    <button type="button" style="background-color: aliceblue;" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex align-items-center justify-content-center">
  <div class="d-flex flex-column align-items-center justify-content-center text-center">
  <div class="btn-group">
  <button type="button" dir="rtl" class="cairo-bold btn btn-light myl dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    المستخدمين
  </button>
  <ul class="dropdown-menu cairo-bold text-center">
    <li><a class="dropdown-item" href="/admin/users">عرض المستخدمين</a></li>
    <li><a class="dropdown-item" href="/user/add">اضافة مستخدم</a></li>
  </ul>
</div>
      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
      <div class="btn-group">
        <button type="button" dir="rtl" class="cairo-bold btn btn-light myl dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          الدكاترة
        </button>
        <ul class="dropdown-menu cairo-bold text-center">
          <li><a class="dropdown-item" href="/admin/doctors">عرض الدكاترة</a></li>
          <li><a class="dropdown-item" href="/doc/add">اضافة دكتور</a></li>
        </ul>
      </div>
      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
      <div class="btn-group">
        <button type="button" dir="rtl" class="cairo-bold btn btn-light myl dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        المشرفين
        </button>
        <ul class="dropdown-menu cairo-bold text-center">
          <li><a class="dropdown-item" href="/admin/admins">عرض المشرفين</a></li>
          <li><a class="dropdown-item" href="/add/admin">اضافة مشرف</a></li>
        </ul>
      </div>
    <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
    <a href="/recent/book" class="nav-link">أخر الحجوزات</a>
    <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">

    </div>
  </div>
  <div class="d-flex flex-column align-items-center justify-content-end text-center">
  <a href="/admin/editprofile" class="nav-link">تعديل حسابي</a>
      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item text-light" type="submit">تسجيل خروج</button>
                        </form>

      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
    </div>
  </div>
</div>