<?php
    
    include_once('../api/connection.php');
    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $uemail = $_POST['email'];
        $upass = $_POST['pass'];
        $ucpass = $_POST['cpass'];
        $address = $_POST['address'];
        $ucontact = $_POST['phone'];
        $ucitizenship = $_POST['citizenship'];
        $urole = $_POST['role'];
        $uphoto = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];

        if($upass == $ucpass){
            move_uploaded_file($tmp_name,"../image/$uphoto");
            $sql = "INSERT INTO users(username,email,password,confirm,address,phone,citizenship_card_no,role,photo) VALUES('$username','$uemail','$upass','$ucpass', '$address','$ucontact','$ucitizenship','$urole','$uphoto')";
            $query = mysqli_query($conn,$sql);
            if($query){
                echo "inserted successfully";
                header('location: ../api/signin_form.php');
            }
            else{
                echo'
                        <script>
                            alert("insertion error!!");
                            window.location = "../api/signup_form.php";
                        
                        </script>
                    ';
            }
        }
        else{
            echo'
            <script>
                alert("incorrect password!");
            
            </script>
        ';
        }
    }
    else{
        echo '
            <script>
                alert("Please! sign up ");
            </script>
        ';
        header('location: ../api/signup_form.php');
    }

?>