<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ассоциативный массив</title>
</head>
<body>
<?php

$students[stud1] = array('Иванов Иван Иванович' => array('22' => array('2 курс')));
$students[stud2] = array('Петров Петр Петрович' => array('25' => array('4 курс')));
$students[stud3] = array('Сидоров Олег Викторович' => array('19' => array('1 курс')));
$students[stud4] = array('Новиков Илья Николаевич' => array('30' => array('5 курс')));
$students[stud5] = array('Коршунов Михаил Васильевич' => array('27' => array('3 курс')));

foreach ($students as $student) {
    foreach ($student as $fio => $ages) {
        foreach ($ages as $age => $courses) {
            foreach ($courses as $key => $value) {
                echo '<h4>ФИО: ' . $fio . '. Возраст: ' . $age . ' лет. Курс: ' . $value . '.</h4>';
            }
        }
    }
}

?>
</body>
</html>