<?php require_once 'db.php'; ?>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if ($_SESSION['logged_user'] != null) {

    if (isset($_POST['submit'])) {

        $data = $_POST;
        $S1 = 0;
        $S2 = 0;
        $S3 = 0;
        $S4 = 0;

        // стили управления
        if ($_POST['quest_1'] == 'А') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_1'] == 'Б') {
            $S3 = $S3 + 1;
        }
        if ($_POST['quest_1'] == 'В') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_1'] == 'Г') {
            $S4 = $S4 + 1;
        }

        if ($_POST['quest_2'] == 'А') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_2'] == 'Б') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_2'] == 'В') {
            $S3 = $S3 + 1;
        }
        if ($_POST['quest_2'] == 'Г') {
            $S1 = $S1 + 1;
        }

        if ($_POST['quest_3'] == 'А') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_3'] == 'Б') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_3'] == 'В') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_3'] == 'Г') {
            $S3 = $S3 + 1;
        }

        if ($_POST['quest_4'] == 'А') {
            $S3 = $S3 + 1;
        }
        if ($_POST['quest_4'] == 'Б') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_4'] == 'В') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_4'] == 'Г') {
            $S2 = $S2 + 1;
        }

        if ($_POST['quest_5'] == 'А') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_5'] == 'Б') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_5'] == 'В') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_5'] == 'Г') {
            $S3 = $S3 + 1;
        }

        if ($_POST['quest_6'] == 'А') {
            $S3 = $S3 + 1;
        }
        if ($_POST['quest_6'] == 'Б') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_6'] == 'В') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_6'] == 'Г') {
            $S2 = $S2 + 1;
        }

        if ($_POST['quest_7'] == 'А') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_7'] == 'Б') {
            $S3 = $S3 + 1;
        }
        if ($_POST['quest_7'] == 'В') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_7'] == 'Г') {
            $S4 = $S4 + 1;
        }

        if ($_POST['quest_8'] == 'А') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_8'] == 'Б') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_8'] == 'В') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_8'] == 'Г') {
            $S3 = $S3 + 1;
        }

        if ($_POST['quest_9'] == 'А') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_9'] == 'Б') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_9'] == 'В') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_9'] == 'Г') {
            $S3 = $S3 + 1;
        }

        if ($_POST['quest_10'] == 'А') {
            $S3 = $S3 + 1;
        }
        if ($_POST['quest_10'] == 'Б') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_10'] == 'В') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_10'] == 'Г') {
            $S2 = $S2 + 1;
        }

        if ($_POST['quest_11'] == 'А') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_11'] == 'Б') {
            $S3 = $S3 + 1;
        }
        if ($_POST['quest_11'] == 'В') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_11'] == 'Г') {
            $S4 = $S4 + 1;
        }

        if ($_POST['quest_12'] == 'А') {
            $S2 = $S2 + 1;
        }
        if ($_POST['quest_12'] == 'Б') {
            $S4 = $S4 + 1;
        }
        if ($_POST['quest_12'] == 'В') {
            $S1 = $S1 + 1;
        }
        if ($_POST['quest_12'] == 'Г') {
            $S3 = $S3 + 1;
        }

        $A1 = 0;
        $B2 = 0;
        $C3 = 0;
        $G4 = 0;

        // Стилевая адаптация
        if ($_POST['quest_1'] == 'А') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_1'] == 'Б') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_1'] == 'В') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_1'] == 'Г') {
            $A1 = $A1 + 1;
        }

        if ($_POST['quest_2'] == 'А') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_2'] == 'Б') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_2'] == 'В') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_2'] == 'Г') {
            $B2 = $B2 + 1;
        }

        if ($_POST['quest_3'] == 'А') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_3'] == 'Б') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_3'] == 'В') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_3'] == 'Г') {
            $G4 = $G4 + 1;
        }

        if ($_POST['quest_4'] == 'А') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_4'] == 'Б') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_4'] == 'В') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_4'] == 'Г') {
            $B2 = $B2 + 1;
        }

        if ($_POST['quest_5'] == 'А') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_5'] == 'Б') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_5'] == 'В') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_5'] == 'Г') {
            $B2 = $B2 + 1;
        }

        if ($_POST['quest_6'] == 'А') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_6'] == 'Б') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_6'] == 'В') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_6'] == 'Г') {
            $G4 = $G4 + 1;
        }

        if ($_POST['quest_7'] == 'А') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_7'] == 'Б') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_7'] == 'В') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_7'] == 'Г') {
            $C3 = $C3 + 1;
        }

        if ($_POST['quest_8'] == 'А') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_8'] == 'Б') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_8'] == 'В') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_8'] == 'Г') {
            $C3 = $C3 + 1;
        }

        if ($_POST['quest_9'] == 'А') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_9'] == 'Б') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_9'] == 'В') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_9'] == 'Г') {
            $B2 = $B2 + 1;
        }

        if ($_POST['quest_10'] == 'А') {
            $C3 = $C3 + 1;
        }
        if ($_POST['quest_10'] == 'Б') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_10'] == 'В') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_10'] == 'Г') {
            $G4 = $G4 + 1;
        }

        if ($_POST['quest_11'] == 'А') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_11'] == 'Б') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_11'] == 'В') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_11'] == 'Г') {
            $C3 = $C3 + 1;
        }

        if ($_POST['quest_12'] == 'А') {
            $B2 = $B2 + 1;
        }
        if ($_POST['quest_12'] == 'Б') {
            $G4 = $G4 + 1;
        }
        if ($_POST['quest_12'] == 'В') {
            $A1 = $A1 + 1;
        }
        if ($_POST['quest_12'] == 'Г') {
            $C3 = $C3 + 1;
        }

        //sql
        $fio = $_SESSION['logged_user'];
        $time_finish = date("G:i:s");;
        $query = mysqli_query($connection, "UPDATE `teststyle` SET 
                       S1='$S1', 
                       S2='$S2', 
                       S3='$S3', 
                       S4='$S4', 
                       a1='$A1', 
                       b2='$B2', 
                       c3='$C3', 
                       g4='$G4', 
                       time_finish='$time_finish'    
                       WHERE fio = '$fio'");
        echo '<script>location.href=\'finish.php\';</script>';

    }
}
?>

<div class="body_div">

    <form class="test" name="Form" action="form.php" method="post">

        <?php
        if ($_SESSION['logged_user'] != null) {

            if (!$connection) {
                die('соединения нет');
            } else {
                $query = mysqli_query($connection, "SELECT * FROM `teststylequest`");
                $n = 0;
                if ($query->num_rows > 0) {
                    while ($row = $query->fetch_assoc()) {
                        $n = $n + 1;
                        echo '<p><strong>' . $n . '. ' . $row['quest'] . '</strong></p>';
                        echo '<label><input name="quest.' . $n . '" type="radio" value="А"> ' . $row['answer1'] . '</label><br>';
                        echo '<label><input name="quest.' . $n . '" type="radio" value="Б"> ' . $row['answer2'] . '</label><br>';
                        echo '<label><input name="quest.' . $n . '" type="radio" value="В"> ' . $row['answer3'] . '</label><br>';
                        echo '<label><input name="quest.' . $n . '" type="radio" value="Г"> ' . $row['answer4'] . '</label><br>';
                    }

                }
            }
        }
        ?>
        <div><p><input class="button" type="submit" name="submit" value="Завершить"></p></div>


    </form>

</div>
