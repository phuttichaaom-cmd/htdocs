<html>
    Hello
    <?php
        echo "<br>Helllo world";
        echo "<br>" . __DIR__;

        $t = date("H");
        echo "<br> . $t."<br>";

        if ($t < "18") {
          echo "Have a good day!";
        } else {
          echo "Have a good night!";
        }
    ?>
</html>