<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="signup-form"><!--sign up form-->
                    <h2><?=__('New User Signup!')?></h2>
                    <form action="<?=URL::set_url('register/register')?>" method="post" id="register_form">
                        <input type="text" name="login" placeholder="<?=__('Login')?>" />
                        <input type="email" name="email" placeholder="<?=__('Email Address')?>" />
                        <input type="password" name="password" id="password" placeholder="<?=__('Password')?>" />
                        <input type="password" name="rep_password" placeholder="<?=__('Repeat password')?>" />
                        <button type="submit" class="btn btn-default"><?=__('Signup')?></button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<script>
    $(document).ready(function() {
        $("#register_form").validate({
            rules: {
                login: "required",
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                rep_password: {
                    required: true,
                    equalTo: "#password"
                }
            },
            messages: {
                login: "<?=__('Required field')?>",
                password: "<?=__('Required field')?>",
                email: {
                    required: "<?=__('Required field')?>",
                    email: "<?=__('Field must be email')?>"
                },
                rep_password: {
                    required: "<?=__('Required field')?>",
                    equalTo: "<?=__('Password must be matched')?>"
                }
            }
        });
    });
</script>