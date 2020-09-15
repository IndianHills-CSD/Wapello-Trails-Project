<?php
printForm();

  function addData($phone, $fname, $lname, $email){
    //adding user input to the database
    include(dbinfo.php);
    $sql="INSERT INTO dbName VALUES('$phone', '$fname', '$lname', '$email')";
    $result=mysql_query($sql) or die(mysql_error());
    print<<<Here
    <h1>Info added</h1>
  HERE;
  }

function printForm(){
  //Print forms code here
}
?>
