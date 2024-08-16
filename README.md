<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Pre-Doc

Pre-Doc هو موقع ويب مخصص لإدارة المواعيد مع الأطباء. يتيح هذا الموقع للمستخدمين حجز مواعيد مع الأطباء المعتمدين، بينما يمكن للأطباء إدارة مواعيدهم والرد على الحجوزات. يحتوي الموقع على ثلاث لوحات تحكم مخصصة للمستخدمين، الأطباء، والإداريين.

## المميزات

- **واجهة مستخدم متجاوبة**: تصميم الموقع متوافق مع جميع الشاشات والأجهزة.
- **أنظمة متعددة للوحات التحكم**:
  - **لوحة تحكم المستخدم العادي**: لإدارة المواعيد وحجزها.
  - **لوحة تحكم الطبيب**: لمراجعة وإدارة الحجوزات والموافقة عليها أو رفضها.
  - **لوحة تحكم المشرف**: لإضافة مستخدمين، عرض جميع المستخدمين، إضافة أطباء، عرض جميع الأطباء، إضافة مشرفين، عرض جميع المشرفين، والاطلاع على أحدث الحجوزات.

## التقنيات المستخدمة

- **الواجهة الأمامية**:
  - HTML
  - CSS
  - Bootstrap

- **الواجهة الخلفية**:
  - PHP
  - Laravel
  - MySQL

## كيفية التثبيت

1. **استنساخ المستودع**:

    ```bash
    git clone https://github.com/username/repository-name.git
    cd repository-name
    ```

2. **تثبيت التبعيات**:

    ```bash
    composer install
    npm install
    ```

3. **إعداد البيئة**:

    نسخ ملف `.env.example` إلى `.env` وتحديث إعدادات قاعدة البيانات:

    ```bash
    cp .env.example .env
    ```

    ثم تعديل ملف `.env` ليتناسب مع إعدادات قاعدة البيانات الخاصة بك.

4. **إنشاء قاعدة البيانات وتشغيل الهجرات**:

    ```bash
    php artisan migrate
    ```

5. **تشغيل الخادم المحلي**:

    ```bash
    php artisan serve
    ```

    بعد ذلك، يمكنك زيارة الموقع عبر المتصفح على العنوان الذي سيظهر لك في ال CMD.

## كيفية الاستخدام

- **تسجيل الدخول كمستخدم**: قم بتسجيل الدخول عبر واجهة المستخدم واستخدم لوحة التحكم لحجز المواعيد.
- **تسجيل الدخول كطبيب**: قم بإدارة الحجوزات من خلال لوحة التحكم الخاصة بك.
- **تسجيل الدخول كمسؤول**: يمكنك إدارة جميع جوانب الموقع من لوحة التحكم الخاصة بالمشرف.

## الأمان

تم تأمين الموقع ضد معظم الثغرات الأمنية الشائعة لضمان حماية بيانات المستخدمين والأطباء.


## التواصل

لأي استفسارات أو دعم، يمكنك التواصل عبر البريد الإلكتروني: medo.mohsen.saad@gmail.com

