<!DOCTYPE html>
<html lang="en">


<head6>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- these are css, boostrap 4 and font awesome icons links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>this index page of the online voting system application or web application</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        nav{
            border-bottom: 0px solid black;
            margin: 0px -15px;
            background-color: lightsteelblue;
        }
        .navbar-brand img{
            border-radius: 100%;
        }
        .img-control img{
            border: 1px solid black;
            margin: 10px 100px;
        }
        .preface{
            margin: 10px;
        }
        .img-control1{
            float: right;
        }
        .header{
            margin: 5px 30px;
        }
    </style>

</head6
<body>

    <div clas="container-fluid">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light shadow">
                <span class="navbar-brand"><img src="../logo/e_vote.png" height="60" width="60" alt="logo"> Online Voting System</span>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                    <ul class="navbar-nav ml-auto mx-4">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../api/history_of_voting_system.php">History</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <p class="dropdown-item" >Phone 1 : 9818121645</p>
                                <p class="dropdown-item">Phone 2 : 9813213451</p>
                                <p class="dropdown-item">E-mail: onlinevotingsystem123.gov.np</p>
                                <p class="dropdown-item">Open Time: Except saturday (10-5)</p>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="info.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <p class="dropwod-item"><span style=" padding: 50px;"> Voter/Group</span></p><hr>
                                <a class="dropdown-item" href="../api/signin_form.php"> <i class="fa fa-sign-in"></i> Sign In</a>
                                <a class="dropdown-item" href="../api/signup_form.php"> <i class="fa fa-user-plus"></i> Sign Up</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i class="fa fa-user "> </i> Admin</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
                <div>
                    <h4 class="header"> Welcome to the Online voting system [ OVC ]</h4>
                    <p class="header">please read the following descriptio before voting to the candidates that will help you to choose right person.</p>
                    <hr>
                            <div class="d-flex ">
                                <div>
                                    <span class="img-control">
                                        <img src="../image/laptop.png" alt="logo" height="150" width="150">
                                    </span>
                                </div>
                                <div class="preface">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores eveniet magnam assumenda, repudiandae vel fugit porro accusamus? <br> Tenetur sequi nam aliquam. Quae, unde facilis. Ipsam culpa expedita debitis rerum suscipit. <br><br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero corporis perspiciatis optio? Quo in ipsam quod exercitationem quisquam laudantium nobis possimus animi tempora iste itaque soluta, sequi officiis ad perspiciatis!. <br><br>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat in eveniet sequi vitae vero quia, tenetur ratione maxime et repellendus! <br> Ea consectetur distinctio eveniet, obcaecati omnis quo eius? Eveniet, pariatur!
                                </span>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex ">
                                <div class="preface">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores eveniet magnam assumenda, repudiandae vel fugit porro accusamus? <br> Tenetur sequi nam aliquam. Quae, unde facilis. Ipsam      culpa expedita debitis rerum suscipit. <br><br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero corporis perspiciatis optio? Quo in ipsam quod exercitationem quisquam <br> laudantium nobis possimus animi tempora iste itaque soluta, sequi officiis ad perspiciatis!. <br><br>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat in eveniet sequi vitae vero quia, tenetur ratione maxime et repellendus! <br> Ea consectetur distinctio eveniet, obcaecati omnis quo eius? Eveniet, pariatur!
                                        </span>
                                </div>
                                <div >
                                        <span style ="float: right; margin-left: 150px;" class="">
                                            <img style="border: 1px solid black;" src="../image/laptop.png" alt="logo" height="150" width="150">
                                        </span>
                                </div>                  
                        </div>
                        <hr>
                        <div class="d-flex ">
                                <div>
                                    <span class="img-control">
                                        <img src="../image/laptop.png" alt="logo" height="150" width="150">
                                    </span>
                                </div>
                                <div class="preface">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores eveniet magnam assumenda, repudiandae vel fugit porro accusamus? <br> Tenetur sequi nam aliquam. Quae, unde facilis. Ipsam culpa expedita debitis rerum suscipit. <br><br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero corporis perspiciatis optio? Quo in ipsam quod exercitationem quisquam laudantium nobis possimus animi tempora iste itaque soluta, sequi officiis ad perspiciatis!. <br><br>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat in eveniet sequi vitae vero quia, tenetur ratione maxime et repellendus! <br> Ea consectetur distinctio eveniet, obcaecati omnis quo eius? Eveniet, pariatur!
                                </span>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex ">
                                <div class="preface">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores eveniet magnam assumenda, repudiandae vel fugit porro accusamus? <br> Tenetur sequi nam aliquam. Quae, unde facilis. Ipsam      culpa expedita debitis rerum suscipit. <br><br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero corporis perspiciatis optio? Quo in ipsam quod exercitationem quisquam <br> laudantium nobis possimus animi tempora iste itaque soluta, sequi officiis ad perspiciatis!. <br><br>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat in eveniet sequi vitae vero quia, tenetur ratione maxime et repellendus! <br> Ea consectetur distinctio eveniet, obcaecati omnis quo eius? Eveniet, pariatur!
                                        </span>
                                </div>
                                <div >
                                        <span style ="float: right; margin-left: 150px;" class="">
                                            <img style="border: 1px solid black;" src="../image/laptop.png" alt="logo" height="150" width="150">
                                        </span>
                                </div>                  
                        </div>
             </div>
             <hr>
             <div class="ml-3">
                 <h5>Please read it before signing in or sign up:</h5>
                 <ul>
                     <li>Rule 1</li>
                     <li>Rule 2</li>
                     <li>Rule 3</li>
                     <li>Rule 4</li>
                     <li>Rule 5</li>
                     <li>Rule 6</li>
                 </ul>
             </div>
        </div>  
        <hr>
        <!-- Footer -->
            <footer class="page-footer font-small blue">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <span>Online Voting System </span>
            </div>
            <!-- Copyright -->

            </footer>
<!-- Footer -->


    <!-- these are javascript links -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>