

<body class="is-boxed has-animations" style="height: 100%;" cz-shortcut-listen="true">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="">
                                <img class="header-logo-image" src="<?php echo $host; ?>view/assets/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Code füt Loginformular-->
            <div class="overlay loginForm">
                <div class="limiter">

                    <div class="container-login100">

                        <div class="wrap-login100">

                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="<?php echo $host; ?>view/assets/images/img-01.png" alt="IMG">
                            </div>

                            <form class="login100-form validate-form">
                                <span class="login100-form-title">
                                    Member Login
                                </span>

                                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                    <input class="input100 input_login_userid" type="text" name="login_iserid" placeholder="UserId">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100 input_login_pw" type="password" name="login_pw" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="login100-form-btn login_btn">
                                        Login
                                    </div>
                                </div>

                                <div class="text-center p-t-12">
                                    <span class="txt1">
                                        Forgot
                                    </span>
                                    <a class="txt2" href="#">
                                        Username / Password?
                                    </a>
                                </div>

                                <div class="text-center p-t-136">
                                    <a class="txt2 exitForm_register" href="#" >
                                        Create your Account
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </form>
                            <div class="exitForm exitForm_style">
                                <img src="<?php echo $host; ?>view/assets/images/close.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--#end -->
            <!-- Code für Registerformular-->
            <div class="overlay registerForm">
                <div class="limiter">

                    <div class="container-login100">

                        <div class="wrap-login100">

                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="<?php echo $host; ?>view/assets/images/img-01.png" alt="IMG">
                            </div>

                            <form class="login100-form validate-form">
                                <span class="login100-form-title">
                                    Member Register
                                </span>

                                <!-- Input Name -->
                                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                    <input class="input100 input_register_name" type="text" name="register_name" placeholder="Name">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <!-- Input Email -->

                                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                    <input class="input100 input_register_em" type="text" name="register_email" placeholder="Email">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <!-- Input UserId -->

                                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                    <input class="input100 input_register_userid" type="text" name="register_userid" placeholder="UserID">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100 input_register_pw" type="password" name="register_pw" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="container-login100-form-btn register_btn">
                                    <div class="login100-form-btn ">
                                        Register
                                    </div>
                                </div>

                                <div class="text-center p-t-12">
                                    <!-- <span class="txt1">
                                        Forgot
                                    </span>
                                    <a class="txt2" href="#">
                                        Username / Password?
                                    </a> -->
                                </div>

                                <div class="text-center p-t-136">
                                    <a class="txt2 exitForm_login" href="#" >
                                        You have an account
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </form>
                            <div class="exitForm exitForm_style">
                                <img src="<?php echo $host; ?>view/assets/images/close.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--#end -->
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title mt-0">Projects</h1>
                            <p class="hero-paragraph">Our Projects Groupchat are used every where by young and old.</p>
                            <div class="hero-cta"><button class="button button-primary login">Login</button><button class="button register" >Register</button><br><br><a href="Projects.zip" class="button button-primary" >Projekt Herunterladen</a></div>
                        </div>
                        <div class="hero-figure anime-element">
                            <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;"></rect>
							</svg>
                            <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg" style="transform: rotate(45deg) scale(1); opacity: 1;"></div>
                            <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg" style="transform: rotate(-45deg) scale(1); opacity: 1;"></div>
                            <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg" style="transform: rotate(0deg) scale(1); opacity: 1;"></div>
                            <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg" style="transform: rotate(-135deg) scale(1); opacity: 1;"></div>
                            <div class="hero-figure-box hero-figure-box-05" style="transform: scaleX(1) scaleY(1) perspective(500px) rotateY(-15deg) rotateX(8deg) rotateZ(-1deg);"></div>
                            <div class="hero-figure-box hero-figure-box-06" style="transform: scaleX(1) scaleY(1) perspective(500px) rotateZ(20deg);"></div>
                            <div class="hero-figure-box hero-figure-box-07" style="transform: scaleX(1) scaleY(1) perspective(500px) rotateZ(20deg);"></div>
                            <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg" style="transform: rotate(-22deg) scale(1); opacity: 1;"></div>
                            <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg" style="transform: rotate(-52deg) scale(1); opacity: 1;"></div>
                            <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg" style="transform: rotate(-50deg) scale(1); opacity: 1;"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    