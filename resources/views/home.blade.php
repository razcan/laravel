<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script>

var colors = ['red', 'blue', 'green', 'grey', 
                 'black', 'white', 'teal', 'yellow']; 
    var i = 0; 

// $(document).keyup(function(event){
//     // Get value on button click and show alert
//     $("#myBtn").click(function(){
//         var str1 = $("#myInput1").val();
//         var str2 = $("#myInput2").val();
       
//         var str3 = str1*str2;
//         $("input:text").val(str3);
//        // alert(str3);
       
        
//     });

  $(document).keyup(function(event) {   
  $('body').css('background-color', colors[i]); 
  i++; 
  i = i % 9; 

});
</script> -->

<!-- $("#input2,#input1").keyup(function () {

$('#output').val($('#input1').val() * $('#input2').val());

}); -->
<script>
$('#qty, #price').on('input',function() {
    var qty = parseInt($('#qty').val());
    var price = parseFloat($('#price').val());
    $('#total').val((qty * price ? qty * price : 0).toFixed(2));
});
</script>

</head>
<body>

<tr>
   <td><input type='text' name='qty' id='qty' value='' />
   <td><input type='text' name='price' id='price' value='' />
   <td><input type='text' name='total' id='total' value='' />
</tr>


<!-- <input type="text" id="myInput1">
<input type="text" id="myInput2">
<input type="text" id="myInput3">
<button type="button" id="myBtn">Show Value</button> -->

</body>
</html>
