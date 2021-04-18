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
             <li class="breadcrumb-item active" aria-current="page">تسجيل الدخول</li>
         </ol>
     </div>
</nav>
<div class="container">
    <div class="login-p">
        <section class="form-section">
            <form action="">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 mb-30 px-30">
                        <article class="mb-20">
                            <h4><strong>تسجيل الدخول</strong></h4>
                            <p><small>هذا النص يمكن استبداله</small></p>
                        </article>
                        <form action="">
                            <div class="input-group">
                                <h6><strong>اسم المستخدم</strong></h6>
                                <input type="text" class="form-control"  placeholder="برجاء ادخال اسم المستخدم" >
                            </div>
                            <div class="input-group">
                                <h6><strong>كلمة المرور</strong></h6>
                                <input type="password" class="form-control" placeholder="برجاء ادخال كلمة المرور">
                            </div><!-- /input-group -->
                            <button type="submit" class="btn btn-primary mt-20 mb-20 radius-20">تأكيد</button>
                        </form>
                    </div>
                    <div class="col-sm-6 illustrated"></div>
    
                </div>
            </form>
        </section>
    </div>
</div>

<?php
    include 'controllers/footer.php';
?>