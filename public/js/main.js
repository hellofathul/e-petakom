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


