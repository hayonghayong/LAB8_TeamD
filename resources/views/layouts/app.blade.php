<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- PWA -->
<!--https://developers.google.com/web/fundamentals/design-and-ux/browser-customization/?hl=ja-->
<meta name="theme-color" content="#F8F7F8">
<link rel="manifest" href="manifest.json">
<script>
if('serviceWorker' in navigator){
    navigator.serviceWorker.register('sw.js');
}
</script>
<!-- PWA -->
  <title>連絡帳アプリ</title>
<?php
if (Auth::check())
{
?>
  <!--Main CSS-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"> 
  <!--Main CSS END-->
  <!--Menu CSS-->
  <link rel="stylesheet" href="css/menu.css">
  <!--Menu CSS END-->
  <!-- js-calender CSS -->
  <link href="js-calender/css/calender.css" rel="stylesheet" type="text/css" />
  <!-- js-calender CSS END-->
<?php
}
?>
@yield('content')

</html>

