<?php require_once 'db.php'; ?>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Тест стили</title>
<link rel="stylesheet" href="style.css">


<div class="body_div">

    <form name="Form" action="start.php" method="post">
        <script type="text/javascript" src="test.js"></script>
        <p><input type="email" class="tab_nomer" name="fio" placeholder="Пожалуйста, введите e-mail"></p>


        <?php
        $data = $_POST['fio'];
        if (isset($_POST['submit'])) {

            $errors = array();
            if (trim($data) == '') {
                $errors[] = 'Пожалуйста, введите e-mail';
            }
            $query = mysqli_query($connection, "SELECT * FROM `teststyle` WHERE fio = '$data'");

            if (($query->num_rows) > 0) {
                $errors[] = 'Вы уже проходили данный тест, свяжитесь с организатором тестирования!';
            }
            if (empty($errors)) {

                $reg_date = date("M j");
                $time_start = date("G:i s");
                $fio = $_POST['fio'];

                $query = mysqli_query($connection, "INSERT INTO `teststyle` SET fio='$fio', date_reg='$reg_date', time_start='$time_start', quest='1'");

                $_SESSION['logged_user'] = $_POST['fio'];

                echo '<script>setTimeout("location.href=\'form.php\'", 100)</script>';
            } else {
                echo '<div id="errors" style="color:red;">' . array_shift($errors) . '</div>';
            }
        }


        ?>

        <p><strong>Внимательно прочитайте эту инструкцию.</strong></p>
        <p> Прочитайте описание ситуаций и выбор решения. Представьте, что Вы оказались в каждой из
            предложенных двенадцати ситуаций. Вам предлагается на выбор одно из четырех возможных решений.
            Внимательно изучите каждое из них. Выберите какое-либо одно решение, которое (по Вашему мнению)
            является наилучшим в данной ситуации. </p>

        <p>Этот тест состоит из 12 ситуаций.</p>

        <label><input name="quest1" type="checkbox" value="">Я подтверждаю, что с инструкцией ознакомился.<br></label>

        <p><input class="button" type="submit" name="submit" value="Далее" disabled></p>

    </form>

</div>
