
$(document).ready(function (){
    // Filtration
    $('#portfolio-project-filter').mixItUp();
    // WOW 
    new WOW().init();


    //Nav page navigation
    $('#page-nav').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function () {},
        end: function () {},
        scrollChange: function ($currentlistItem) {}
    });

    // click for Hamburger menue
    const hamburgerBtn = document.querySelector('.header__burger');
    const mobileMenue = document.querySelector('.header__navigation-block');
    const bodyElement = document.querySelector('body');
    const overlayElement = document.querySelector('.overlay');
    const checkedInput = document.querySelector('.header__burger-checkbox');

    hamburgerBtn.addEventListener('click', function() {
        mobileMenue.classList.toggle('active');
        bodyElement.classList.toggle('noscroll');
        overlayElement.classList.toggle('active');
    });

    window.addEventListener('resize', function() {
        mobileMenue.classList.remove('active');
        bodyElement.classList.remove('noscroll');
        overlayElement.classList.remove('active');
        checkedInput.checked = false;
    });

    // Fixed navigation 
    window.onscroll = function showNav() {
        let navFixed = document.querySelector('.fixed-wrapper');
        

        if(window.pageYOffset > 200) {
            navFixed.classList.add('nav-fixed');
        } else {
            navFixed.classList.remove('nav-fixed');
        }
    };

    /* TIMELINE ANIMATION*/
   
    let element = document.querySelectorAll('.how-it-works__timeline-img');
    let Visible = function (target) {

        let targetPosition = {
            top: window.pageYOffset + target.getBoundingClientRect().top + 100,
            left: window.pageXOffset + target.getBoundingClientRect().left,
            right: window.pageXOffset + target.getBoundingClientRect().right,
            bottom: window.pageYOffset + target.getBoundingClientRect().bottom
        },

            windowPosition = {
                top: window.pageYOffset,
                left: window.pageXOffset,
                right: window.pageXOffset + document.documentElement.clientWidth,
                bottom: window.pageYOffset + document.documentElement.clientHeight
            };
        if (targetPosition.bottom > windowPosition.top && 
            targetPosition.top < windowPosition.bottom && 
            targetPosition.right > windowPosition.left && 
            targetPosition.left < windowPosition.right) { 

            target.classList.add('timeline-animation')
        } else {

            target.classList.remove('timeline-animation')
        };
    };

    window.addEventListener('scroll', function () {
        for (let el of element) {
            Visible(el);
        }
    });

    for (let el of element) {
        Visible(el);
    }


    // FORM PLACEHOLDER ANIMATION 
    const formItems = document.querySelectorAll('.contacts__form-item')
    const formInputs = document.querySelectorAll('.contacts__form-input')

    for (let i = 0; i < formItems.length; i++) {

        formItems[i].addEventListener('click', function () {
            const placeholderElement = this.querySelector('.contacts__form-placeholder')
            placeholderElement.classList.add('active')

        })
    }

    for (let i = 0; i < formInputs.length; i++) {
        formInputs[i].addEventListener('blur', function () {

            const thisParent = this.parentElement;

            if (this.value == '') {

                thisParent.querySelector('span').classList.remove('active');
            }
        })
    }

})
