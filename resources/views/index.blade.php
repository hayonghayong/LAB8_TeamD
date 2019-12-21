@extends('layouts.app')
@section('content')
  <!-- newsticker CSS-->
  <link href="css/trend.css" rel="stylesheet" type="text/css" />
  <!-- newsticker CSS END-->
</head>
<body>
@include('menu')
<!--Main layout-->
<main id="test">
  <div class="container">
    <!--Section: Modals-->
    <section>
      <div id="news_wrapper" class="mt-2 mb-4 px-1 py-2">
        <div id="ranklet-ID">
          <aside class="ranklet ranklet-reset">
            <div class="ranklet-wrapper">
              <div class="ranklet-item">
                <a href="https://www.sankei.com/life/news/191217/lif1912170043-n1.html" class="ranklet-link">
                  <p class="ranklet-title">診療報酬０・４６％下げ、医療費５００億円削減 閣僚折衝で合意</p>
                  </a>
              </div>
              <div class="ranklet-item">
                <a href="https://news.yahoo.co.jp/byline/atsushiotsuka/20191201-00153220/" class="ranklet-link">
                  <p class="ranklet-title">お医者さんと話が通じない？医療におけるコミュニケーション・エラーの原因と対策 前半</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://www.niikei.jp/26396/" class="ranklet-link">
                  <p class="ranklet-title">新潟県立新発田病院で医療事故。精密検査が実施されず</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://news.yahoo.co.jp/byline/otsushuichi/20191211-00154522/" class="ranklet-link">
                  <p class="ranklet-title">「モルヒネ過剰で女性患者が死亡　大阪の病院が投与ミスか」という報道　医療用麻薬の専門家の立場から</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://mainichi.jp/articles/20191015/k00/00m/040/288000c" class="ranklet-link">
                  <p class="ranklet-title">名大病院が医療ミス認め陳謝　肺がん診断13カ月放置、50代女性死亡</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://www.jiji.com/jc/article?k=2019102301165&g=soc" class="ranklet-link">
                  <p class="ranklet-title">市立病院で医療ミス＝患者女性死亡－名古屋</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://www.ehime-np.co.jp/article/news201912140315" class="ranklet-link">
                  <p class="ranklet-title">松山で助産師ら研修会 産後ケア、地域連携必要</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://www.55mfmfmf55.com/riskscore/" class="ranklet-link">
                  <p class="ranklet-title">プログラミング で使ったもの 妊婦リスクスコア</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://www.55mfmfmf55.com/image-of-ns/" class="ranklet-link">
                  <p class="ranklet-title">世間 が抱く 看護師 の イメージ</p>
                <!-- /.ranklet-link --></a>
              </div>
              <div class="ranklet-item">
                <a href="https://www.47news.jp/4262540.html" class="ranklet-link">
                  <p class="ranklet-title">医療事故防ぐ基本 再確認　職員考案のかるたで学ぶ　燿光リハビリテーション病院 「気をつけて、思い込みからリスクある」</p>
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
        @foreach ($messages as $message)
        <div class="card card-comments my-4 wow fadeIn">
          <div class="card-header font-weight-bold">
            <h5 class="mt-0 font-weight-bold">{{ $message->user_name }}
            @php
            $num = 0;
            @endphp
            @foreach ($kidokus as $kidoku)
            @if($message->id === $kidoku->message_id)
            @php
            $num += 1;
            @endphp
              @endif
              @endforeach
              @if($num >= 1)
              <a href="" class="pull-right">
                <i id = "$kidoku->message_id" class="fas fa-check-square"></i>
              </a>
              @elseif($num == 0)
              <a href="{{ url(('kidoku/'.$message->id)) }}" class="pull-right">
                <i class="far fa-check-square"></i>
              </a>
              @endif

              <a class = "float-right" style="font-size:0.8rem">{{ $message->created_at }}に投稿されました</a>
              <br>
              <a class = "float-right" style="font-size:0.8rem">{{ $num }}人既読</a>
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

<!-- JQuery Mobile-->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.0.3.min.js"></script> -->
<!-- <script type="text/javascript" src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"> -->

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