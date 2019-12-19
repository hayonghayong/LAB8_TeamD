<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>連絡帳アプリ</title>
  <!--Main CSS-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"> 
  <!--Main CSS END-->

  <!-- js-calender CSS -->
  <link href="js-calender/css/calender.css" rel="stylesheet" type="text/css" />
  <!-- js-calender CSS END-->
</head>
<body>
<!-- メニュー表示 -->
@include('menu')

<!--Main layout-->
<main>
  <div class="container">
    <!--Section: Modals-->
    <section>
      <div class="">
        <div class="card card-comments mx-2 my-4 p-0 wow text-center">
          <div class="card-header font-weight-bold p-0">
            <h5 class="calendar-title"><span id="js-year"></span>年&nbsp;<span id="js-month"></span>月</h5>
            <table id="js-calendar-table" class="calendar-table">
              <thead id="js-calendar-thead"></thead>
              <tbody id="js-calendar-body"></tbody>
            </table>
          </div>
          <div class="card-body">
            <form id="schedule-form" name="schedule-form" action="schedule.php" method="POST">
              <div class="form-group">
                <div class="md-form mb-0">
                  <input type="date" id="date" name="date" class="form-control md-text p-0"></input>
                  <label for="date mb-0">日付</label>
                </div>
                <div class="md-form mb-0">
                  <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea pb-0"></textarea>
                  <label for="content">予定</label>
                </div>
                <div class="md-form mb-0">
                  <select class="browser-default custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <input type="hidden" name="user_id" value="">
              </div>
              <!-- Sign in button -->
              <button class="btn btn-info btn-block my-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Modals--> 
  </div>
</main>
<!--Main layout-->

<!--Main javascript-->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
<!--Main javascript END-->

<!-- js-calender JavaScript -->
<script src="js-calender/js/calender.js"></script>
<!-- js-calender JavaScript END-->
</body>
</html>