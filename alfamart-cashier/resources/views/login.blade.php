<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body style="background-color: #ffeaed;">      
        <!-- Logo Image -->
        <div class="container w-50 p-5 mt-5">
            <div class="card p-4 shadow t-5" style="border:none;">
                <form>
                <img src="logo_alfamart.png" width="100" height="100" alt="Logo Alfamart">
                    <h3 class="card-title text-center fw-bold" style="color:#c00003">Login</h3>

                    <!-- Input Email -->
                    <div class="form-group pt-3 pb-2">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" id="Username" placeholder="Masukkan username">
                    </div>

                    <!-- Input Password -->
                    <div class="form-group pb-4">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" placeholder="Masukkan password">
                    </div>

                    <!-- Button -->
                    <div class="text-center">
                        <button class="btn mb-4 w-100" type="submit" style="background-color: #c00003; color: white;">Login</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- Footer -->
        <footer class="text-center" style="color: #E2F5FC;">
          <!-- Copyright -->
          <div class="text-center p-3">
            © 2023 PT. Alfamart • All Rights Reserved.
          </div>
          <!-- Copyright -->
        </footer>

    </body>
</html>