<?php require_once 'db.php'; ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Результаты теста</title>
<link rel="stylesheet" href="style.css">

<!--noindex-->

<?php if (isset ($_SESSION['access']->firsova)) : ?>

<div class="body_div">
    <a class="button_beck" href="/index.php">Назад</a><br>
    <ul>
        <li>Тест состоит из 12 ситуаций</li>
        <li>Можно выбрать один вариант ответа</li>
        <li>Вход по e-mail, один раз можно пройти</li>
        <li>Ссылка для прохождения теста: <a target="_blank" href="start.php">https://www.hrgeneralist.ru/test/styletest/start.php</a>
        </li>
    </ul>

    <?php
    {
        if (!$connection) {
            die('соединения нет');
        } else {
            $query = mysqli_query($connection, "SELECT * FROM `teststyle`");
            if ($query->num_rows > 0) {

                echo '<table style="width: 100%; border-collapse: collapse;" border="1">';
                echo '<thead>';
                echo '<tr>';
                echo '<th bgcolor="#a9a9a9">ФИО</th>';
                echo '<th bgcolor="#a9a9a9">проходил</th>';
                echo '<th bgcolor="#a9a9a9">S1</th>';
                echo '<th bgcolor="#a9a9a9">S2</th>';
                echo '<th bgcolor="#a9a9a9">S3</th>';
                echo '<th bgcolor="#a9a9a9">S4</th>';
                echo '<th bgcolor="#a9a9a9">(а)</th>';
                echo '<th bgcolor="#a9a9a9">(б)</th>';
                echo '<th bgcolor="#a9a9a9">(в)</th>';
                echo '<th bgcolor="#a9a9a9">(г)</th>';
                echo '<th bgcolor="#a9a9a9">сумма (б*1)+(в*2)+(г*3)</th>';
                echo '<th bgcolor="#a9a9a9">посмотреть</th>';
                echo '</tr>';
                echo '<br>';
                echo '<br>';
                while ($row = $query->fetch_assoc()) {

                    $array = array('s1' => $row['s1'], 's2' => $row['s3'], 's3' => $row['s3'], 's4' => $row['s4']);
                    $all = ($row['b2'] * 1) + ($row['c3'] * 2) + ($row['g4'] * 3);
                    echo '<tr>';
                    echo '<td style="text-align: center">' . $row['fio'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['date_reg'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['s1'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['s2'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['s3'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['s4'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['a1'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['b2'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['c3'] . '</td>'; //
                    echo '<td style="text-align: center">' . $row['g4'] . '</td>'; //
                    echo '<td style="text-align: center">' . $all . '</td>'; //
                    echo '<td style="text-align: center"><a href="report.php?user=' . $row['fio'] . '">подробнее</a></td>'; //
                    echo '</tr>';

                    echo '</thead>';

                }
                // Если данных нет
            } else {
                echo "Не кто не найден";
            }
        }
        // Закрыть соединение
        mysqli_close($connection);


    }

    ?>

    <?php else : ?>
        <?php echo '<script>setTimeout("location.href=\'../index.php\'", 10)</script>'; ?>
    <?php endif; ?>
