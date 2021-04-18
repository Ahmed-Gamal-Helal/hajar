<?php
    include 'controllers/upper-header.php';
?>
<hr class="my-0">
<div class="container py-20 px-0">
    <div class="row">
        <div class="col-sm-2 col-xs-3 mt-20 mb-20">
            <button class="btn btn-warning" href="#add-advert" data-toggle="modal" data-target="#add-advert">إضافة اعلان</button>
        </div>
        <div class="col-sm-8 col-xs-9 mt-20">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="..." placeholder="ابحث هنا .. ">
                <div class="input-group-btn">
                    <div class="select w-120">
                        <select  class="form-control select-style" >
                            <option value="" selected disabled class="option form-control" >المدينه</option>
                            <option class="option form-control">2</option>
                            <option class="option form-control">3</option>
                            <option class="option form-control">4</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary search-btn" type="button"><i class="icon-search"></i></button>
            </div>
        </div>
        <div class="col-sm-2 col-xs-12 text-center">
            <section class="video-show">
                <a href="#" class="color-white"><i class="icon-play"></i><br />
                <strong>شاهد الفيديو</strong>
                </a>
            </section>
        </div>
    </div>
</div>
<?php
    include 'controllers/header.php';
?>

    <div class="container px-0 ">
        <section class="comment-area my-10 py-10">
            <ul class="nav nav-tabs auction-tabs ">
                <li class="active"><button class="btn btn-default" data-toggle="tab" href="#personal-info"><strong>المزادات القادمه</strong></button></li>
                <li><button class="btn btn-default" data-toggle="tab" href="#change-pass"><strong>المزادات الحاليه</strong></button></li>
                <li><button class="btn btn-default" data-toggle="tab" href="#change-phone"><strong>المزادات السابقه</strong></button></li>
            </ul>

        </section>
        <div class="profilepage">
            <div class="row">
                <div class="col-md-3 col-xs-6 mb-4 px-0">
                    <div class="input-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary w-80"><i class="icon-menu px-10"></i> كل الأقسام</button>
                            <button type="button" class="btn btn-primary dropdown-toggle h-34" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 mb-4 px-0">
                    <div class="input-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default w-80"> نوع المزاد</button>
                            <button type="button" class="btn btn-default dropdown-toggle h-34" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu radio-list">
                                <li>
                                    <label for="a" class="px-10">الكل</label>
                                    <input type="radio" id="a" name="y" value="x">
                                </li>
                                <hr class="my-5">
                                <li>
                                    <label for="b" class="px-10">مزاد بيع عادى</label>
                                    <input type="radio" id="b" name="y" value="x">
                                </li>
                                <hr class="my-5">
                                <li>
                                    <label for="c" class="px-10">مزاد بيع مباشر</label>
                                    <input type="radio" id="c" name="y" value="x">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 mb-4 px-0">
                    <div class="input-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default w-80"> اختر المدينه</button>
                            <button type="button" class="btn btn-default dropdown-toggle h-34" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 mb-4">
                    <button type="button" class="btn btn-primary">بحث</button>
                </div>
            </div>
            <hr class="mt-10">
            <div class="tab-content">
                <div id="personal-info" class="tab-pane fade in active">
                    <!-- form -->
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary mt-30">المزيد</button>
                        </div>
                    </div>
                </div>
                <!-- change-pass -->
                <div id="change-pass" class="tab-pane fade">
                <div class="row">
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        
                    </div>
                </div>
                <!-- change-phone -->
                <div id="change-phone" class="tab-pane fade">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                                include 'controllers/auction.php';
                            ?>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary mt-30">المزيد</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="comment-area mt-30">
        <h4 class="text-center mt-30 related-ads-title"><strong>قسم الحراج </strong></h4>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-20">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="..." placeholder="ابحث هنا .. ">
                                <div class="input-group-btn">
                                    <div class="select w-120">
                                        <select  class="form-control select-style" >
                                            <option value="" selected disabled class="option form-control" >المدينه</option>
                                            <option class="option form-control">2</option>
                                            <option class="option form-control">3</option>
                                            <option class="option form-control">4</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary search-btn" type="button"><i class="icon-search"></i></button>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 text-reverse">
                            <button class="btn btn-default pa-9" type="button"><i class="icon-menu"></i></button>
                            <button class="btn btn-default pa-9" type="button"><i class="icon-map"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">

                    <ul class="nav nav-tabs">
                        <li class="active"><button class="pa-9" data-toggle="tab" href="#cars"><i class="icon-car color-primary pa-9"></i><br><small><strong>حراج السيارات</strong></small></button></li>
                        <li><button class="pa-9" data-toggle="tab" href="#buildings"><i class="icon-home-1 color-primary pa-9"></i><br><small><strong>حراج العقارات</strong></small></button></li>
                        <li><button class="pa-9" data-toggle="tab" href="#electronics"><i class="icon-electronics color-primary pa-9"></i><br><small><strong>حراج الاجهزه</strong></small></button></li>

                    </ul>
                </div>

                <div class="tab-content">
                    <div id="cars" class="tab-pane fade in active">
                        <div class="col-sm-12 mb-60 mt-20">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default mx-5 px-5"><small>تويوتا</small></button>
                                <button type="button" class="btn btn-default mx-5 px-5"><small>فورد</small></button>
                                <button type="button" class="btn btn-default mx-5 px-5"><small>شيفروليه</small></button>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary mt-30">المزيد</button>
                        </div>
                    </div>
                    <div id="buildings" class="tab-pane fade in">
                        <div class="col-sm-12 mb-60 mt-20">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default mx-5 px-5"><small>مبانى</small></button>
                                <button type="button" class="btn btn-default mx-5 px-5"><small>فلل</small></button>
                                <button type="button" class="btn btn-default mx-5 px-5"><small>روف</small></button>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary mt-30">المزيد</button>
                        </div>
                    </div>
                    <div id="electronics" class="tab-pane fade in">
                        <div class="col-sm-12 mb-60 mt-20">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default mx-5 px-5"><small>سامسونج</small></button>
                                <button type="button" class="btn btn-default mx-5 px-5"><small>ابل</small></button>
                                <button type="button" class="btn btn-default mx-5 px-5"><small>شاومى</small></button>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                include 'controllers/product.php';
                            ?>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary mt-30">المزيد</button>
                        </div>
                    </div>
                </div>

                
            </div>
            </div>

        </div>
    </section>
        

            <!-- sigup modal -->
        <div class="modal" id="add-advert"
            role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true"> 
    
            <div class="modal-dialog signmodel"> 
                <div class="modal-content"> 
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <section>
                        <img src="images/green/choose.png" class="mb-4 mx-auto" width="60px" alt="">
                    </section>
                    <h4 class="mb-20"><strong>من فضلك اختر نوع الاعلان</strong></h4>

                    <ul class="d-flex space-around">
                       
                        <li><a href="terms.php" class="color-black">
                            <article>
                            <img src="images/auction.png" class="mb-4 mx-auto gray" width="100%" alt="">

                                <h5><strong>اعلان مزاد</strong></h5>
                            </article>
                        </a></li>
                        <li><a href="ad-type.php" class="color-black">
                        <article>
                        <img src="images/adds.png" class="mb-4 mx-auto primary" width="100%" alt="">

                                <h5><strong>اعلان حراج</strong></h5>
                            </article>
                        </a></li>
                    </ul>
                </div> 
            </div> 
        </div>

<?php
    include 'controllers/footer.php';
?>

