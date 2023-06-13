<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$price=$_POST['price'];
$dpdate=$_POST['dpdate'];
$returdate=$_POST['returndate'];
$person=$_POST['person'];
$roomtype=$_POST['roomtype'];
$hotel=$_POST['hotel'];


$fnameerr=$lnameerr=$emailerr=$phoneerr=$priceerr=$dpdateerr=$returndateerr=$personerr=$roomtypeerr=$hotelerr="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){
    if(empty($_POST['fname'])){
        $nameerr="Please enter your name";
    }
    else{
        $name=input_data($_POST['fname']);
        if(!preg_match("/^[a-zA-z]*$/",$fname)){
            $nameerr="only alphabets and white space are alloewd";

        }
    }
}
}
?>