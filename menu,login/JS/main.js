// リセット
$("#clear").on("click", function() {
$("#memo").val("");
$("h4").fadeOut();
});

// 定型文入力
$("#1").on("click",function(){
  $("#memo").val($("#memo").val() + "お疲れ様です。");
});
$(document).on("click","#2",function(){
  // $("#text").append("ありがとうございます");
  $("#memo").val($("#memo").val() + "ありがとうございます。");
});
$(document).on("click","#3",function(){
  // $("#text").append("よろしくお願いします");
  $("#memo").val($("#memo").val() + "よろしくお願いします。");
});
$(document).on("click","#4",function(){
  // $("#text").append("よろしくお願いします");
  $("#memo").val($("#memo").val() + "わからない事あれば聞いて下さい。");
});
