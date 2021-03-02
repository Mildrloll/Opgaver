<html>
<body>
<!--Help text to get the user to input the date correctly-->
<p> Date needs to be type in year-month-day like so 2007-03-24 </p>
<!--form that sends the date to the sever which is this php file as a post request-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <!--Two inputs fields for the dates-->
    Start_Date: <input type="text" name="start_date"><br>
    End_Date: <input type="text" name="end_date"><br>
    <!--A sumit button-->
    <input type="submit">
</form>
<?php
// checks if the request is a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    // checks if the input field is empty
    if (empty($start_date) || empty($end_date)) {
        echo "Need two dates in order to work";
    } else {
        // finds the differences between the two dates
        $diff = abs(strtotime($end_date) - strtotime($start_date));
        // finds the years between the two dates
        $years = floor($diff / (365 * 60 * 60 * 24));
        // finds the remaning months between the two dates
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        // finds the remaning days between the two dates
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        // prints out the years, months and days between the two dates
        printf("%d years, %d months, %d days\n", $years, $months, $days);
    }
}
?>
</body>
</html>