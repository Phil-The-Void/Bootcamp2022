<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
    <!-- PHP -->
    <h2>PHP</h2>
        <form method="POST" action="addition.php">
            <input type="text" name="num1" pattern="^[0-9\.]*$" placeholder="Gib eine Zahl ein">
            <input type="text" name="num2" pattern="^[0-9\.]*$" placeholder="Gib eine Zahl ein">
            <button type="submit" name="">Berechnen</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["num1"];
                echo $a . " + ";
            $b = $_POST["num2"];
                echo $b . " = ";
            $c = $a + $b;
            echo $c;
        }
        ?>
        <!--<form method="" action="">
            <input type="text" id="jsa" name="" pattern="^[0-9\.]*$" placeholder="Gib eine Zahl ein">
            <input type="text" id="jsb" name="" pattern="^[0-9\.]*$" placeholder="Gib eine Zahl ein">
            <button type="button" name="" onclick="addieren()">Berechnen</button>
        </form>-->

        <!-- Javascript -->
        <script type="application/javascript">
            document.write("<h2>Javascript</h2><br>");
            document.write("Ergebnis = ");
            let stulle = Number(prompt("Gib eine Zahl ein", "Nur Zahl"));
            let brot = Number(prompt("Gib eine zweite Zahl ein", "Nur Zahl"));
            function addieren(number1, number2) {
                
                let ergebnis = number1 + number2;
                document.write(ergebnis);
            }
            addieren(stulle, brot);
        </script>
    </body>
</html>