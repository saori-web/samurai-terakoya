<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
   <?php
        $number = 62.5;
        echo $number;

        echo '<br>';

        // Step3. 合計点と平均点を算出する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        echo 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;

        echo '<br>';

        echo $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        
        ?>
    </p>
</body>

</html>