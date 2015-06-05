<div class="col-sm-9 padding-right">
    <h2 class="title text-center"><?=__('Login')?></h2>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-2 text-center">
                    <div class="login-form"><!--login form-->
                        <h2><?=__('Login to your account')?></h2>
                        <? if(isset($info_mess)): ?>
                            <div class="alert alert-info">
                                <i class="icon-check"></i>  <?=$info_mess;?>
                            </div>
                        <? endif; ?>
                        <form action="<?=URL::set_url('login/login')?>" method="post" id="login_form">
                            <input type="text" name="login" placeholder="<?=__('Login or Email')?>" />
                            <input type="password" name="password" placeholder="<?=__('Password')?>" /><br/>
                                            <span>
                                                <input type="checkbox" class="checkbox" name="remember">
                                                <?=__('Keep me signed in')?>
                                            </span>
                            <button type="submit" class="btn btn-default"><?=__('Enter')?></button>
                        </form>
                    </div><!--/login form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
</div>

<script>
    $(document).ready(function() {
        $("#login_form").validate({
            rules: {
                login: "required",
                password: "required"
            },
            messages: {
                login: "<?=__('Required field')?>",
                password: "<?=__('Required field')?>"
            }
        });
    });
</script>