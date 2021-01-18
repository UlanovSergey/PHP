<?php echo 'Hello world';?>
<br>
<?php

// $a = 5;

// $b = '05';
// var_dump($a == $b);                             // Почему true?
// echo 'Не строгое сравнение переменная b приводится к типу integer со значением 5<br>';
// var_dump((int)'012345');                        // Почему 12345?
// echo 'Преводит к целочисленному типу 0 убирает как ненужный <br>';
// var_dump((float)123.0 === (int)123.0); // Почему false?
// echo 'Строгое сравнение, включает сравнение по типам которые не равны<br>';
// var_dump((int)0 === (int)'hello, world'); // Почему true?
// echo 'Строка приводится к целочисленному типу и в данном случае равна "0"<br>';
// $a = $a + $b - ($b = $a);
// echo $a, $b;
// $title = 'Привет PHP';
// $year = 2021;




?>
<html>
    <head>
        <title><?php echo$title; ?></title>
    </head>
    <body>
        <h2>Задание 1</h1>
            <?php 
            $a = 2;
            $b = 5;
            
            if ($a >= 0 && $b >= 0){
                echo $a-$b;
            }elseif ($a <= 0 && $b <= 0){
                echo $a * $b;
            }elseif (($a >= 0 && $b <= 0) || ($a <= 0 && $b >= 0)){
                echo $a + $b;
            }
        ?>
        <h2>Задание 2</h2>
            <p>на мой взгляд так себе решение, но другое что то в голову не пришло :(</p>
            <?php 
                $a = 10;
                echo $a . '<br>';
                switch ($a) {
                    case '0':
                        echo '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15';
                        break;
                    case '1':
                        echo '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15';
                        break;
                    case '2':
                        echo '2,3,4,5,6,7,8,9,10,11,12,13,14,15';
                        break;
                    case '3':
                        echo '3,4,5,6,7,8,9,10,11,12,13,14,15';
                        break;
                    case '4':
                        echo '4,5,6,7,8,9,10,11,12,13,14,15';
                        break;
                    case '5':
                        echo '5,6,7,8,9,10,11,12,13,14,15';
                        break;
                    case '6':
                        echo '6,7,8,9,10,11,12,13,14,15';
                        break;
                    case '7':
                        echo '7,8,9,10,11,12,13,14,15';
                        break;
                    case '8':
                        echo '8,9,10,11,12,13,14,15';
                        break;
                    case '9':
                        echo '9,10,11,12,13,14,15';
                        break;
                    case '10':
                        echo '10,11,12,13,14,15';
                        break;
                    case '11':
                        echo '11,12,13,14,15';
                        break;
                    case '12':
                        echo '12,13,14,15';
                        break;
                    case '13':
                        echo '13,14,15';
                        break;
                    case '14':
                        echo '14,15';
                        break;
                    case '15':
                        echo '15';
                        break;
                    default:
                        
                        break;
                }
            ?>
        <h2>Задание 3</h2>
            <?php
               function getSumm($a,$b){
                return $a + $b;
               };
               function getDifference ($a,$b){
                   return $a - $b;
               };
               function getMultiplication($a,$b){
                    return $a * $b;
               }
               function getDivision($a,$b){
                   return $a / $b;
               }
               echo getSumm($a,$b).'<br>';
               echo getDifference($a,$b).'<br>';
               echo getMultiplication($a,$b).'<br>';
               echo getDivision($a,$b).'<br>';
            ?>
        <h2>Задание 4</h2>
            <?php
                function mathOperation($a, $b, $operation){
                    switch ($operation) {
                        case 'сложение':
                            $result = $a + $b;
                            break;
                        case 'вычитание':
                            $result = $a - $b;
                            break;
                        case 'умножение':
                            $result = $a * $b;
                            break;
                        case 'деление':
                            $result = $a / $b;
                            break;
                        
                        default:
                            
                            break;
                    }
                    return $result;
                }
                echo mathOperation($a,$b,'умножение');
            ?>
        <h2>Задание 6</h2>
                <?php   
                    function power($val, $pow){
                        if ($pow != 1) {
                            return $val * power($val, --$pow);
                        }
                        return $val;  
                    }
                    echo power(5,4);
                    
                ?>
        <footer>
        <h3><?php echo date('Y')?></h3>
        </footer>
    </body>
</html>
