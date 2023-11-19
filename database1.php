<?php
$conn=new mysqli("localhost","root","123456","db");
if(!$conn){
    die("connection failed");
}
// $sql="create table student(Name varchar(20),Roll int,Stream varchar(15))";
// $sql="insert into student (Name,Roll,Stream) values ('Gourav',12213873,'MCA'),('Deepak',12213553,'MCA'),('Shalini',12213333,'MCA')";
$sql ="select *from student";

$result=$conn->query($sql);
// if($result){
//     echo "Data inserted";
// }else{
//     echo "Data not inserted";
// }
echo $result->num_rows;
while($rows= $result->fetch_assoc()){
    echo "Name :".$rows['Name']." Roll Number :".$rows['Roll']." Stream :".$rows['Stream']."<br>";
}

?>