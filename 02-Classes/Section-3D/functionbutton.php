<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
        How to call PHP function 
        on the click of a Button ? 
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
          
    <h3> 
       CALL PHP function on the click of a Button
    </h3> 
      
    <?php
        if(isset($_POST['button1'])) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            echo "This is Button1 that is selected"; 
        } 
        function button2() { 
            echo "This is Button2 that is selected"; 
        } 
    ?> 
  
    <form method="post"> 
    <br><br>
        <input type="submit" name="button1"
                 value="Button1" /> 
          
        <input type="submit" name="button2"
                 value="Button2" /> 
    </form> 
</head> 
  
</html> 