var $window = $(window);
var $year = $('#js-year');
var $month = $('#js-month');
var $tbody = $('#js-calendar-body');
var $thead = $('#js-calendar-thead');
var $form_date= $('#schedule-form #date');
var $label_date= $('label[for="date"]');

var table_schedule_tr= '#schedule_table tbody tr';

var today = new Date();
var currentYear = today.getFullYear(),
    currentMonth = today.getMonth(),
    currentDate = today.getDate();

$window.on('load',function(){
  calendarHeading(currentYear, currentMonth);
  calendarThead();
  calendarBody(currentYear, currentMonth, today);
  form_date_init(currentYear,currentMonth + 1,currentDate);
  datePicker();
});

function calendarBody(year, month, today){
  var todayYMFlag = today.getFullYear() === year && today.getMonth() === month ? true : false; // 本日の年と月が表示されるカレンダーと同じか判定
  var startDate = new Date(year, month, 1); // その月の最初の日の情報
  var endDate  = new Date(year, month + 1 , 0); // その月の最後の日の情報
  var startDay = startDate.getDay();// その月の最初の日の曜日を取得
  var endDay = endDate.getDate();// その月の最後の日の曜日を取得
  var textSkip = true; // 日にちを埋める用のフラグ
  var textDate = 1; // 日付(これがカウントアップされます)
  var tableBody =''; // テーブルのHTMLを格納する変数
  
  for (var row = 0; row < 6; row++){
    var tr = '<tr>';
    
    for (var col = 0; col < 7; col++) {
      if (row === 0 && startDay === col){
        textSkip = false;
      }
      if (textDate > endDay) {
        textSkip = true;
      }
      var addClass = todayYMFlag && textDate === today.getDate() ? 'is-today day' : 'day';
      var textTd = textSkip ? '&nbsp;' : textDate++;
      var td_day = '<td class="'+addClass+'"><span class="dayS">'+textTd+'</span></td>';
      var td_null = '<td>&nbsp;</td>';
      var td =  textSkip ? td_null : td_day;
      tr += td;
    }
    tr += '</tr>';
    tableBody += tr;
  }
  $tbody.html(tableBody);
}

function calendarHeading(year, month){
  $year.text(year);
  $month.text(month + 1);
}

function calendarThead(){
  $thead.html('<tr><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th></tr>');

}

function datePicker(){
  var $dayS = $('.dayS');
  $dayS.on("click", function() {
    form_date_init($year.text(),$month.text(),$(this).text());
  })
}

function form_date_init(y,m,d){
  var date = date_val(y,m,d);
  $form_date.val(date);
  $label_date.addClass('active');
}

function date_val(y,m,d){
  return y+'-'+m+'-'+d;
}

function schedule_display(date){
  $(table_schedule_tr).css('display', 'none');
  var tag=table_schedule_tr+'.date_'+date;
  $(tag).css('display', 'block');
}