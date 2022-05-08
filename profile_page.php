<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header('location: ../api/signin_form.php');
    }
    $udata = $_SESSION['userdata'];
    $gdata = $_SESSION['groupsdata'];

    if($udata['status'] == "" ){
        $status = '<span style= "color: red;">Not voted</span>';
    }
    else{
        $status = '<span style= "color: green;">voted</span>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Profile page of online voting system</title>
    <style>
        .back{
            float: left;
        }
        .back1{
            float: right;
        }
        .group-profile{
            margin: 0rem 1rem 1rem 2rem; 
            padding: 8px 5px;
        }
        .gprofile{
            float: right;
        }
        .gprofile img{
            margin-top: 1rem;
            border-radius: 0.2rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex mt-2">
        <div class=" col-4 col-sm-3 col-md-4 col-lg-3 shadow-lg pt-2 rounded mx-1" >
            <span class="back navbar-brand">
                <a href="../api/signin_form.php"> <i class="fa fa-arrow-circle-left"> Back</a></i>
            </span>
            <center><h6 class="profile-header mt-2">User/Group Profile</h6></center>
            <hr>
            <span class="uprofile">
                <center><img src="../image/<?php echo $udata['photo']; ?>" alt="photo" height="100" width="100"></center>
            </span><br><br>
            <span  class="uprofile"><strong>User/Group: </strong> <?php echo $udata['username']; ?> </span><br>
            <span class="uprofile"><strong> E-mail:</strong>  <?php echo $udata['email']; ?></span><br>
            <span  class="uprofile"><strong> Address:</strong>  <?php echo $udata['address']; ?></span><br>
            <span  class="uprofile"><strong> Phone:</strong>  <?php echo $udata['phone']; ?></span><br>
            <span  class="uprofile"><strong> Citizenship ID No:</strong>  <?php echo $udata['citizenship_card_no']; ?></span><br>
            <span  class="uprofile"><strong> Status:</strong>  <?php echo $status?></span>
        </div>
        <div class="col-8 col-sm-8 col-md-6 col-lg-8  shadow-lg pt-2 ml-5 rounded">
            <span class="back1 navbar-brand">
                <a href="../api/logout.php"> <i class="fa fa-sign-out"> Logout</a></i>
            </span>
                <h5 class="profile-header d-flex justify-content-center align-text-middle">List of candidates</h5>
                <hr>
                <div class="group-profile"> 
                    <?php
                    if($_SESSION['groupsdata']){
                        for($i=0; $i<count($gdata); $i++){
                        ?>
                            <div class="group-profile shadow-lg rounded py-4 px-3">
                                <span class="gprofile" >
                                    <img src="../image/<?php echo $gdata[$i]['photo']; ?>" alt="photo" height="80" width="80"></span>
                                <span><strong> Group Name:</strong> <?php echo $gdata[$i]['username']; ?></span><br>
                                <span><strong>Number of votes:</strong>  <?php echo $gdata[$i]['votes']; ?> Votes</span><br><br>

                                <form  action="../api/voting.php" method="POST">

                                    <span>
                                       <input type="hidden" name="gvotes"  value=" <?php echo $gdata[$i]['votes'];?> ">
                                    </span>
                                    <span>
                                        <input type="hidden" name="gid" value="<?php echo $gdata[$i]['id']; ?>">
                                    </span>
                                    <span><input type="submit" name="btn" id="vbtn" value="Vote" class="btn btn-primary"></span>
                        
                                </form>
                            </div>
                        <?php
                        }
                    }
                    else{
                        echo "no data";
                    }
                    ?>
                    
             </div>
     </div>

</body>
</html> 