<div class="col-sm-9 padding-right">
    <h2 class="title text-center"><?=__('Account')?></h2>
    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#info" data-toggle="tab"><?=__('Contact data')?></a></li>
<!--                <li><a href="#orders" data-toggle="tab">--><?//=__('Orders')?><!--</a></li>-->
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active fade in" id="info" >
                <div class="col-sm-12 profile-info">
                    <div class="row">
                        <div class="col-sm-3 right"> <?=__('First Name')?>: </div>
                        <div class="col-sm-8">
                            <p><?=@$main['fname']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 right"> <?=__('Second Name')?>: </div>
                        <div class="col-sm-8">
                            <p><?=@$main['sname']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 right"> <?=__('City')?>: </div>
                        <div class="col-sm-8">
                            <p><?=@$main['city']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 right"> <?=__('Address')?>: </div>
                        <div class="col-sm-8">
                            <p><?=@$main['address']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 right"> <?=__('Phone')?>: </div>
                        <div class="col-sm-8">
                            <p><?=@$main['phone']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 right"> <a href="#" class="edit btn btn-default" style="margin-right: 10px"><?=__('Edit')?></a> </div>
                    </div>
                </div>

                <div class="col-sm-12 profile-edit">
                    <div class="signup-form profile-form">
                        <div class="row">
                            <form action="<?=URL::set_url('profile/save')?>" method="post" id="register_form">
                                <div class="row">
                                    <div class="col-sm-3 right"> <?=__('First Name')?>: </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="fname" placeholder="<?=__('First Name')?>" value="<?=@$main['fname']?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 right"> <?=__('Second Name')?>: </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="sname" placeholder="<?=__('Second Name')?>" value="<?=@$main['sname']?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 right"> <?=__('City')?>: </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="city" placeholder="<?=__('City')?>" value="<?=@$main['city']?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 right"> <?=__('Address')?>: </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="address" placeholder="<?=__('Address')?>" value="<?=@$main['address']?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 right"> <?=__('Phone')?>: </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="Phone" placeholder="<?=__('Phone')?>" value="<?=@$main['phone']?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 right"> </div>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-default"><?=__('Save')?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="tab-pane fade" id="orders" >
                <div class="col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p><b>Write Your Review</b></p>

                    <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                        <textarea name="" ></textarea>
                        <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                        <button type="button" class="btn btn-default pull-right">
                            Submit
                        </button>
                    </form>
                </div>
            </div>-->

        </div>
    </div><!--/category-tab-->
</div>

<script>
    $(document).ready(function() {
        $("#register_form").validate({
            rules: {
                fname: "required",
                sname: "required",
                city: "required",
                address: "required",
                phone: "required"
            },
            messages: {
                fname: "<?=__('Required field')?>",
                sname: "<?=__('Required field')?>",
                city: "<?=__('Required field')?>",
                address: "<?=__('Required field')?>",
                phone: "<?=__('Required field')?>"
            }
        });

        $("a.edit").click(function(){
            $("div.profile-info").fadeOut();
            $("div.profile-edit").fadeIn();
            return false;
        });
    });
</script>