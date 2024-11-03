$(".navbar-nav .nav-item>a").on("click", function () {
    $(".navbar-nav .active").removeClass("active");
    $(this).addClass("active");
    $(".navbar-collapse").collapse("hide");
});

// to show model over the backdrop layer
$(document).on("shown.bs.modal", ".modal", function () {
    $(".modal-backdrop").before($(this));
});

// Switch Between compte & boutique login

$(".modal .login-chooses span").click(function () {
    $(this).addClass("selected").siblings().removeClass("selected");

    if ($(this).data("class") == "shop") {
        $(".modal .compte").hide();
    } else {
        $(".modal .shop").hide();
    }

    $("." + $(this).data("class")).fadeIn(100);
});

// Switch Between products & about in shop profile

$(".shop .choose-bar .chooses .option").click(function () {
    $(this).addClass("selected").siblings().removeClass("selected");

    if ($(this).data("class") == "about") {
        $(".shop .annonces").hide();
    } else {
        $(".shop .about").hide();
    }
    $("." + $(this).data("class")).fadeIn(100);
});

$(".chooses .icon.row").click(function () {
    $(this).addClass("active").siblings().removeClass("active");

    if ($(this).data("class") == "display-list") {
        $(".products.display-cartes").hide();
    } else {
        $(".products.display-list").hide();
    }
    $("." + $(this).data("class")).fadeIn(100);
});

// show form reponse
$(".show-reponse-form").click(function () {
    $(".add-answer-form").fadeIn(100);
    $(this).hide();
});

// show and hide password
const show_password = document.querySelector(".input .show-password");
if (show_password) {
    show_password.addEventListener("click", (e) => {
        $(".show-password").hide();
        $(".hide-password").fadeIn(100);
        e.target.parentElement.parentElement
            .querySelector("input")
            .setAttribute("type", "password");
    });
}
const hide_passworde = document.querySelector(".input .hide-password");
if (hide_passworde) {
    hide_passworde.addEventListener("click", (e) => {
        $(".hide-password").hide();
        $(".show-password").fadeIn(100);
        e.target.parentElement.parentElement
            .querySelector("input")
            .setAttribute("type", "text");
    });
}

// $(".input .suffex i").click(function () {
//     if ($(this).data("class") == "show-password") {
//         $(".show-password").hide();
//         $(".hide-password").fadeIn(100);
//     } else {
//         $(".hide-password").hide();
//         $(".show-password").fadeIn(100);
//     }
//     console.log($(this).parent().parent().parents('input').target);
//     $(this).parent().parent().parents('input').attr('type', 'text');
// });

// show the subcategories for each category
$(".modal .product-modal .parent-categories li").click(function () {
    $(this).addClass("active").siblings().removeClass("active");

    // if ($(this).data("class") == "about") {
    //     $(".shop .annonces").hide();
    // } else {
    //     $(".shop .about").hide();
    // }

    $(".modal .product-modal ." + $(this).data("category"))
        .addClass("active")
        .siblings()
        .removeClass("active");
    $(".modal .product-modal .sub-categories").fadeIn(100);
});

// switch bitween add product forms
// $(".add-product .progress-bar .item").click(function () {
//     $(this).addClass("active").siblings().removeClass("active");

//     // if ($(this).data("class") == "about") {
//     //     $(".shop .annonces").hide();
//     // } else {
//     //     $(".shop .about").hide();
//     // }

//     $(".modal .product-modal ." + $(this).data("category")).addClass('active').siblings().removeClass("active");
//     $(".modal .product-modal .sub-categories").fadeIn(100);
// });

var range = document.querySelectorAll("form .range");
range.forEach((item) => {
    item.addEventListener("input", (e) => {
        document.querySelector("." + e.target.dataset.class).value =
            e.target.value;
    });
});

/*===============================================
      background status of the navbar while scrolling
  ===============================================*/

$(window).scroll(function () {
    if ($(this).scrollTop() > 60) {
        $("nav").addClass("bg-enable").removeClass("bg-desible");
    } else {
        $("nav").addClass("bg-desible").removeClass("bg-enable");
    }
});

