<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is php</p>
    <?php
    $weekname = "tuesday";
    switch($weekname)
    {
        case "monday":
        case "tuesday":
        case "wednesday":
        case "thursday": 
        case "friday":   
            echo "weekdays";
            break;
        /*case "tuesday":
            echo "weekdays";
            break;
        case "wednesday":
            echo "weekdays";
            break;
        case "thursday":
            echo "weekdays";
            break;
        case "Friday":
            echo "weekdays";
            break; */
        case "Saturday":
            echo "weekends";
            break;
        case "Sunday":
            echo "weekends";
            break;
        default;
            echo "Not Valid Day";
            break;
    }


    
    ?>
</body>
</html>