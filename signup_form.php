
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .directory-link,a{
            float: right;
           

        }
        .directory-link a{
            text-decoration: none;
        }
        h5{
            display: flex;
            justify-content: center;
        }
        .back_in_home, .back_in_home a{
            float: left;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 m-auto ">
            
            <form action="../api/validation.php" method="POST" enctype="multipart/form-data" class=" py-5 px-5 mt-1 shadow-lg rounded">
            <span class="back_in_home"><a href="../api/index.php"><i class="fa fa-home" aria-hidden="true"> Back to home</i></a> </span>
                <h5>Sign up here if you are voter/Group</h5> 
                <hr>
                    <div class="form-group">
                        <label for="username"><strong>Username/Group</strong></label>
                        <input type="text" class="form-control" name="username" id="userid" placeholder="Enter your username/groupname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><strong>Email address</strong></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><strong> Password</strong></label>
                        <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><strong>Re-Enter</strong></label>
                        <input type="password" class="form-control" name="cpass" id="exampleInputcPassword1" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><strong>Address</strong></label>
                        <input type="text" class="form-control" name="address" id="exampleInputaddress" aria-describedby="addresshelp" placeholder="Enter your address">
                    </div>
                    <div class="form-group">
                        <label for="contactfield"><strong> Contact</strong></label>
                        <input type="number" class="form-control" name="phone" id="contactid" aria-describedby="contacthelp" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="citizenship"><strong> Citizenship ID Card</strong></label>
                        <input class="form-control" type="number" id="citizen" name="citizenship" placeholder="Enter your National ID card number" >
                    </div>
                    <div class="">
                        <label for="photo"><strong>Phote</strong></label>
                        <input class="" type="file" id="photo" name="photo" >
                    </div>
                    <br>
                    <div>
                        <label for="role"><strong> Choose Your Role</strong></label>
                        <select name="role" aria-label="Default select example" required>
                            <option selected>Open this select role</option>
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" name="signup" class="btn btn-primary">Submit</button>
                    <br>
                    <span class="directory-link">
                        Have an account?<a href="../api/signin_form.php">  Sign in here!</a> 
                      </span>
            </form>
        </div>
    </div>
</body>
</html>