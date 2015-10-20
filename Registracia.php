<html>
 <head>
  <meta charset="utf-8">
  <title>Тег INPUT</title>
 </head>
<body>
    
<form action="Registracia.php" method="post">
    
  <table border="1" align="center">
      <tr align="center"> <td ><h1>Registretion</h1></td></tr>

   <tr>
       <th>Name:<input name="Name" type="text" size="15">
           Surname:<input name="Surname" type="text" size="15">
       </th> 
    </tr>
     <tr>
     <th>
         E-mail:<input name="E-mail" type="text" size="45"></th>
       </tr>  
      <tr>
      <th>floor:<input type="radio" name="floor" value="M">M
  <input type="radio" name="answer" value="F">F</th></tr>
    <tr>
    <tr > <td ><h3>Birthday</h3></td></tr>
     <th>
      day:<input name="day" type="text" size="15">
      Mounth:<input name=" Mounth" type="text" size="15">
      Year:<input name=" Year" type="text" size="15">
     </th> 
    </tr>
   
     <th>
      Password:<input name="Password" type="password" size="15">
      Repeat password:<input name="second" type="password" size="15">
      </th> 
    
    </tr>
    <tr>
    <th><input type="checkbox" name="option1" value="a1" checked>Do you have a PC ?</th>
    </tr>
    <tr>
       <th><h3>What browser are you using ?</h3>
    <select name="select">
  <option>Opera 9x</option>
  <option>Google hrom</option>
</select>
      </th>  
    </tr>
     <tr><th><h2>Additional Information</h2>
    <textarea rows="10" cols="45" name="text"></textarea></th></tr>
    <tr><th><input type="submit" name="button1"> <input type="reset" name="button2"></th></tr>
    
   <?php
    $name = htmlspecialchars($_POST["Name"]);
    $Surname =htmlspecialchars($_POST["Surname"]);
    $E_mail =htmlspecialchars($_POST["E-mail"]);
    $floor =htmlspecialchars($_POST["floor"]);
    $day =htmlspecialchars($_POST["day"]);
    $Mounth =htmlspecialchars($_POST["Mounth"]);
    $Year =htmlspecialchars($_POST["Year"]);
    $Password =htmlspecialchars($_POST["Password"]);
    $select =htmlspecialchars($_POST["select"]);
    $text =htmlspecialchars($_POST["text"]);

    echo "Name:".$name."<br>" ;
    echo "Surname:".$Surname."<br>" ;
    echo "E-mail:".$E_mail."<br>";
    echo "floor:".$_POST["floor"]."<br>";
    echo "Birthday:"."day".$day."Mounth".$Mounth."Year".$Year."<br>";
    
    echo "Password:".$_POST["Password"]."<br>";

    echo "Additional Information:".$text."<br>" ;

    
?>
  </table>
</form> 