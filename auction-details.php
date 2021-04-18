<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>تفاصيل المزاد</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الرئيسيه </a></li>
            <li class="breadcrumb-item active" aria-current="page">تفاصيل المزاد</li>
        </ol>
    </nav>
    </article>
</section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- slider -->
                <!-- to be displayed correctly both section must have same image src 
                the loop will be done twice
                -->
                <div class="slider-for">
                    <section>
                        <img class="img-responsive h-50" src="images/illustrations_images/red_car.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/illustrations_images/red_car.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/022.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/illustrations_images/red_car.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/022.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/illustrations_images/red_car.png" alt="">
                    </section>
                </div>
                <div class="slider-nav">
                    <div class="item ">
                        <img class="img-responsive" src="images/illustrations_images/red_car.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/illustrations_images/red_car.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/022.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/illustrations_images/red_car.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/022.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/illustrations_images/red_car.png" alt="">
                    </div>
                </div>

            </div>
            <!-- <div class="col-md-7">
                <section class="product-card">
                    <div class="row">
                        <div class="col-sm-12 padding-adjust">
                            <h4><strong>Pre owned rolex</strong></h4>
                            <p> <img src="images/saudi.svg" class="mb-4" width="20px" alt=""> <span class="px-10 size-10 color-gray">Rolex watches</span> - <span class="px-10 size-10 color-gray">Saudi Arabia</span> <span class="rate">4.5 <i class="icon-star"></i></span></p>
                            <p class="mt-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde sequi nobis asperiores eos quidem saepe consequuntur sint, atque dignissimos, ut perferendis commodi rerum aspernatur ratione doloremque ipsam quibusdam similique!</p>
                        </div>
                        <div class="col-sm-12 padding-adjust">
                            <h5 class="mt-20"><strong>Product Details</strong></h5>
                            <ul>
                                <li><p><strong>Year: </strong><span>2020</span></p></li>
                                <li><strong>Shape: </strong><span>Rounded</span></li>
                                <li><strong>Weight: </strong><span>10gm</span></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group mt-30" role="group" aria-label="...">
                            <button type="button" class="btn btn-default text-center"><a href="messages.php"><i class="icon-message_square"></i><span class="px-10">Send Message</span></a></button>
                            <button type="button" class="btn btn-default text-center is-favorite"><i class="icon-heart"></i><span class="px-10">Favorite</span></button>
                            <button type="button" class="btn btn-default text-center"><i class="icon-whatsapp"></i><span class="px-10">Send Whatsapp</span></button>
                            <button type="button" class="btn btn-default text-center"><i class="icon-flag"></i><span class="px-10">Report</span></button>                            

                        </div>
                    </div>
                </section>
            </div> -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h5 class="mb-20 d-flex space-between"><strong>سياره سكودا فليشا</strong>
                    <span><i class=" icon-love color-primary"></i> <span class="size-12 color-gray"> 30 اعجاب</span></span>
                </h5>
                <article class="gray-bg my-10">
                    <ul>
                    <li class="d-flex space-between l-h-25"><strong>مباعه بـ </strong><strong class="color-primary">30 ريال سعودى</strong></li>
                        <hr class="my-10">
                        <li class="d-flex space-between l-h-25"><span>مدة المزاد</span><strong>30 دقيقه</strong></li>
                        <li class="d-flex space-between l-h-25"><span>المدينه</span><strong>الرياض</strong></li>
                        <li class="d-flex space-between l-h-25"><span>نوع المزاد</span><strong>بيع عادى</strong></li>
                    </ul>
                </article>
                <hr class="mt-20">
                <div class="row">
                    <div class="col-xs-2">
                        <img src="images/vectors/bidder.png" class="mb-4 mx-auto gray" width="100%" alt="">
                    </div>
                    <div class="col-xs-7">
                        <div class="input-group mt-20">
                            <input type="text" class="form-control" placeholder="ادخل مبلغ السوم">
                            <span class="input-group-btn">
                                <button class="btn btn-primary pa-9" type="button"><i class="fa fa-paper-plane"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="mt-20">
            </div>
            <div class="col-sm-4">
                <section class="auction-timer">
                    <h5 class="text-center"><strong>هذا المزاد يبدأ خلال</strong></h5>
                    <section class="timer">
                        <ul class="d-flex">
                            <li><strong class="color-primary">30</strong><br><strong class="color-black">ثانيه</strong></li><span class="color-gray">|</span>
                            <li><strong class="color-primary">30</strong><br><strong class="color-black">دقيقه</strong></li><span class="color-gray">|</span>
                            <li><strong class="color-primary">30</strong><br><strong class="color-black">ساعه</strong></li>
                        </ul>
                    </section>
                    <hr class="my-10">
                    <ul>
                        <li class="mb-10"><i class="color-primary icon-active size-24"></i><strong class="color-primary">30</strong><span class="color-gray px-10">مزايد نشط</span></li>
                        <li class="mb-10"><i class="color-primary icon-reviews size-24"></i><strong class="color-primary">50</strong><span class="color-gray px-10">عدد المشاهدات</span></li>
                        <li class="mb-10"><i class="color-primary icon-total size-24"></i><strong class="color-primary">100</strong><span class="color-gray px-10">اجمالى السوم</span></li>
                    </ul>

                </section>
                <section class="auction-timer text-center">
                    <h5 ><strong>حالة المزاد</strong></h5>
                    <button class="btn btn-danger mx-auto">مزاد سابق</button>

                </section>
                
                <article class="gray-bg my-10">
                    <ul class="d-flex space-between">
                    
                        <li><a href="edit-ad.php"><i class=" icon-edit color-gray size-24"></i></a></li>
                        <li><a href="#report" data-toggle="modal" data-target="#report"><i class="icon-cancel color-gray size-24"></i></a></li>

                        <li><a href="#signupModal" data-toggle="modal" data-target="#signupModal"><i class="icon-mail color-gray size-24"></i></a></li>
                        <li><a href="#" class="color-red"><small >10</small><i class="icon-love size-24"></i></a></li>
                        <li><a href="#"><i class="icon-whatsapp color-gray size-24"></i></a></li>
                        <li><a href="#"><i class="icon-twitter-1 color-gray size-24"></i></a></li>
                    </ul>
                </article>
                <section class="text-reverse">
                    <button type="button" class="btn btn-primary mt-20" onclick="window.location.href='payment.php'">
                        <!-- <a href="messages.php"> -->
                        مزايده
                        <!-- </a>     -->
                    </button>
                </section>
                <section class="text-reverse">
                    <button type="button" class="btn btn-primary mt-20" onclick="window.location.href='delivery-codes.php'">
                        <!-- <a href="messages.php"> -->
                        كود تسليم المنتج
                        <!-- </a>     -->
                    </button>
                </section>
            </div>
        </div>
        <!-- Members -->
        <section class=" mt-30 mb-60">
            <div class="row">
                <div class="col-sm-12 ">
                    <i class="icon-userr color-primary"></i> <strong class="size-12">احمد آل ابو هشيمه </strong>
                </div>
                <div class="col-sm-12 ">
                    <i class=" icon-clock color-primary"></i> <span class="size-12 color-gray">منذ ساعه</span>
                </div>
                <div class="col-sm-9 ">
                    <p> <span class="size-12 color-gray my-10"> أضاف مبلغ سوم مقابل 50 ريال</span>
                    </p>
                </div>
                <div class="col-sm-3 text-reverse">
                    <button href="#confirmation" data-toggle="modal" data-target="#confirmation" class="btn btn-default">تأكيد البيع</button>
                </div>
            </div>
            <hr class="my-10">
            <div class="row">
                <div class="col-sm-12 ">
                    <i class="icon-userr color-primary"></i> <strong class="size-12">احمد آل ابو هشيمه </strong>
                </div>
                <div class="col-sm-12 ">
                    <i class=" icon-clock color-primary"></i> <span class="size-12 color-gray">منذ ساعه</span>
                </div>
                <div class="col-sm-9 ">
                    <p> <span class="size-12 color-gray my-10"> أضاف مبلغ سوم مقابل 50 ريال أضاف مبلغ سوم مقابل 50 ريال أضاف مبلغ سوم مقابل 50 ريال أضاف مبلغ سوم مقابل 50 ريال أضاف مبلغ سوم مقابل 50 ريال أضاف مبلغ سوم مقابل 50 ريال أضاف مبلغ سوم مقابل 50 ريال </span>
                    </p>
                </div>
                <div class="col-sm-3 text-reverse">
                    <button href="#confirmation" data-toggle="modal" data-target="#confirmation" class="btn btn-default">تأكيد البيع</button>
                </div>
            </div>
            <hr class="my-10">
            <div class="row">
                <div class="col-sm-12 ">
                    <i class="icon-userr color-primary"></i> <strong class="size-12">احمد آل ابو هشيمه </strong>
                </div>
                <div class="col-sm-12 ">
                    <i class=" icon-clock color-primary"></i> <span class="size-12 color-gray">منذ ساعه</span>
                </div>
                <div class="col-sm-9 ">
                    <p> <span class="size-12 color-gray my-10"> أضاف مبلغ سوم مقابل 50 ريال</span>
                    </p>
                </div>
                <div class="col-sm-3 text-reverse">
                    <button href="#confirmation" data-toggle="modal" data-target="#confirmation" class="btn btn-default">تأكيد البيع</button>
                </div>
            </div>
        </section>
        <div class="row mt-30">
            <div class="col-sm-12">
                <section class="gray-bg my-10">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-default">وصف المنتج</button>
                            <button type="button" class="btn btn-default">شرح المزاد</button>
                            <p class="color-red mt-20"><strong>ملحوظه : عمولة الموقع 5%</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mt-10"><strong>المزادات تبدأ من الساعه التاسعه صباحا وحتى الساعه التاسعه مساءا</strong></p>
                            <p class="color-red mt-20"><strong>يتعهد المزايد اذا كانت السلعه خارج مدينته يتحمل تكاليف الشحن</strong></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <article class=" mt-20">
                    <h5 class="color-primary"><strong>الوصف</strong></h5>
                    <p class="color-gray mt-20">هذا النص سيتغير هذا النص سيتغير
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا النص سيتغير 
                    </p>
                </article>
                <article class=" mt-20">
                    <h5 class="color-primary"><strong>شرح المزاد المباشر</strong></h5>
                    <p class="color-gray mt-20">هذا النص سيتغير هذا النص سيتغير
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا النص سيتغير 
                    </p>
                </article>
                <article class=" mt-20">
                    <h5 class="color-primary"><strong>شرح المزاد العادى</strong></h5>
                    <p class="color-gray mt-20">هذا النص سيتغير هذا النص سيتغير
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        هذا النص سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا
                        سيتغير هذا النص سيتغيرهذا النص سيتغير هذا 
                        النص سيتغير هذا سيتغير هذا النص سيتغيرهذا 
                        النص سيتغير هذا النص سيتغير هذا النص سيتغير 
                    </p>
                </article>
            </div>
        </div>
    </div>


    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-dialog text-justify"> 
            <div class="modal-content"> 
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 >رساله سريعه إلى :</h5>
                <h4 class="mb-20"><strong>أحمد آل شريف</strong></h4>
                <textarea name="" id="" cols="30" rows="6" placeholder="اكتب رسالتك هنا .."></textarea>
                <button type="button" class="btn btn-primary mt-20">ارسال</button>
            </div> 
        </div> 
    </div>
    <div class="modal fade text-center" id="report" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-dialog text-justify"> 
            <div class="modal-content"> 
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="mb-20"><strong>ابلاغ عن اعلان مخالف</strong></h4>
                <textarea name="" id="" cols="30" rows="6" placeholder="اكتب نوع المخالفه هنا .."></textarea>
                <button type="button" class="btn btn-primary mt-20">ابلاغ المشرف</button>
            </div> 
        </div> 
    </div>
    <div class="modal fade text-center" id="confirmation" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-dialog signmodel"> 
            <div class="modal-content"> 
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <img src="images/green/offers.png" alt="">
                <h4 class="mb-20 mt-30"><strong>هل أنت متأكد من قبول العرض ؟</strong></h4>
                <button type="button" class="btn btn-primary">موافق</button>
                <button type="button" class="btn btn-danger">لا أوافق</button>
            </div> 
        </div> 
    </div>
<?php
    include 'controllers/footer.php';
?>


