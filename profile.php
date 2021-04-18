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
             <li class="breadcrumb-item active" aria-current="page">الملف الشخصى</li>
         </ol>
     </div>
</nav>
<div class="setting-account">
    <div class="container">
        <form action="">
            <div class="row bordered mt-30">
                <div class="col-sm-6">
                    <div class="input-group">
                        <h6><strong>الاسم</strong></h6>
                        <input type="text" class="form-control"  placeholder="برجاء ادخال الاسم" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <h6><strong>رقم الجوال</strong></h6>
                        <input type="text" class="form-control" placeholder="برجاء ادخال رقم الجوال">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <h6><strong>رقم الجواز</strong></h6>
                        <input type="text" class="form-control" placeholder="برجاء ادخال رقم الجواز">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <h6><strong>الجنسية</strong></h6>
                        <input type="text" class="form-control" placeholder="برجاء ادخال الجنسية">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <h6><strong>البريد الإلكترونى</strong></h6>
                        <input type="text" class="form-control" placeholder="برجاء ادخال البريد الإلكترونى">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center mt-30 mb-20">
                    <button type="submit" class="btn btn-primary mt-20 mb-20 radius-20">حفظ</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include 'controllers/footer.php';
?>