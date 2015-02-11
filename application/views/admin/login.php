<div class="account-container">

    <div class="content clearfix">

        <form action="login/auth" method="post">

            <h1>Member Login</h1>

            <?php if(isset($errors)) { ?>
                <div class="controls">
                <? foreach($errors as $error): ?>
                    <div class="alert alert-block">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?=$error?>
                    </div>
                <?php endforeach; echo '</div>'; } ?>

            <div class="login-fields">

                <p>Please provide your details</p>

                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="login" value="" placeholder="Login" class="login username-field" />
                </div> <!-- /field -->

                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
                </div> <!-- /password -->

            </div> <!-- /login-fields -->

            <div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="remember" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>

                <button class="button btn btn-success btn-large">Sign In</button>

            </div> <!-- .actions -->



        </form>

    </div> <!-- /content -->

</div> <!-- /account-container -->



<div class="login-extra">
    <a href="#">Reset Password</a>
</div> <!-- /login-extra -->