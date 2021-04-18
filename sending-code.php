<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>إرسال الكود</strong></h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">إرسال الكود</li>
            </ol>
        </nav>
    </article>
</section>
<div class="container">
    <div class="login-p">
        <section class="form-section">
            <form action="">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 mb-30 px-30">
                        <article>
                            <h4 class="mb-20"><strong>الكود المرسل لجوالك</strong></h4>
                        </article>
                        <form action="">
                            <input type="text" class="form-control mb-20"  placeholder="أدخل الكود هنا .." >

                            <!-- <button style="width:100%" class="btn btn-primary mt-20 mb-20" onclick="window.location.href='usage-agreement.php'">استمرار</button> -->
                            <button type="button" style="width:100%" class="btn btn-primary mt-20 mb-20" onclick="window.location.href='index.php'">
                                ارسال
                            </button>
                            <hr class="my-10  width-50 mx-auto"/>
                            <p class="mt-20 text-center">
                                <button class="underlined color-primary"><strong>إعادة ارسال الرمز</strong></button>
                            </p>
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