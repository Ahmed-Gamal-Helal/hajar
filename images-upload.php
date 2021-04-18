<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>تحميل الصور</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الشروط والأحكام</a></li>
            <li class="breadcrumb-item active" aria-current="page">تحميل الصور</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <form action="">
        <h4 class="px-10 py-20 mt-0 user-name user-name__borderless "><strong>تحميل الصور</strong></h4>
        <div class="checkbox-card">
            <div class="row">
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
        <div class="row  mt-30">
            <div class="col-sm-4 px-0">
                <button type="button" class="btn btn-primary" onclick="window.location.href='add-new-ad.php'">
                    <!-- <a href="messages.php"> -->
                    استمرار
                    <!-- </a>     -->
                </button>
            </div>
            <div class="col-sm-8 px-0">
                <section class="text-center">
                    <input type="checkbox" id="male" name="gender" value="male">
                    <label for="male" class="px-10 commision-deal"><strong>اتعهد بأن جميع الصور المرفقه لنفس السلعه</strong></label>
                </section>
            </div>
        </div>
    </form>
</div>
<?php
    include 'controllers/footer.php';
?>