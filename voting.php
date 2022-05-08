<?php
    session_start();
    include('../api/connection.php');
    if(isset($_POST['btn'])){
        $gvote = $_POST['gvotes'];
        $total_votes = $gvote + 1;
        $gid = $_POST['gid'];
        $userid = $_SESSION['userdata']['id'];
        $ustatus = $_SESSION['userdata']['status'];

        //$query = mysqli_query($conn, "SELECT status FROM users WHERE id ='$userid");
            if($ustatus ='Not voted'){
                $update_votes = mysqli_query($conn,"UPDATE users SET votes='$total_votes' WHERE id='$gid' ");
                $update_user_data = mysqli_query($conn,"UPDATE users SET status = 1 WHERE id='$userid' ");
                    if($update_votes AND $update_user_data){
                        $groups = mysqli_query($conn,"SELECT * FROM users WHERE role= 2 ");
                        $groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);
                        $_SESSION['userdata']['status'] = 1;
                        $_SESSION['groupsdata'] = $groupsdata;
                        echo '
                            <script>
                                alert("Thanks for voting!");
                                window.location = "../api/profile_page.php";
                            </script>
                        ';
                    }
                    else{
                        echo '
                            <script>
                                alert("error occured while voting to your candidate!");
                                window.location = "../api/profile_page.php";
                            </script>
                        ';
                    }       
              }
            else{
                echo '
                    <Script>
                        alert("You can not vote more than one!");
                        window.location = "../api/profile_page.php";
                    </script>
           ';
            }
    }
?>