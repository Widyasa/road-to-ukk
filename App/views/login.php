

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                                    </div>
                                    <form class="user" action="<?=BASEURL?>/login/store" method="post">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control form-control-user"
                                                   id="exampleInputEmail" name="username" aria-describedby="emailHelp"
                                                   placeholder="input username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                   id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <!--                                        <div class="form-group">-->
                                        <!--                                            <div class="custom-control custom-checkbox small">-->
                                        <!--                                                <input type="checkbox" class="custom-control-input" id="customCheck">-->
                                        <!--                                                <label class="custom-control-label" for="customCheck">Remember-->
                                        <!--                                                    Me</label>-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <!--                                        <hr>-->
                                        <!--                                        <a href="index.html" class="btn btn-google btn-user btn-block">-->
                                        <!--                                            <i class="fab fa-google fa-fw"></i> Login with Google-->
                                        <!--                                        </a>-->
                                        <!--                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">-->
                                        <!--                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook-->
                                        <!--                                        </a>-->
                                    </form>
<!--                                    <hr>-->
<!--                                    <div class="text-center">-->
<!--                                        <a class="small" href="forgot-password.html">Forgot Password?</a>-->
<!--                                    </div>-->
<!--                                    <div class="text-center">-->
<!--                                        <a class="small" href="register.html">Create an Account!</a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

