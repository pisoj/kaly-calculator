<!DOCTYPE html>
   <html>
     <body>
       <div>
         <center>
           <p class="result">
            <?php
            if ($_GET["z"] == 1) {
              $result = $_GET["a"] + $_GET["b"];
              $operation = " + ";
            }
             if ($_GET["z"] == 2) {
              $result = $_GET["a"] - $_GET["b"];
               $operation = " - ";
            }
             if ($_GET["z"] == 3) {
              $result = $_GET["a"] * $_GET["b"];
              $operation = " × ";
            }
             if ($_GET["z"] == 4) {
               $result = $_GET["a"] / $_GET["b"];
              $operation = " ÷ ";
             }
            if ($_GET["z"] == 5) {
               $result = $_GET["a"] ** $_GET["b"];
            }
           
                 // print result
             if ($_GET["z"] > 0 and $_GET["z"] != 5) {
               echo $_GET["a"], $operation, $_GET["b"], " = ", $result;
            }
             if ($_GET["z"] == 5) {
              echo $_GET["a"], "<sup>", $_GET["b"], "</sup>", " = ", $result;
             }
          ?>
          </p>
         </center>
       </div>
     </body>
</html>
