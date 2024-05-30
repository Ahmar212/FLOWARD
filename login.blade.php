   <!DOCTYPE html>
     <html lang="en">
       <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     </head>
     <body>
      <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="card-title text-center">Login</h3>
                    <form>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <div class="text-center mt-3">
                            <a href="#" data-toggle="modal" data-target="#forgotPasswordModal">Forgot your password?</a>
                            <p>Don't have an account? <a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </div>
     </div>
     <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
    <div class="modal">
        <div class="modal">
            <div class="modal">
                <h5 class="modal" id="forgotPasswordModalLabel">Forgot Your Password?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal">
                <form>
                    <div class="form-group">
                        <label for="forgotEmail">Enter your email address</label>
                        <input type="email" class="form-control" id="forgotEmail" placeholder="Email address">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
      </div>
          <div class="modal fade" id="signupModal" tabindex="-2" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal">
        <div class="modal">
            <div class="modal">
                <h5 class="modal" id="signupModalLabel">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal">
                <form>
                    <div class="form-group">
                        <label for="signUpEmail">Email address</label>
                        <input type="email" class="form-control" id="signUpEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="signUpPassword">Password</label>
                        <input type="password" class="form-control" id="signUpPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                    </div>
                      <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                      </form>
                       </div>
           </div>
       </div>
           </div>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </body>
    </html>



    