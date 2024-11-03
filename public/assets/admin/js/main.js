var modal = document.getElementById("id01");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// open and cloce the fullscreen in deferent browsers
const openFullScreen = (el) => {
    if (el.requestFullscreen) {
        el.requestFullscreen();
    } else if (el.msRequestFullscreen) {
        el.msRequestFullscreen();
    } else if (el.mozRequestFullScreen) {
        el.mozRequestFullScreen();
    } else if (el.webkitRequestFullscreen) {
        el.webkitRequestFullscreen();
    }
};
const cancelFullScreen = () => {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
    }
};

// the card buttons
const CloseBody = () => {
    const pageBpdy = document.getElementById("page-body");
    pageBpdy.classList.add("hide");
};
const HideBody = () => {
    const pageBpdy = document.getElementById("body-content");
    pageBpdy.classList.toggle("hide");
};
const pageFullScreen = () => {
    const toggle = document.getElementById("page");
    toggle.classList.toggle("full-screen");
    const isFullScreen = toggle.classList.value.indexOf("full-screen");
    const body = document.getElementById("page");
    const elem = body.requestFullscreen();
    if (isFullScreen > -1) {
        openFullScreen(elem);
        localStorage.setItem("isPageFullScreen", "yes");
        body.classList.add('full-screen');
    } else {
        cancelFullScreen();
        localStorage.setItem("isPageFullScreen", "no");
        body.classList.remove('full-screen');
    }
};

const closeBody = document.getElementById("close-body");
closeBody.addEventListener("click", () => {
    CloseBody();
});

const hideBody = document.getElementById("hide-body");
hideBody.addEventListener("click", () => {
    HideBody();
});
const pageFS = document.getElementById("page-full-screen");
pageFS.addEventListener("click", () => {
    pageFullScreen();
});


// the full screen toggel function

const fullscreenToggle = () => {
    const toggle = document.getElementById("toggle-fullscreen");
    toggle.classList.toggle("full-screen");
    const isFullScreen = toggle.classList.value.indexOf("full-screen");
    if (isFullScreen > -1) {
        const elem = document.documentElement.requestFullscreen();
        openFullScreen(elem);
        localStorage.setItem("isFullScreen", "yes");
    } else {
        cancelFullScreen();
        localStorage.setItem("isFullScreen", "no");

    }
};

// the switch button function

const Switch = document.getElementById("CheckStatus");
const CheckStatus = document.getElementById("CheckStatusInput");
if (Switch) {
    Switch.addEventListener("click", function () {
        const check = CheckStatus.getAttribute("checked");
        if (check) {
            CheckStatus.removeAttribute("checked");
        } else {
            CheckStatus.setAttribute("checked", true);
        }
    });
}
// congigure the tables
// var isFS = localStorage.getItem("isFullScreen");
// var isPFS = localStorage.getItem("isPageFullScreen");

// const toggle = document.getElementById("page");
// toggle.classList.toggle("full-screen");
// const body = document.getElementById("page");
// const elem = body.requestFullscreen();
// if (isPFS=='no') {
//     openFullScreen(elem);
//     localStorage.setItem("isPageFullScreen", "yes");

// } else if(isPFS=='yes') {
//     cancelFullScreen();
//     localStorage.setItem("isPageFullScreen", "no");

// }

// if (isFS=='no') {
//     const elem = document.documentElement.requestFullscreen();
//     openFullScreen(elem);
//     localStorage.setItem("isFullScreen", "yes");
// } else if(isFS=='yes') {
//     cancelFullScreen();
//     localStorage.setItem("isFullScreen", "no");

// } 
// alert(isFS);
// alert(isPFS);