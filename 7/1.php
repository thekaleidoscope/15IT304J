<html>

<head>

</head>

<body>
    <form method="post">
    <div>
        <textarea readonly=readonly name="ques[1]">In recent studies, ___________________ was the most widely used illicit drug by drivers who "drug and drive". </textarea>
        <input type="radio" name="ans[1]" value="Cocaine ">Cocaine 
        <input type="radio" name="ans[1]" value="Marijuana">Marijuana
        <input type="radio" name="ans[1]" value="Speed">Speed

    </div>
        <hr>
    <div>
        <textarea readonly=readonly name="ques[2]">Who is the real Spiderman?</textarea>
        <input type="radio" name="ans[2]" value="Tom Holland">Tom Holland
        <input type="radio" name="ans[2]" value="Andrew Garfield">Andrew Garfield
        <input type="radio" name="ans[2]" value="Tobey Maguire">Tobey Maguire
        
        <br>
    </div>
    <hr>
    <div>
        <textarea readonly=readonly name="ques[3]">What does the fox say?</textarea>
        <input type="radio" name="ans[3]" value="Tweet">Tweet
        <input type="radio" name="ans[3]" value="Quack">Quack
        <input type="radio" name="ans[3]" value="DingDingDing">DingDingDing
        
        <br>
        <input type="submit" name="submit" value="submit">
    </div>
    </form>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebP";

try {
    
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
// $sql = "CREATE or UPDATE DATABASE WebP";
try
{
    // $conn->query("select 1 from `BULLS`;");

$ques= $_POST['ques'];
$ansr= $_POST['ans'];
// $result= array();
if(isset($_POST['submit']))
{
$result=array_combine($ques,$ansr);
// print_r($result);
foreach($result as $key=>$value){
    $sql = "INSERT INTO BULLS (Question, Answer) values('$key','$value')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}
//echo $r;
// {
//     $sql = "INSERT INTO BULLS (Question, Answer) values ";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// }


}
catch(Exception $e){
$sql = "CREATE TABLE BULLS (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Question VARCHAR(30) NOT NULL,
    Answer VARCHAR(30) NOT NULL
    )";
    $conn->query($sql) ;
}

$conn->close();

}
catch(Exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>
</html>