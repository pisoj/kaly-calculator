<!DOCTYPE html>
   <html>
     <body>
       <div>
         <center><p style="font-family: Arial; font-size: 128px; font-style: bold;"><?php
           if ($_GET["z"] == 1 and is_numeric($_GET["a"]) == 1 and is_numeric($_GET["b"]) == 1) {
             $result = $_GET["a"] + $_GET["b"];
             $operation = " + ";
           }
           if ($_GET["z"] == 2 and is_numeric($_GET["a"]) == 1 and is_numeric($_GET["b"]) == 1) {
             $result = $_GET["a"] - $_GET["b"];
             $operation = " - ";
           }
           if ($_GET["z"] == 3 and is_numeric($_GET["a"]) == 1 and is_numeric($_GET["b"]) == 1) {
             $result = $_GET["a"] * $_GET["b"];
             $operation = " × ";
           }
           if ($_GET["z"] == 4 and is_numeric($_GET["a"]) == 1 and is_numeric($_GET["b"]) == 1) {
             $result = $_GET["a"] / $_GET["b"];
             $operation = " ÷ ";
           }
           if ($_GET["z"] == 5 and is_numeric($_GET["a"]) == 1 and is_numeric($_GET["b"]) == 1) {
             $result = $_GET["a"] ** $_GET["b"];
           }
           
               // print result
           if ($_GET["z"] > 0 and $_GET["z"] != 5 and is_numeric($_GET["a"]) == 1 and is_numeric($_GET["b"]) == 1) {
             echo $_GET["a"], $operation, $_GET["b"], " = ", $result;
           }
           if ($_GET["z"] == 5 and is_numeric($_GET["a"]) == 1 and is_numeric($_GET["b"]) == 1) {
             echo $_GET["a"], "<sup>", $_GET["b"], "</sup>", " = ", $result;
           }
               // is numeric
           if (is_numeric($_GET["a"]) != 1 or is_numeric($_GET["b"]) != 1) {
             echo "Write a number!";
           }
         ?></p></center>
       </div>
     </body>
</html>
