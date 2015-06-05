<div class="col-sm-9 padding-right">
    <h2 class="title text-center"><?=__('Register')?></h2>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-2">
                    <div class="signup-form"><!--sign up form-->
                        <h2><?=__('Basic data')?></h2>
                        <form action="<?=URL::set_url('register/register')?>" method="post" id="register_form">
                            <input type="text" name="login" placeholder="<?=__('Login')?>*" />
                            <input type="email" name="email" placeholder="<?=__('Email Address')?>*" />
                            <input type="password" name="password" id="password" placeholder="<?=__('Password')?>*" />
                            <input type="password" name="rep_password" placeholder="<?=__('Repeat password')?>*" />

                            <h2><?=__('User data')?></h2>
                            <input type="text" name="fname" placeholder="<?=__('First Name')?>*" />
                            <input type="text" name="sname" placeholder="<?=__('Second Name')?>*" />
                            <input type="text" name="city" placeholder="<?=__('City')?>*" />
                            <input type="text" name="address" placeholder="<?=__('Address')?>*" />
                            <input type="text" name="phone" placeholder="<?=__('Phone')?>*" />

                            <button type="submit" class="btn btn-default"><?=__('Signup')?></button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
</div>

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
                },

                fname: "required",
                sname: "required",
                city: "required",
                address: "required",
                phone: "required"
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
                },
                fname: "<?=__('Required field')?>",
                sname: "<?=__('Required field')?>",
                city: "<?=__('Required field')?>",
                address: "<?=__('Required field')?>",
                phone: "<?=__('Required field')?>"
            }
        });
    });
</script>