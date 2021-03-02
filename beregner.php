<html>
<body>
<p> Date needs to be type in year-month-day like so 2007-03-24 </p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Start_Date: <input type="text" name="start_date"><br>
    End_Date: <input type="text" name="end_date"><br>
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    if (empty($start_date) || empty($end_date)) {
        echo "Need two dates in order to work";
    } else {
        $diff = abs(strtotime($end_date) - strtotime($start_date));
        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        printf("%d years, %d months, %d days\n", $years, $months, $days);
    }
}
?>
</body>
</html>