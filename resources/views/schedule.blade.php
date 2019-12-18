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
      <div class="d-flex justify-content-around align-items-start">
        <div class="card card-comments m-3 wow text-center">
          <div class="card-header font-weight-bold">
            <h5 class="calendar-title"><span id="js-year"></span>年 <span id="js-month"></span>月</h5>
            <table class="calendar-table">
              <thead>
                <tr><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th></tr>
              </thead>
              <tbody id="js-calendar-body"><tr><td class="">1</td><td class="">2</td><td class="">3</td><td class="">4</td><td class="">5</td><td class="">6</td><td class="">7</td></tr><tr><td class="">8</td><td class="">9</td><td class="">10</td><td class="">11</td><td class="">12</td><td class="">13</td><td class="">14</td></tr><tr><td class="">15</td><td class="is-today">16</td><td class="">17</td><td class="">18</td><td class="">19</td><td class="">20</td><td class="">21</td></tr><tr><td class="">22</td><td class="">23</td><td class="">24</td><td class="">25</td><td class="">26</td><td class="">27</td><td class="">28</td></tr><tr><td class="">29</td><td class="">30</td><td class="">31</td><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td></tr><tr><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td></tr></tbody>
            </table>
          </div>
          <div class="card-body">
            <form id="schedule-form" name="schedule-form" action="schedule.php" method="POST">
              <div class="form-group">
                <div class="md-form mb-0">
                  <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea"></textarea>
                  <label for="content">一言</label>
                </div>
                <div class="md-form mt-0">
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