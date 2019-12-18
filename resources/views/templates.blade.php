<!DOCTYPE html>
<html lang="ja">
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
</head>
<body>
<!-- メニュー表示 -->
@include('menu')

<!--Main layout-->
<main>
  <div class="container">
    <!--Section: Modals-->
    <section>
      <h2 class="h1-responsive font-weight-bold text-center">新規連絡作成画面</h2>
      <div class="border border-light px-5 py-2 mt-2 mb-4">

        <form id="message-form" name="message-form" action="{{ url('messages') }}" method="POST">
        {{ csrf_field() }}
          <div class="form-group">
            <div class="md-form mb-0">
              <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea"></textarea>
              <label for="content">一言</label>
            </div>
            <div class="md-form mt-0">
              <div class="border border-light rounded d-flex flex-wrap  justify-content-center mt-3 px-2 py-3">
                  <button type="button" class="btn btn-outline-mdb-color waves-effect">quote1</button>
                  <button type="button" class="btn btn-outline-mdb-color waves-effect">quote2</button>
                  <button type="button" class="btn btn-outline-mdb-color waves-effect">quote3</button>
                  <button type="button" class="btn btn-outline-mdb-color waves-effect">quote4</button>
              </div>
            </div>
            <input type="hidden" name="user_id" value="">
          </div>
          <!-- Sign in button -->
          <button class="btn btn-info btn-block my-4" type="submit">Send</button>
        </form>


        <form id="message-form2" name="message-form2" action="{{ url('templates') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" id="template" name="template" value="test">
        <button class="btn btn-info btn-block my-4" type="submit">定型文を送る</button>
        </form>

        
      </div>
    </section>
    <!--Section: Modals--> 

    <div class="md-form mt-0">
              <div class="border border-light rounded d-flex flex-wrap  justify-content-center mt-3 px-2 py-3">
              @foreach ($templates as $template)
                  <button type="button" class="btn btn-outline-mdb-color waves-effect">{{ $template->content }}</button>
                  @endforeach
              </div>
            </div>


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

</body>
</html>