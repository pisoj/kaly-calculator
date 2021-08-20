<?php
    if ($_POST["theme"] == dark) {
        $_SESSION["theme"] = "dark";
    }
    if ($_POST["theme"] == light) {
        $_SESSION["theme"] = "light";
    }
?>