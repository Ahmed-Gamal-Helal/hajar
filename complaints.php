<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<nav aria-label="breadcrumb" class="breadcrumb">
     <div class="container">
         <ol class="breadcrumb mb-0 inline">
             <li class="breadcrumb-item"><a href="index.php">الرئيسيه</a></li>
             <li class="breadcrumb-item active" aria-current="page">الشكاوى</li>
         </ol>
         <button class="left basic-butt btn " href="#add-complaints" data-toggle="modal" data-target="#add-complaints">+ اضافة شكوى</button>
     </div>
</nav>
<div class="container mb-60 mt-30">
    <div class="bordered">
        <div class="row">
            <div class="col-sm-4">
                <article class="blue-complain">
                    <h5><strong>رقم الشكوى</strong></h5>
                    <p><small>123 4567 3454</small></p>
                </article>            
            </div>
            <div class="col-sm-4">
                <article class="green-complain">
                    <h5><strong>حالة الشكوى</strong></h5>
                    <p><small>123 4567 3454</small></p>
                </article>            
            </div>
            <div class="col-sm-4">
                <article class="blue-complain">
                    <h5><strong>اسم العاملة</strong></h5>
                    <p><small>123 4567 3454</small></p>
                </article>            
            </div>
            <div class="col-sm-12 mt-30">
                <article>
                    <h5 class="blue-complain"><strong>تفاصيل الشكوى</strong></h5>
                    <p class="bordered"><small>هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذاالنص هو مثال هذا النص هو مثال هذاالنص هو مثال هذا النص هو مثال هذا النص هو مثال </small></p>
                </article>            
            </div>
        </div>
    </div>
    <div class="bordered mt-30">
        <div class="row">
            <div class="col-sm-4">
                <article class="blue-complain">
                    <h5><strong>رقم الشكوى</strong></h5>
                    <p><small>123 4567 3454</small></p>
                </article>            
            </div>
            <div class="col-sm-4">
                <article class="green-complain">
                    <h5><strong>حالة الشكوى</strong></h5>
                    <p><small>123 4567 3454</small></p>
                </article>            
            </div>
            <div class="col-sm-4">
                <article class="blue-complain">
                    <h5><strong>اسم العاملة</strong></h5>
                    <p><small>123 4567 3454</small></p>
                </article>            
            </div>
            <div class="col-sm-12 mt-30">
                <article>
                    <h5 class="blue-complain"><strong>تفاصيل الشكوى</strong></h5>
                    <p class="bordered"><small>هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذا النص هو مثال هذاالنص هو مثال هذا النص هو مثال هذاالنص هو مثال هذا النص هو مثال هذا النص هو مثال </small></p>
                </article>            
            </div>
        </div>
    </div>

    <!-- modal -->

        <div class="modal fade" id="add-complaints"
            role="dialog" aria-labelledby="add-complaints"
            aria-hidden="true" tabindex="-1"> 
    
            <div class="modal-dialog modal-dialog-centered signmodel"  role="document"> 
                <div class="modal-content"> 
                    <div class="modal-header">
                        <h4 class="modal-title">اضافة شكوى</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            <li class="inline modal-h-li">رقم العميل : <span>2015</span></li>
                            <li class="inline modal-h-li">اسم العاملة  : <span>اسماء احمد</span></li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <h5>نص الشكوى</h5>
                        <form action="" class="text-center">
                            <textarea name="" id="" cols="30" rows="2">
                                
                            </textarea>
                            <button class="form-butt">ارسال</button>
                        </form>
                    </div>

                </div> 
            </div> 
        </div>

</div>

    <div class="modal fade" id="add-complaints"
            role="dialog" aria-labelledby="add-complaints"
            aria-hidden="true" tabindex="-1"> 
    
            <div class="modal-dialog modal-dialog-centered signmodel"  role="document"> 
                <div class="modal-content"> 
                    <div class="modal-header">
                        <h4 class="modal-title">اضافة شكوى</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            <li class="inline modal-h-li">رقم العميل : <span>2015</span></li>
                            <li class="inline modal-h-li">اسم العاملة  : <span>اسماء احمد</span></li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>

                </div> 
            </div> 
        </div>


<?php
    include 'controllers/footer.php';
?>