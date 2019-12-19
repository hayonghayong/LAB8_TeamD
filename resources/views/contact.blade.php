@extends('layouts.app')
@section('content')
<!--Main layout-->
<main>
  <div class="container">
    <!--Section: Contact v.2-->
    <section>
      <h2 class="h1-responsive font-weight-bold text-center">問い合わせ</h2>

      <div class="border border-light px-5 py-2 mt-2 mb-4">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
          <div class="form-group">
            <div class="md-form mb-0">
              <input type="text" id="subject" name="subject" class="form-control">
              <label for="subject" class="">題名</label>
            </div>
            <div class="md-form">
              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
              <label for="message">お問い合わせ内容</label>
            </div>
            <input type="hidden" name="user_id" value="">
          </div>
          <!-- Sign in button -->
          <button class="btn btn-info btn-block my-4" type="submit">送信</button>
        </form>
      </div>
    </section>
    <!--Section: Contact v.2-->
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
@endsection