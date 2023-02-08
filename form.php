<!DOCTYPE html>
<html>
  <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">

            <form action="login.php" method="POST">

              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="fname"/>
              </div>

              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lname"/>
              </div>

              <!-- <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline">
                    <input type="radio" name="gender" value="m" id="male"/>Male</label>

                  <label for="female" class="radio-inline">
                    <input type="radio" name="gender" value="f" id="female" />Female</label>

                  <label for="others" class="radio-inline">
                    <input type="radio" name="gender" value="o" id="others" />Others</label>
                </div>
              </div> -->

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text"  class="form-control"  id="email" name="email" />
              </div>

              <!-- div class="form-group">
                <label for="password">Password</label>
                <input  type="password"  class="form-control"  id="password" name="password" />
              </div>

              <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" class="form-control" id="number" name="number" />
              </div> -->

              <input type="submit" class="btn btn-primary"/>
            </form>

          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>