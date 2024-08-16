@extends('pre-doc.userdashb.master')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand cairo-bold" href="/user/dashboard">{{Auth::user()->name}}</a>
          <div class="d-flex justify-content-end align-items-center">
              <a class="btn btn-primary d-flex align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  قائمة المستخدم
              </a>
      </div>
    </button>

</div>
</nav>
<div class="offcanvas offcanvas-end " style="border: 2px black solid;border-radius: 5% 0% 0% 5%;background-color:#1556D9 !important;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
  <a href="/user/dashboard"><h5 class="offcanvas-title krona-one-regular text-light text-center" id="offcanvasExampleLabel">Pre-Doc</h5></a>  
    <button type="button" style="background-color: aliceblue;" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex align-items-center justify-content-center">
  <div class="d-flex flex-column align-items-center justify-content-center text-center">
  <a href="/user/doctors" class="nav-link">حجز دكتور</a>
      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
      <a href="/user/active/{{Auth::id()}}" class="nav-link">قائمة الحجوزات النشطة</a>
      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
      <a href="/user/history/{{Auth::id()}}" class="nav-link">سجل الحجوزات</a>
      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
    </div>
  </div>
  <div class="d-flex flex-column align-items-center justify-content-end text-center">
  <a href="/user/editprofile" class="nav-link">تعديل حسابي</a>
      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item text-light" type="submit">تسجيل خروج</button>
                        </form>

      <hr style="width: 275px;color: white;border: 1.5px #ffffff solid;">
    </div>
  </div>
</div>