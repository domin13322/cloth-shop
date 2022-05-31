<?php
  
?>
<!doctype html>
    <html lang="pl">
    <head>
        <?php
            require "head.php";
        ?>
        <script src="js/sliderScript.js" defer></script>
    </head>
    <body onload="changeSlide();">
       <?php
            require "logoAndMenu.php";
            echo "<br>";
            require "loginForm.php";
            require "registerForm.php";
            require "slider.php";
            
            require "footer.php";
       ?>
    </body>
</html>