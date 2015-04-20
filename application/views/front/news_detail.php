<div class="col-sm-9 padding-right">
    <div class="row">
        <div class="blog-post-area">
            <div class="single-blog-post">
                <h3><?=$news['name']?></h3>
                <div class="post-meta">
                    <ul>
                        <!--<li><i class="fa fa-user"></i> Mac Doe</li>
                        <li><i class="fa fa-clock-o"></i> 1:33 pm</li>-->
                        <li><i class="fa fa-calendar"></i> <?=$news['date']?></li>
                    </ul>
                </div>
                <p><?=$news['full_description']?></p> <br>
            </div>
            <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <ul class="list-inline item-details">
                        <li><a href="http://themifycloud.com">ThemifyCloud</a></li>
                        <li><a href="http://themescloud.org">ThemesCloud</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/blog-post-area-->

        <div class="rating-area">
            <ul class="ratings">
                <li class="rate-this">Rate this item:</li>
                <li>
                    <i class="fa fa-star color"></i>
                    <i class="fa fa-star color"></i>
                    <i class="fa fa-star color"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </li>
                <li class="color">(6 votes)</li>
            </ul>
            <ul class="tag">
                <li>TAG:</li>
                <li><a class="color" href="">Pink <span>/</span></a></li>
                <li><a class="color" href="">T-Shirt <span>/</span></a></li>
                <li><a class="color" href="">Girls</a></li>
            </ul>
        </div><!--/rating-area-->

        <div class="socials-share">
            <a href=""><img src="images/blog/socials.png" alt=""></a>
        </div><!--/socials-share-->
    </div>
</div>
