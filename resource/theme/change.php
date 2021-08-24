<?php
    if ($_POST["theme"] == dark) {
        setcookie("theme", "dark", "/");
        header("Refresh:0");
    }
    if ($_POST["theme"] == light) {
        setcookie("theme", "light", "/");
        header("Refresh:0");
    }
?>