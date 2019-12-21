@extends('layouts.app')
@section('content')
  <style>
   #tmpBtn{ max-height:160px; overflow-y: scroll;}
  </style>
</head>
<body>
@include('menu')
<!--Main layout-->
<main id="test">
  <div class="container">
    <!--Section: Modals-->
    <section>
      <h2 class="h1-responsive font-weight-bold text-center">新規連絡作成画面</h2>
      <div class="border border-light px-3 mt-2 mb-4">
        <form id="message-form" name="message-form" action="{{ url('messages') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="md-form mb-0">
              <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea"></textarea>
              <label for="content">一言</label>
            </div>
            <input type="hidden" name="user_id" value="">
          </div>
          <!-- Sign in button -->
          <button class="btn btn-info btn-block my-4" name="send" type="submit">Send</button>
        </form>
      </div>
      <div class="border border-light px-3 mt-2 mb-4">
        <div class="md-form">
          <div class="form-group d-flex flex-start">
            <div class="md-form flex-grow-1 m-1">
              <input type="text" id="contentT" name="contentT" class="form-control md-textarea">
              <label for="contentT">定型文を登録</label>
            </div>
            <div class="btn-group m-1">
              <form id="message-form2" name="message-form2" action="{{ url('templates') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" id="template" name="template" value="">
                <button class="btn btn-info btn-block h-100 p-3 m-0" id=templateSend>登録</button>
              </form> 
            </div> 
          </div>
          <div id="tmpBtn" class="border border-light rounded d-flex flex-column p-2">
            @foreach ($templates as $template)
            <div class="btn-group mb-2">
              <button type="button" class="btn-tmp btn btn-outline-mdb-color waves-effect px-2 py-3">{{ $template->template }}</button>
              <form action="{{ url('input/'.$template->id) }}" method="POST" class="h-100">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger h-100 p-3 m-2"> 削除</button>
              </form>
            </div>
            @endforeach
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

<!-- JQuery Mobile-->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.0.3.min.js"></script> -->
<!-- <script type="text/javascript" src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>

<script>
$("#templateSend").on("click",function(){
  let text = $("#contentT").val();
  console.log(text);
  $("#template").val(text);
  $("#message-form2").submit();
})

$(document).ready(function() {
  $('label[for="contentT"]').addClass('active');
  $("#contentT").val("おはようございます");
  $('#tmpBtn button.btn-tmp').click(function(){
    $('#content').append($(this).text());
  });
});


// $(function(){
//   $('#test').on( 'swipe', mySwipeHandler );
//   function mySwipeHandler( evt ){
//     location.href = "{{ url('index') }}";
//   }
// });

</script>
<!--Main javascript END-->
</body>
@endsection
