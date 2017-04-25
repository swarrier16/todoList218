<?php
if( $_POST )
{
$con = mysql_connect("localhost","root","");

if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("ssw7", $con);


$insert_query = "insert into user(fname, lname, email, phone, birthday, gender)
		 values (
            '".$_POST['fname']."',
            '".$_POST['lname']."',
            '".$_POST['email']."'),
            '".$_POST['phone']."',
            '".$_POST['birthday']."'),
            '".$_POST['gender']."')"
            ;

mysql_query($insert_query);



mysql_close($con);
}
?>