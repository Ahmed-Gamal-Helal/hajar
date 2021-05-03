<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<nav aria-label="breadcrumb" class="breadcrumb">
     <div class="container">
         <ol class="breadcrumb mb-0">
             <li class="breadcrumb-item"><a href="index.php">الرئيسيه</a></li>
             <li class="breadcrumb-item active" aria-current="page">التنبيهات</li>
         </ol>
     </div>
</nav>
<div class="container m-h-50 mb-60">
    <section class="notifications">
        <a href="#">
            <div class="row notifications-card type-2 mt-20">             
                <div class="col-sm-4">
                    <article>
                        <h5 class="my-0 color-black d-flex"><span class="alert-dot"></span><strong>رقم التنبيه : </strong><span class="px-10">123 123</span></h5>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article>
                        <h5 class="my-0 color-black d-flex"><strong>حالة التنبيه : </strong><span class="px-10">جديد</span></h5>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article>
                        <h5 class="my-0 color-black d-flex"><strong>رقم الطلب : </strong><span class="px-10">123 123</span></h5>
                    </article>                
                </div>
            </div>
        </a>
      
       
    </section>
    <hr class="mt-20 mb-20">
    <section>
        <div class="container px-0">
            <h3 class="mb-20"><span class="plus-icon">+</span><strong>إضافة تنبيه</strong></h3>
            <div class="row bordered">
                <form action="">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <h6><strong>رقم الطلب</strong></h6>
                            <input type="text" class="form-control"  placeholder="برجاء ادخال رقم الطلب" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <h6><strong>نوع التنبيه</strong></h6>
                            <input type="number" class="form-control" placeholder="برجاء ادخال نوع التنبيه هنا">
                        </div><!-- /input-group -->
                    </div>
                    <div class="col-sm-12">
                        <h6><strong>ملاحظات</strong></h6>
                        <textarea name="msg" cols="10" rows="5"></textarea>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary mt-20 mb-20 radius-20">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php
    include 'controllers/footer.php';
?>