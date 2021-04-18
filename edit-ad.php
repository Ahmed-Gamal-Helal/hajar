<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>تعديل الاعلان</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الشروط والأحكام</a></li>
            <li class="breadcrumb-item active" aria-current="page">تعديل الاعلان</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <form action="">
        <h4 class="px-10 py-20 mt-0 user-name user-name__borderless "><strong>تعديل الاعلان</strong></h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="checkbox-card">
                    <div  class="relative">
                        <div class="fileUpload">
                            <input class="multable-photos upload" id="file-input" type="file" multiple>
                            <i class="icon-camera px-5"></i>
                            <small>اختر صور السلعه</small>
                        </div>
                        <div id="preview" class="pro-images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-30">
            <div class="col-sm-12">
            <h6><strong>عنوان المزاد</strong></h6>
            </div>
            <div class="col-sm-6 my-5">
                <input type="text" class="form-control"  placeholder="مثال سياره تويوتا" >
            </div>
            <div class="col-sm-6 my-5">
                <div class="select">
                    <select  class="form-control select-style" >
                        <option value="" selected disabled class="option form-control" >القسم</option>
                        <option class="option form-control">2</option>
                        <option class="option form-control">3</option>
                        <option class="option form-control">4</option>
                    </select>
                </div>
            </div>
           
            <div class="col-sm-6 my-5">
                <h5 class="mt-20"><strong>اختر وقت وتاريخ بداية المزاد</strong></h5>
                <div class="col-sm-6  my-5 px-0">
                    <input type="date" class="form-control text-right"  >
                </div>
                <div class="col-sm-6 my-5  px-0">
                    <input type="time" class="form-control text-right"  >
                </div>
                <p class="mt-10 color-red"><small>المزاد الذى تنشئه الآن لن يظهر فى الصفحه الرئيسيه قبل 24 ساعه من بداية ارساله للاداره</small></p>
            </div> 
            <div class="col-sm-6 my-5">

                <h5 class="mt-30"><strong>اختر نوع المزاد</strong></h5>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male" class="px-10">مزاد عادى</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female" class="px-10">مزاد مباشر</label><br>
            </div>
            <div class="col-sm-12">
                <h5 class="mt-30"><strong>وصف المزاد </strong></h5>
                <textarea name="" id="" cols="30" rows="6" placeholder="تفاصيل المزاد .."></textarea>
            </div>
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary mt-20">حفظ التعديلات</button>
            </div>
        </div>

    </form>
</div>

<?php
    include 'controllers/footer.php';
?>