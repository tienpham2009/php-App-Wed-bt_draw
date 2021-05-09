<form method="post">
    Nhap so canh : <input type="text" name="number">
    <br/>
    Chon hinh : <select name="draw">
        <option value="rectangle">Rectangle</option>
        <option value="triangleBL">Triangle Bottom-Left</option>
        <option value="triangleTL">Triangle Top-Left</option>
    </select>
    <br>
    <input type="submit" value="Draw">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $draw = $_POST["draw"];


    function rectangle()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $number = $_POST["number"];
            {
                for ($rol = 0; $rol < $number; $rol++) {
                    for ($col = 0; $col < $number; $col++) {
                        echo "*&nbsp&nbsp";
                    }
                    echo '<br/>';
                }
            }
        }
    }

    function triangleBL()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $number = $_POST["number"];
            for ($i = 0; $i < ($number + 1); $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo "*&nbsp&nbsp";
                }
                echo '<br/>';
            }
        }
    }

    function triangleTL()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $number = $_POST["number"];
            for ($i = $number; $i >= 0; $i--) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "*&nbsp&nbsp";
                }
                echo '<br/>';
            }
        }
    }

    switch ($draw) {
        case "rectangle" :
            rectangle();
            break;
        case "triangleBL" :
            triangleBL();
            break;
        case  "triangleTL" :
            triangleTL();
            break;
    }

}



