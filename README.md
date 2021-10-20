# Chaboksms Laravel


<div dir='rtl'>

### معرفی وب سرویس چابک اس ام اس
چابک اس ام اس یک وب سرویس کامل برای ارسال و دریافت پیامک و پیامک صوتی و مدیریت کامل خدمات دیگر است که براحتی میتوانید از آن استفاده کنید.

<hr>

### نصب

<p>قبل از نصب نیاز به ثبت نام در سایت چابک اس ام اس دارید.</p>

[**ثبت نام به همراه دریافت 200 پیامک هدیه جهت تست وبسرویس**](https://chaboksms.ir/)

<p>پس ازثبت نام  برای نصب از راههای زیر میتوانید اقدام کنید.</p>



</div>


```php
composer require chaboksms/laravel:1.0.5
```


<div dir='rtl'>

یا از طریق اضافه کردن خط زیر به فایل 
composer.json



</div>


```json
"chaboksms/laravel": "1.0.5"
```


<div dir='rtl'>


و سپس اجرای دستور 



</div>

    composer update



<div dir='rtl'>

#### نصب در لاراول

از لاراول ۵.۵ نیازی به انجام مراحل زیر نیست.

در قدم اول  ‍`Chaboksms\Laravel\ServiceProvider` را به لیست  `providers` ها در فایل `config\app.php` اضافه کنید. 

</div>

```php
'providers' => [
  ...
  Chaboksms\Laravel\ServiceProvider::class,
],

```
<div dir='rtl'>

سپس `facade` زیر را به لیست `aliases` ا‍ضافه کنید.

</div>

```php
'aliases' => [
  ...
  Chaboksms\Laravel\Facade::class,
],
```

<div dir='rtl'>

در نهایت فایل کانفیگ را پابلیش نمایید.
</div>

```
php artisan vendor:publish --tag="chaboksms"
```

<div dir='rtl'>

سپس  فایل کانفیگ `config/chaboksms.php` را با یوزرنیم و پسورد اکانت چابک اس ام اس ویرایش نمایید.
</div>

	
<div dir='rtl'>

	
	
#### نحوه استفاده
نمونه کد برای ارسال پیامک



</div>



```php
use Chaboksms;
try{

    $sms = Chaboksms::sms();
    $to = '09123456789';
    $from = '5000...';
    $text = 'تست وب سرویس چابک اس ام اس';
    $response = $sms->send($to,$from,$text);
    $json = json_decode($response);
    echo $json->Value; //RecId or Error Number 
}catch(Exception $e){
    echo $e->getMessage();
}
```


<div dir='rtl'>

از آنجا که وب سرویس چابک اس ام اس تنها محدود به ارسال پیامک نیست  شما از طریق  زیر میتوانید به وب سرویس ها دسترسی کامل داشته باشید:


</div>

```php
// وب سرویس پیامک
$smsRest = Chaboksms::sms();
$smsSoap = Chaboksms::sms('soap');
// وب سرویس تیکت پشتیبانی
$ticket = Chaboksms::ticket();
// وب سرویس برای مدیریت کامل  ارسال انبوه پیامک
$branch = Chaboksms::branch();
//وب سرویس کاربران
$users = Chaboksms::users();
//وب سرویس دفترچه تلفن
$contacts = Chaboksms::contacts()

```


<div dir='rtl'>


### دریافت لیست کامل متد ها

برای دریافت لیست کامل متد ها به آدرس زیر مراجعه کنید


[Chaboksms/Chaboksms-php](https://github.com/Chaboksms/Chaboksms-php)


###  اطلاعات بیشتر
برای مطالعه بیشتر به صفحه معرفی [وب سرویس چابک اس ام اس](https://github.com/Chaboksms/Webservices) مراجعه نمایید .


</div>
