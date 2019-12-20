@extends('layouts.app')
@section('content')
  <!-- newsticker CSS-->
  <link href="css/trend.css" rel="stylesheet" type="text/css" />
  <!-- newsticker CSS END-->
</head>
<body>
@include('menu')
<!--Main layout-->
<main>
  <div class="container">
    <!--Section: Modals-->
    <section>
      <div id="news_wrapper" class="mt-2 mb-4 px-1 py-2">
        <div id="ranklet-ID">
          <aside class="ranklet ranklet-reset">
            <div class="ranklet-wrapper">
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Aenean leo ligula, consequat vitae, eleifend ac, enim.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="#" class="ranklet-link">
                  <p class="ranklet-title">Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                <!-- /.ranklet-link --></a>
              </div>
            </div>
          </aside>
        </div>        
      </div>
    </section>
    <!--Section: Modals-->
    <section>
      <h2 class="h1-responsive font-weight-bold text-center">一言一覧</h2>
      <div class="border border-light px-5 py-2 mt-2 mb-4">
        @foreach ($messages as $message)
        <div class="card card-comments my-4 wow fadeIn">
          <div class="card-header font-weight-bold">
            <h5 class="mt-0 font-weight-bold">{{ $message->content }}
              <a href="" class="pull-right">
                <i class="fas fa-check-square"></i>
              </a>
            </h5>
          </div>
          <div class="card-body">
          {{ $message->content }}
          </div>
        </div>
        @endforeach
      </div>
    </section>
  </div>
</main>
<!--Main layout-->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
<!--Main javascript END-->

<!-- newsticker JavaScript -->
<script src="js/getTrend.js"></script>
<!-- newsticker JavaScript END-->
</body>
@endsection