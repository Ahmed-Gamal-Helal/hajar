$(function() {
    'use strict';

    $('.logintab').click(function () {
        $('.pillsstyle li').toggleClass("active");
    
    });

    $('.changeform').click(function () {
        $('.deletform ,.showform').toggleClass('none');

    });


    $(document).ready(function () {
        $('#emailpassword').on('submit', function (e) {
            $('#resetpass').modal('show');
            e.preventDefault();
        });
    });

    $(document).ready(function () {
        $('#codepass').on('submit', function (e) {
            $('#newresetpass').modal('show');
            e.preventDefault();
        });
    });

    $(document).ready(function () {
        $('#newpass').on('submit', function (e) {
            $('#resetpass , #newresetpass ,#newpass ,#forgetpass').modal('hide');
            e.preventDefault();
        });
    });

    $(document).ready(function () {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });
    });

    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
    return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
        return $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
        return $(this).removeClass('fa-star').addClass('fa-star-o');
        }
    });
    };

    $star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {

    });
    $('.owl-carousel').owlCarousel({
        rtl:true,
        nav:true,
        navText: [
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            '<i class="fa fa-angle-left" aria-hidden="true"></i>'
        ],
        dots:false,
        margin:25,
        responsive:{
            0:{
                items:1
            }
        }
    });
    $('.change-color').click(function (){
        $(this).toggleClass('is-favorite');
        $(this).children(":first").toggleClass('fa-heart-o').toggleClass('fa-heart')
    });
    // $("header ul.navbar-nav li").click(function (ee){
    //     // ee.preventDefault();
    //     $(this).addClass('active').siblings().removeClass('active');
    // });

    $('.basic .owl-carousel').owlCarousel({
        rtl:true,
        nav:false,
        margin:25,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            
        }
    });

    // $('.our-news .owl-nav .owl-prev, .our-news .owl-nav .owl-next').empty();

    // $('.various').fancybox({
    //     padding : 10,
    //     openEffect  : 'fade'
    // });

    // $(".nicescroll-box").niceScroll(".wrap",{cursorcolor:"#15222e",cursorwidth:"8px",background:"rgba(97,97,97,0.5)",cursorborder:"1px solid #afafaf",autohidemode:'leave'});

});

// function PreviewImage() {
//     var oFReader = new FileReader();
//     oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

//     oFReader.onload = function (oFREvent) {
//         document.getElementById("uploadPreview").src = oFREvent.target.result;
//     };
// };
function previewImages() {

    var preview = document.querySelector('#preview');

    if (this.files) {
        [].forEach.call(this.files, readAndPreview);
    }

    function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
        } // else...

        var reader = new FileReader();

        reader.addEventListener("load", function () {
            var image = new Image();
            image.height = 100;
            image.title = file.name;
            image.src = this.result;
            preview.appendChild(image);
            $("<i></i>").insertAfter(image).addClass("fa fa-window-close ");
            $('i').click(function () {
                $(this).prev().remove();
                $(this).remove();
            });
        });

        reader.readAsDataURL(file);

    }

}

document.querySelector('#file-input').addEventListener("change", previewImages);

