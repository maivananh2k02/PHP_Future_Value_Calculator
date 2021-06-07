<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset style="width: 500px">
        <h1>Future Value Calculator</h1>
        <br>
        <input type="number" name="input" placeholder="principal amount">
        <br>
        <br>
        <input type="number" name="interestRate" placeholder="interest rate">
        <br>
        <br>
        <input type="number" name="year"placeholder="year">
        <br><br>
        <input type="submit" value="result">
    </fieldset>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $principalAmount=$_REQUEST["input"];
        $interestRate=$_REQUEST["interestRate"]/100;
        $year=$_REQUEST["year"];
        $total=$principalAmount*(1+$interestRate)**$year;
        echo "lai la :".$total."dong";
    }
    ?>
</form>
</body>
</html>