$(".navbar-nav .nav-item>a").on("click", function () {
    $(".navbar-nav .active").removeClass("active");
    $(this).addClass("active");
    $(".navbar-collapse").collapse("hide");
});

/*===============================================
      client slider
  ===============================================*/
new Swiper(".swiper", {
    speed: 400,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

/*===================
    Back to top button
    ===================*/
var backtotop = $(".back-to-top");
function back() {
    if (backtotop) {
        if ($(window).scrollTop() > 100) {
            backtotop.addClass("active");
        } else {
            backtotop.removeClass("active");
        }
    }
    return 0;
}
$(window).ready(function () {
    back();
});
$(window).scroll(function () {
    back();
});
/*==============================
      Easy on scroll event listener 
      ==============================*/
const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
};

/*====================================
        Navbar links active state on scroll
        ====================================*/
let navbarlinks = document.querySelectorAll(".navbar .nav-link", true);
const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach((navbarlink) => {
        if (!navbarlink.hash) return;
        let section = document.querySelector(navbarlink.hash);
        if (!section) return;
        if (
            position >= section.offsetTop &&
            position <= section.offsetTop + section.offsetHeight
        ) {
            navbarlink.classList.add("active");
        } else {
            navbarlink.classList.remove("active");
        }
    });
};
window.addEventListener("load", navbarlinksActive);
onscroll(document, navbarlinksActive);

/*=========================================
        Scrolls to an element with header offset
        =========================================*/
const scrollto = (el) => {
    let header = select("#header");
    let offset = header.offsetHeight;

    if (!header.classList.contains("header-scrolled")) {
        offset -= 16;
    }

    let elementPos = select(el).offsetTop;
    window.scrollTo({
        top: elementPos - offset,
        behavior: "smooth",
    });
};

// $('#myModal').modal();
// hide the parent modal when the clicking on the reset password

$(".modal .shop-password-messing").click(function () {
    $("#connection-modal").modal("toggle");
});

$(".modal .password-messing").click(function () {
    $("#connection-modal").modal("toggle");
});

const backBtn = document.getElementById("back-btn");

if (backBtn) {
    backBtn.addEventListener("click", () => {
        history.back();
    });
}

const backBtnModal = document.getElementById("back-btn-modal");

if (backBtnModal) {
    backBtnModal.addEventListener("click", () => {
        window.history.back();
    });
}

$(".form-wrapper .tags #tag").click(function () {
    $(this).toggleClass("active");
});

// the drop down menu function for sidebar
const dropDownMenu = () => {
    const menus = document.querySelectorAll(
        ".sidebar .sidebar-menu .menu-item"
    );
    const items = document.querySelectorAll(
        ".sidebar .sidebar-menu .menu-item .list-item"
    );

    items.forEach((item) => {
        item.addEventListener("click", (e) => {
            items.forEach((item) => {
                item.classList.remove("active");
            });
            e.target.classList.add("active");
        });
    });

    menus.forEach((item) => {
        item.addEventListener("click", (e) => {
            element = e.target.parentElement.parentElement;
            element.classList.toggle("active");

            if (element.classList.contains("active")) {
                element.querySelector(".close").style.display = "none";
                element.querySelector(".open").style.display = "block";
            } else {
                element.querySelector(".open").style.display = "none";
                element.querySelector(".close").style.display = "block";
            }
        });
    });
};

dropDownMenu();

var toggler = document.querySelector(".sidebar-toggler");
if (toggler) {
    toggler.addEventListener("click", (e) => {
        document.querySelector(".sidebar").classList.toggle("show");

        content_area = document.getElementById("content-area");
        if (content_area) {
            content_area.classList.toggle("no-sidebar");
            content_area.classList.toggle("active");
        }
    });
}
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $(".sidebar").addClass("fixed").removeClass("moved");
    } else {
        $(".sidebar").addClass("moved").removeClass("fixed");
    }
});

 /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

