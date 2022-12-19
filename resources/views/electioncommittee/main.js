//show or hide sidebar
const menuBtn = document.querySelector('#menu__btn');
const closeBtn = document.querySelector('#close__btn');
const sidebar = document.querySelector('aside');
const inputActive = document.querySelector('.card input');

menuBtn.addEventListener('click', () => {
    sidebar.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';
    // sidebar.style.animation = "hideSidebar 500ms ease forwards"
})

//theme change functionality
const themeBtn = document.querySelector('.theme__btn');

themeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
    themeBtn.querySelector('span:first-child').classList.toggle('active-theme');
    themeBtn.querySelector('span:last-child').classList.toggle('active-theme');
})

// inputActive.addEventListener('click', () => {
//     inputActive.style.border = "2px solid #3c37ff";
// })

$(function () {
    $('input').on('click', function (e) {
        e.preventDefault()
        oldObjChild = $('.card input'); //gets active nav-item child nav-link
        oldObj = $('.active-input'); //gets the active nav-item
        oldObj.removeClass('active-input'); //remove active from old nav-item
        // oldObjChild.css('background', 'transparent'); //clear old active nav-item and nav-link style for bg color
        $(this).addClass('active-input'); //set the active class on the nav-item that called the function
        // $(this).css('color', '#86848c'); //set the color
        // $(this).css('border-radius', '1rem'); //set the border radius
        // $('head').append('<style>.sidebar a.active:before{content:"";width:20px;height:100%;position:absolute;background:#3c37ff;border-radius: 1rem 0rem 0rem 1rem;}</style>');
    });
});

$(document).ready(function(){
    $('.show').on('click', function(){
        $('.input2').attr('type', 'text');
        $('.show').addClass('eye-active')
        $('.hide').removeClass('eye-active')
    })

    $('.hide').on('click', function(){
        $('.input2').attr('type', 'password');
        $('.hide').addClass('eye-active')
        $('.show').removeClass('eye-active')
    })
});


