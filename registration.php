
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Register</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="register1.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   </head>
   <body>
     <div class="section"> <br><br><br> </div>
     <div class="container">
       <center>
       <div class="row ">
         <div class="col-md-12">
           <h1 class="text-center ">Registration</h1>
         </div>
       </div>
       <form class="" action="register1.php" method="post" >

       <div class="row ">
         <div class="col-md-6">
           <?php
            if(isset($_GET['name'])){
              $name=$_GET['name'];
              echo '<div class="form-group">
                <div class="input-group">
                  <input type="text" name="name"  placeholder="Enter your Name" value= "'.$name.'" ><br>
                </div>';

            }
            else{
              echo '<div class="form-group">
                <div class="input-group">
                  <input type="text" name="name" value="" placeholder="Enter your Name" ><br>
                </div> ';
            }
            ?>
            <?php
             if(isset($_GET['dob'])){
               $dob=$_GET['dob'];
               echo '<div class="input-group">
                 <input type="date" name="dob" placeholder="Date of Birth" value="'.$dob.'">
               </div>
               ';

             }
             else{
               echo '<div class="input-group">
                 <input type="date" name="dob" value="" placeholder="Date of Birth" >
               </div>';
             }
             ?>
             <?php
              if(isset($_GET['gender'])){
                $gender=$_GET['gender'];
                echo '<div class="input-group " >
                    <select id="gender" name="gender" >
                      <option selected >---Select your Gender---</option>
                      <br>
                      <option class="opt">Male</option>
                      <br>
                      <option class="opt">Female</option><br>
                    </select>
                  </div>
                  <script type="text/javascript">document.getElementById("gender").value = "'.$gender.'" ;</script>';


              }
              else{
                echo '<div class="input-group ">
                    <select name="gender" >
                      <option selected>---Select your Gender---</option>
                      <br>
                      <option class="opt">Male</option>
                      <br>
                      <option class="opt">Female</option><br>
                    </select>
                  </div>';
              }
              ?>

               <?php
                if(isset($_GET['fname'])){
                  $fname=$_GET['fname'];
                  echo '<div class="input-group">
                    <input type="text"  name="fname" placeholder="Enter Father Name" value="'.$fname.'" >
                  </div>';

                }
                else{
                  echo '<div class="input-group">
                    <input type="text"  name="fname" placeholder="Enter Father Name" >
                  </div> ';
                }
                ?>
                <?php
                 if(isset($_GET['mname'])){
                   $mname=$_GET['mname'];
                   echo '<div class="input-group">
                     <input type="text" name="mname" placeholder="Enter Mother Name" value="'.$mname.'" >
                   </div>';

                 }
                 else{
                   echo '<div class="input-group">
                     <input type="text" name="mname" placeholder="Enter Mother Name" >
                   </div> ';
                 }
                 ?>
                 <?php
                  if(isset($_GET['focc'])){
                    $occ=$_GET['focc'];
                    echo '<div class="input-group">
                      <input type="text" name="occ" placeholder="Enter Father Occupation" value="'.$occ.'" >
                    </div>';

                  }
                  else{
                    echo '<div class="input-group">
                      <input type="text" name="occ" placeholder="Enter Father Occupation" >
                    </div> ';
                  }
                  ?>
                  <?php
                   if(isset($_GET['mobile'])){
                     $mobile=$_GET['mobile'];
                     echo '<div class="input-group">
                       <input type="text"  name="mobile" placeholder="Enter Student Mobile Number" value="'.$mobile.'" >
                     </div>';

                   }
                   else{
                     echo '<div class="input-group">
                       <input type="text"  name="mobile" placeholder="Enter Student Mobile Number" >
                     </div> ';
                   }
                   ?>

                   <?php
                    if(isset($_GET['email'])){
                      $email=$_GET['email'];
                      echo '<div class="input-group">
                        <input type="email" name="email" placeholder="Enter Student email id" value="'.$email.'" >
                      </div>';

                    }
                    else{
                      echo '<div class="input-group">
                        <input type="email" name="email" placeholder="Enter Student email id" >
                      </div> ';
                    }
                    ?>
         </div>

         </div>

         <div class="col-md-6">
           <?php
            if(isset($_GET['address'])){
              $add=$_GET['address'];
              echo '<div class="form-group">
                <div class="input-group">
                  <textarea class="form-control" rows="5" id="add" name="address" placeholder="Enter your Address as below
    Eg.
    No 152/23, Royal Apartment,
    xyz street , abc Nagar,
    dfg city - pincode.

                  "></textarea>
                </div><script type="text/javascript">document.getElementById("add").value = "'.$add.'" ;</script>';

            }
            else{
              echo '<div class="form-group">
                <div class="input-group">
                  <textarea class="form-control" rows="5" id="add" name="address" placeholder="Enter your Address as below
    Eg.
    No 152/23, Royal Apartment,
    xyz street , abc Nagar,
    dfg city - pincode.

                  "></textarea>
                </div>';
            }
            ?>
            <?php
             if(isset($_GET['sch'])){
               $sch=$_GET['sch'];
               echo '<div class="input-group">
                 <input type="text" name="sch" value="'.$sch.'" placeholder="Enter your School" >
               </div>';

             }
             else{
               echo '<div class="input-group">
                 <input type="text" name="sch" value="" placeholder="Enter your School" >
               </div> ';
             }
             ?>
            <?php
             if(isset($_GET['group'])){
               $group=$_GET['group'];
               echo '<div class="input-group ">
                   <select name="group" id="group">
                     <option selected>---Select your Group---</option>
                     <br>
                     <option class="opt">Computer Science</option>
                     <br>
                     <option class="opt">Biology</option><br>
                     <option class="opt">Commerce</option><br>

                     <option class="opt">Others</option><br>
                   </select>
                 </div><script type="text/javascript">document.getElementById("group").value = "'.$group.'" ;</script>' ;

             }
             else{
               echo '<div class="input-group ">
                   <select name="group" >
                     <option selected>---Select your Group---</option>
                     <br>
                     <option class="opt">Computer Science</option>
                     <br>
                     <option class="opt">Biology</option><br>
                     <option class="opt">Commerce</option><br>

                     <option class="opt">Others</option><br>
                   </select>
                 </div>';
             }
             ?>
            <?php
             if(isset($_GET['course'])){
               $course=$_GET['course'];
               echo '<div class="input-group ">
                   <select name="course" id="course">
                     <option selected>---Select Course---</option>
                     <br>
                     <option class="opt">Web Development</option>
                     <br>
                     <option class="opt">App Development</option><br>
                     <option class="opt">Python Programming</option><br>
                   </select>
                 </div><script type="text/javascript">document.getElementById("course").value = "'.$course.'" ;</script>';

             }
             else{
               echo '<div class="input-group ">
                   <select name="course" >
                     <option selected>---Select Course---</option>
                     <br>
                     <option class="opt">Web Development</option>
                     <br>
                     <option class="opt">App Development</option><br>
                     <option class="opt">Python Programming</option><br>
                   </select>
                 </div>';
             }
             ?>
            <?php
             if(isset($_GET['vel'])){
               $vel=$_GET['vel'];
               echo '<div class="input-group " >
                   <select name="vel" id="vel">
                     <option selected>---Are you Velammalian ?---</option>
                     <br>
                     <option class="opt">Yes</option>
                     <br>
                     <option class="opt">No</option><br>
                   </select>
                 </div><script type="text/javascript">document.getElementById("vel").value = "'.$vel.'" ;</script>';

             }
             else{
               echo '<div class="input-group ">
                   <select name="vel" >
                     <option selected>---Are you Velammalian ?---</option>
                     <br>
                     <option class="opt">Yes</option>
                     <br>
                     <option class="opt">No</option><br>
                   </select>
                 </div>';
             }
             ?>
            <?php
             if(isset($_GET['know'])){
               $know=$_GET['know'];
               echo '<div class="input-group ">
                   <select name="know" id="know">
                     <option selected>How do you know about this Course?</option>
                     <br>
                     <option class="opt">Friends</option>
                     <option class="opt">School</option>
                     <br>
                     <option class="opt">Advertisement</option><br>
                     <option class="opt">Velammalians</option><br>
                   </select>
                 </div><script type="text/javascript">document.getElementById("know").value = "'.$know.'" ;</script>';

             }
             else{
               echo '<div class="input-group ">
                   <select name="know" >
                     <option selected>How do you know about this Course?</option>
                     <br>
                     <option class="opt">Friends</option>
                     <option class="opt">School</option>
                     <br>
                     <option class="opt">Advertisement</option><br>
                     <option class="opt">Velammalians</option><br>
                   </select>
                 </div>';
             }
             ?>

         </div>
       </div>
     </div>
       <div class="row ">
         <div class="col-md-12">
           <div class="form-group">
             <div class="input-group">
               <input class=" btn btn-success" type="submit" name="submit" value="Register">
               <input class=" btn btn-danger" type="reset" name="reset" value="Cancel">
             </div>
           </div>
         </div>

       </div>
       </form>

       <?php

       if(!isset($_GET['reg'])){
         exit();
       }
       else{
         $regerr= $_GET['reg'];
         if($regerr == "allempty"){echo "<script> alert('All fields are required');</script>" ;exit();}
   elseif($regerr == "nameempty"){echo "<script> alert('Please Enter your Name');</script>" ; exit();}
   elseif($regerr == "nameerr"){echo "<script> alert(' Name must contain only characters');</script>" ;exit();}
   elseif($regerr == "scherr"){echo "<script> alert('School Name must contain only characters');</script>" ;exit();}
   elseif($regerr == "dobempty"){echo "<script> alert('Please Enter your Date of Birth');</script>" ;exit();}
   elseif($regerr == "genderempty"){echo "<script> alert('Please Select your Gender');</script>" ; exit();}
   elseif($regerr == "fnameempty"){ echo "<script> alert('Please Enter your Father Name');</script>" ; exit();}
   elseif($regerr == "fnameerr"){echo "<script> alert('Father Name must contain only characters');</script>" ; exit();}
   elseif($regerr == "mnameempty"){echo "<script> alert('Please Enter your Mother Name');</script>" ; exit();}
   elseif($regerr == "mnameerr"){echo "<script> alert('Mother Name must contain only characters');</script>" ;exit();}
   elseif($regerr == "foccempty"){echo "<script> alert('Please Enter your Father Occupation');</script>" ; exit();}
   elseif($regerr == "foccerr"){echo "<script> alert('Father occupation must contain only characters');</script>" ;exit();}
   elseif($regerr == "mobileempty"){echo "<script> alert('Please Enter your Active Mobile Number');</script>" ;exit();}
   elseif($regerr=="mobileerr"){echo "<script> alert('Please Enter valid Mobile Number');</script>" ;exit();}
   elseif($regerr == "emailempty"){echo "<script> alert('Please Enter your Active email id');</script>" ;exit();}
   elseif($regerr == "emailerr"){echo "<script> alert('Invalid Email id');</script>" ;exit();}
   elseif($regerr == "addempty"){echo "<script> alert('Please Enter your Address');</script>" ;exit();}
   elseif($regerr == "schempty"){echo "<script> alert('Please Enter your School');</script>" ;exit();}
   elseif($regerr == "groupempty"){echo "<script> alert('PLease Select your Group');</script>" ;exit();}
   elseif($regerr == "courseempty"){echo "<script> alert('PLease Select your required Course');</script>" ;exit();}
   elseif($regerr == "velempty"){echo "<script> alert('Are you Velammalian? Choose Yes or No');</script>" ;exit();}
   elseif($regerr == "knowempty"){echo "<script> alert('Please Select your Source of Information');</script>" ;exit();}
   else{header("Location: register1.php?reg=success");exit();}

   if($regerr =="done"){echo "<script> alert('Registration Successful');</script>" ;exit();}
   elseif($regerr =="done"){echo "<script> alert('Registration Unsuccessful');</script>" ;exit();}
 }

        ?>
     </center>
     </div>
   </body>
 </html>
