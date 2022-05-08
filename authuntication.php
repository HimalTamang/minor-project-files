<?php
   session_start();
   
   include('../api/connection.php');

   if(isset($_POST['signin'])){
       $email= $_POST['uemail'];
       $password = $_POST['upassword'];
       $role = $_POST['role'];
      // $rem = $_POST['back'];

       $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND role = '$role' ";
       $query = mysqli_query($conn, $sql);
       $result = mysqli_num_rows($query);
       if($result > 0){
           $userdata = mysqli_fetch_array($query);
           $groups = mysqli_query($conn,"SELECT * FROM users WHERE role= 2 ");
           $groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);

           //starting session of the data to store it into the profile page
           $_SESSION['userdata'] = $userdata;
           $_SESSION['groupsdata'] = $groupsdata;
           echo '
           <Script>
                 alert("Thank you!, Now you are logging into system");
                 window.location = "../api/profile_page.php";
            </script>
           ';

       }
       else{
        echo '
            <Script>
                alert("invalid information please try again!");
                window.location = "../api/signin_form.php";
            </script>
        ';
       }
   }
   else{
       echo "not set";
   }
?>