<header>
  <h1>{{ Auth::user()->shisetuName}}　連絡アプリ</h1>
  <p>{{ Auth::user()->name}}さん、お疲れ様です！</p>
  <div class="snow">●</div>
  <nav>
    <ul>
      <li class="navi"><a href="index">連絡一覧</a></li>
      <li class="navi"><a href="input">新規作成</a></li>
      <li class="navi"><a href="schedule">スケジュール</a></li>
      <li class="navi"><a href="ichiran">ユーザー一覧</a></li>
      <li class="navi"><a href="/logout">ログアウト</a></li>
    </ul>
  </nav>
</header>

<navBottom>
  <ul>
    <li class="navi"><a href="index">連絡一覧</a></li>
    <li class="navi"><a href="input">新規作成</a></li>
    <li class="navi"><a href="schedule">スケジュール</a></li>
    <li class="navi"><a href=””>ユーザー一覧</a></li>
    <li class="navi"><a href=””>ログアウト</a></li>
  </ul>
</navBottom>