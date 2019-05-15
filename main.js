
/*
function to get the input value on click of submit button
*/
$("#button").click(function(){
  var input_text = $("#text").val()
  if (input_text !="") {
    /*
      ajax to transfer data
    */
    $.ajax({
      url:'upload.php',
      data:{txt_upload:input_text},
      method:'post',
      dataType:'text',
      success:function(data){
        /*
          to remove the value at input after the data is passed
        */
          $("#text").val('');
      }
    })
  }
})
/*
load the posts
*/
setInterval(function() {
  $("#loader").load('load.php');
}, 1000);
