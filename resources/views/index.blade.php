
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>連絡帳アプリ</title><!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"> 
  <link href="css/trend.css" rel="stylesheet" type="text/css" />
</head>
<body>



<!-- <ul>
  <li><a href="{{ url('index') }}">Top</a></li>
  <li><a href="{{ url('input') }}">Input</a></li>
  <li><a href="{{ url('schedule') }}">Schedule</a></li>
  <li><a href="{{ url('contact') }}">Contact</a></li>
</ul> -->

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
      <h2 class="h1-responsive font-weight-bold text-center">二言一覧</h2>
      <div class="border border-light px-5 py-2 mt-2 mb-4">
      <table class="table table-striped task-table">

                    <!-- テーブル本体 -->
                        @foreach ($messages as $message)
                            <tr>
                                <!-- 本タイトル -->
                               
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
                    </tbody>
                </table>

<!-- 
        <div class="card card-comments my-4 wow fadeIn">
          <div class="card-header font-weight-bold">
            <h5 class="mt-0 font-weight-bold">Miley Steward
              <a href="" class="pull-right">
                <i class="fas fa-check-square"></i>
              </a>
            </h5>
          </div>
          <div class="card-body">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>

        <div class="card card-comments my-4 wow fadeIn">
          <div class="card-header font-weight-bold">
            <h5 class="mt-0 font-weight-bold">Tommy Smith
              <a href="" class="pull-right">
                <i class="far fa-check-square"></i>
              </a>
            </h5>
          </div>
          <div class="card-body">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque
            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
            sunt explicabo.
          </div>
        </div>

        <div class="card card-comments my-4 wow fadeIn">
          <div class="card-header font-weight-bold">
            <h5 class="mt-0 font-weight-bold">Sylvester the Cat
              <a href="" class="pull-right">
                <i class="far fa-check-square"></i>
              </a>
            </h5>
          </div>
          <div class="card-body">
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi
            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
          </div>
        </div>

        <div class="card card-comments my-4 wow fadeIn">
          <div class="card-header font-weight-bold">
            <h5 class="mt-0 font-weight-bold">Sylvester the Cat
                <a href="" class="pull-right">
                  <i class="far fa-check-square"></i>
                </a>
            </h5>
          </div>
          <div class="card-body">
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi
            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
          </div>
        </div>

        <div class="card card-comments my-4 wow fadeIn">
          <div class="card-header font-weight-bold">
            <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                <a href="" class="pull-right">
                  <i class="far fa-check-square"></i>
                </a>
            </h5>
          </div>
          <div class="card-body">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
            deleniti atque corrupti
            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
            similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
            fuga.
          </div>
        </div>

      </div> -->
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
</body>
</html>