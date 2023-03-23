<?php require Functions::view('components/header.html'); ?>

<section id="signup">
    <div class="suScreen">
        <h2>Sign Up</h2>
    </div>

    <div class="su-form-section">
        <h1 class="text-center su-title">Connect with us for a better experience</h1>
        <form action="#" id="signup-form">
            <h3>Sign Up with</h3>
            <div class="form-row">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name" id="full_name">
            </div>

            <div class="form-row">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="form-row">
                <label for="user_email">Email</label>
                <input type="email" name="user_email" id="user_email">
            </div>

            <div class="form-row">
                <label for="user_psw">Password</label>
                <input type="password" name="user_psw" id="user_psw">
            </div>

            <div class="form-row">
                <label for="user_psw2">Confirm Password</label>
                <input type="password" name="user_psw2" id="user_psw2">
            </div>
            <div class="use-terms">
                <input type="checkbox" name="terms_of_use" id="terms_of_use">
                <label class="extra-txt" for="terms_of_use">I accept terms and conditions and general policy</label>
            </div>
            <div class="btn-wrapper">
                <button type="submit">Sign Up</button>
            </div>
            <div class="login-link-ct">
                <p class="extra-txt">
                    Already have an account? <a class="login-link" href="<?= Functions::url('login'); ?>">Sign In</a> 
                </p>
            </div>
        </form>
    </div>
</section>

<?php require Functions::view('components/footer.html'); ?>