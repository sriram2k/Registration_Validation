<?php
if(isset($_POST['submit']))
{

$name=test_input($_POST['name']);
$dob=test_input($_POST['dob']);
$gender=test_input($_POST['gender']);
$fname=test_input($_POST['fname']);
$mname=test_input($_POST['mname']);
$focc=test_input($_POST['occ']);
$mobile=test_input($_POST['mobile']);
$email=test_input($_POST['email']);
$address=test_input($_POST['address']);
$sch=test_input($_POST['sch']);
$group=test_input($_POST['group']);
$course=test_input($_POST['course']);
$vel=test_input($_POST['vel']);
$know=test_input($_POST['know']);
if(empty($name) and empty($dob) and $gender=='---Select your Gender---' and empty($sch) and empty($fname) and empty($mname) and empty($focc) and empty($mobile) and empty($email) and empty($address) and $group=='---Select your Group---'
and $course=='---Select Course---' and $vel=='---Are you Velammalian ?---' and $know=='How do you know about this Course?' )
{header("Location: registration.php?reg=allempty");exit();}
else
{
if(empty($name)){header("Location: registration.php?reg=nameempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
else{if (!preg_match("/^[a-zA-Z]*$/",$name)) {header("Location: registration.php?reg=nameerr&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}}
if(empty($dob)){header("Location: registration.php?reg=dobempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
if($gender=='---Select your Gender---'){header("Location: registration.php?reg=genderempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
if(empty($fname)){header("Location: registration.php?reg=fnameempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
else{if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {header("Location: registration.php?reg=fnameerr&name=$name&dob=$dob&gender=$gender&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}}
if(empty($mname)){header("Location: registration.php?reg=mnamempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
else{if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {header("Location: registration.php?reg=mnameerr&name=$name&dob=$dob&gender=$gender&fname=$fname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}}
if(empty($focc)){header("Location: registration.php?reg=foccempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
else{if (!preg_match("/^[a-zA-Z ]*$/",$focc)) {header("Location: registration.php?reg=foccerr&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}}
if(empty($mobile)){header("Location: registration.php?reg=mobileempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
else{if(!preg_match("/^\d{10}$/",$mobile)){header("Location: registration.php?reg=mobileerr&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}}
if(empty($email)){header("Location: registration.php?reg=emailempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
else{if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {header("Location: registration.php?reg=emailerr&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}}
if(empty($address)){header("Location: registration.php?reg=addempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
if(empty($sch)){header("Location: registration.php?reg=schempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
else{if (!preg_match("/^[a-zA-Z ]*$/",$sch)) {header("Location: registration.php?reg=scherr&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&group=$group&course=$course&vel=$vel&know=$know");exit();}}
if($group=='---Select your Group---'){header("Location: registration.php?reg=groupempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
if($course=='---Select Course---'){header("Location: registration.php?reg=courseempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
if($vel=='---Are you Velammalian ?---'){header("Location: registration.php?reg=velempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
if($know=='How do you know about this Course?'){header("Location: registration.php?reg=knowempty&name=$name&dob=$dob&gender=$gender&fname=$fname&mname=$mname&focc=$focc&mobile=$mobile&email=$email&address=$address&sch=$sch&group=$group&course=$course&vel=$vel&know=$know");exit();}
}
if($_GET['reg']="success"){
  $connect=mysqli_connect("localhost","root","","studentdetails");
  $sql="insert into registration_details values('$email','$name','$dob','$gender','$group','$sch','$address','$mobile','$course','$fname','$mname','$mobile','$occ','$know')";
  if(mysqli_query($connect,$sql)){
    header("Location:registration.php?reg=done");
    exit();
  }
  else{
    header("Location:registration.php?reg=undone");
    exit();
  }
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>
