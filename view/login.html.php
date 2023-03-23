<?php require Functions::view('components/header.html'); ?>

<section id="login">
    <div class="logScreen">
        <h2>Sign In</h2>
    </div>

    <div class="log-form-section">
        <h1 class="text-center log-title">Connect with us for a better experience</h1>
        <form action="#" id="login-form">
            <h3>Sign In with</h3>
            <div class="form-row">
                <label for="log_username">Your Username</label>
                <input type="text" name="username" id="log_username">
            </div>

            <div class="form-row">
                <label for="log_psw">Password</label>
                <input type="password" name="user_psw" id="log_psw">
            </div>

            <div class="forgotten-psw-ct">
                <p style="margin: 0; float: right; font-size: 18px"><a href="#">Forget Password ?</a></p>
            </div>
            <div class="btn-wrapper">
                <button type="submit">Sign In</button>
            </div>
            <div class="login-link-ct">
                <p class="extra-txt">
                    Don't have an account? <a class="login-link" href="<?= Functions::url('signup'); ?>">Register</a> 
                </p>
            </div>
        </form>
    </div>
</section>


<?php require Functions::view('components/footer.html'); ?>
