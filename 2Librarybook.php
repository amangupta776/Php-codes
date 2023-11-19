
<!DOCTYPE html>
<html>
<head>
    <title>Library Book Return Page</title>
</head>
<body>
    <h2>Library Book Return Page</h2>
    <form method="post">
        <label for="book_code">Book Code (e.g. cap108):</label>
        <input type="text" id="book_code" name="book_code"  required><br><br>

        <label for="issue_date">Date of Issue:</label>
        <input type="date" id="issue_date" name="issue_date"  required><br><br>

        <label for="return_date">Date of Return:</label>
        <input type="date" id="return_date" name="return_date"  required><br><br>

        <input type="submit" value="Calculate Fine">
    </form>

    <?php
$bookCode = $issueDate = $returnDate = "";
$fine = 0;
if($_POST){
    $bookCode = $_POST["book_code"];
    $issueDate = $_POST["issue_date"];
    $returnDate = $_POST["return_date"];
        $daysLate = (strtotime($returnDate) - strtotime($issueDate)) / (60 * 60 * 24);
        $fine=0;

    if($daysLate>7){
       $days=$daysLate-7;
       $fine=$days*10;
       echo "<br>Your fine is $fine<br>";
    }else{
        echo "<br> No fine ";
    }
  
  
}
?>

</body>
</html>
