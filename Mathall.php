<html>
 <head>
  <meta charset="utf-8">
  <title>Work witch PHP and integreit JS</title>
 </head>
<body>
    
<form action="Mathall.php" method="post">
    
  <table border="1" align="center">
   <tr align="center"> <td ><h1>CALCULATOR</h1></td></tr>
   <tr align="center"> <td >Write two nummbers</td></tr>
   <tr><th>1:<input name="first" type="text" size="15">
           2:<input name="second" type="text" size="15"></th></tr>
    <tr>
    <th>
        <input type="submit" name="submit" value="+"/>
        <input type="submit" name="submit" value="-"/>
        <input type="submit" name="submit" value="*"/>
        <input type="submit" name="submit" value="/"/>
    </th>
    </tr>
    <tr><th>Answer:<input type="text" name="Answert" id="send1" size="15"></th></tr>
  </table>
</form> 
    
<?php
    $firstnumber = htmlspecialchars($_POST["first"]);
    $secondnumber =htmlspecialchars($_POST["second"]);
    $action=$_POST['submit'];
    switch($action){
    case '+':$fold=($firstnumber+$secondnumber); break;
    case '-':$Subtract=($firstnumber-$secondnumber); break;
    case '*':$Multiply=($firstnumber*$secondnumber);break;
    case '/':$Split=($firstnumber/$secondnumber); break;}

    
$n1=$fold;
$n2=$Subtract;
$n3=$Multiply;
$n4=$Split;


?>
<script>
    var fold = "<? echo $n1 ?>";
    var Subtract = "<? echo $n2 ?>";
    var Multiply = "<? echo $n3 ?>";
    var Split = "<? echo $n4 ?>";
    input = document.getElementById('send1'); 
    send1.value = fold;
    send1.value = Subtract;
    send1.value = Multiply;
    send1.value = Split;
</script>
    

    
    
    
  
  </body>     
</html>
