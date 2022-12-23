
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div>
       
    </div>
    <div>
    <form action="registration.php" method="post">
        <div class="container">
        <div class="row">
            <div class="col-sm-3" >
    <h1>Registration</h1>
    <hr class="mb-3">
    <label for="firstname">First Name :</label>
    <input class="form-control" id="firstname" type="text" name="firstname" id="firstname" required>
    <label for="lastname">Last name:</label>
    <input class="form-control" id="lastname" type="text" name="lastname" id="lastname" require>
    <label for="gender">Gender: </label>
        <select class="form-control" id="gender" name="gender" id="gender" size="1">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Transgender">Transgender</option>
        </select>
        <label for="email">Enter your email:</label>
        <input class="form-control" id="email" type="email" id="email" name="email" required>
        <label for="Password">Password:</label>
        <input class="form-control" id="password" type="password" id="Password" name="password" name="password">
        <label for="phone">Enter a phone number:</label>
        <input class="form-control" id="phone" type="tel" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{5}[0-9]{5}" required>
        <hr class="mb-3">
        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
        </div>
        </div>
        </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        
        $(function(){
            $('#register').click(function(e){

                var valid=this.form.checkValidity();
                if(valid){

                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var gender = $('#gender').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var phone = $('#phone').val();

                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data:{firstname:firstname, lastname:lastname,gender:gender,email:email,password:password,phone:phone},
                        success:function(data){
                            Swal.fire({
                'title' : 'Successful',
                'text' : data,
                'type'  : 'success'
                             })
                        },
                        error:function(data){
                            Swal.fire({
                'title' : 'Errors',
                'text' : 'There were errors while saving the data',
                'type'  : 'Error'
                             })
                        }
                    });
                   
                }else{
                   
                }

             


            });

           
        });
    </script>
</body>
</html>