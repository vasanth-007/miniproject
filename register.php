<?php
$con = new mysqli('localhost','root','','total registration');
if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $dob=$_POST['DOB'];
    $aadhar=$_POST['Aadhar'];
    $email=$_POST['email'];
    $phone=$_POST['Phone'];
    $address=$_POST['address'];
    if($name!=""&&$dob!=""&&$aadhar!=""&&$email!=""&&$phone!=""&&$address!="")
    {
    $sql="INSERT INTO data (username,dob,Aadhar,email,phone,useraddress) VALUES ('$name','$dob','$aadhar','$email','$phone','$address')";
    if($con->query($sql))
    {
        echo "data stored"; 
    }
    else{
        echo "insert data fail";
    }
}
else{
    echo "all field required";
}
}
?>