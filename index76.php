<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamza</title>
</head>
<body>
    <?php 
    
        echo "wilcome to php tutorial on functoins<br>";

        function processmarks($marksArr) {
            $sum = 0;
            foreach ($marksArr as $value) {
                $sum += $value;
            }
            return $sum;

        }

        $Amirhamza = [34, 98, 45, 98, 93];
        $summarks = processmarks($Amirhamza);
        echo "total marks scored by hamza oute of 500 is $summarks<br>";

        $safin = [49, 46,89, 90, 98];
        $summarks = processmarks($safin);
        echo "total marks scored by safin outr of 500 is $summarks<br>";

    
    ?>
</body>
</html>