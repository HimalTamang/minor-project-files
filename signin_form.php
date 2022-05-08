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
        .sent-link{
            float: right;
        }
        .sent-link a{
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
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 mt-3 m-auto ">
            
            <form action="../api/authuntication.php" method="POST" class=" py-5 px-5 mt-2 shadow-lg rounded">
                <span class="back_in_home"><a href="../api/index.php"><i class="fa fa-home" aria-hidden="true"> Back to home</i></a> </span>
                <h5 >Sign up here if you are voter/Group</h5> 
                <hr>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1"><strong>Email address</strong></label>
                        <input type="email" name="uemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><strong> Password</strong></label>
                        <input type="password" name="upassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div>
                        <label for="role"><strong> Choose Your Role</strong></label>
                        <select class="form-select mr-5" name="role" aria-label="Default select example" required>
                            <option selected>Open this select role</option>
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-check">
                        <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me!</label></label>
                    </div>
                    <br>
                    <button type="submit"  name="signin" class="btn btn-primary">Submit</button>
                    <br>
                    <span class="sent-link">
                        Haven't an accout?<a href="../api/signup_form.php"> Sign up here!</a>
                    </span>
            </form>
        </div>
    </div>
</body>
</html>