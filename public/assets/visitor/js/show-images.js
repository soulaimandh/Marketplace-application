var loadFile = function (event) {
    var imageBoxs = document.querySelectorAll(".form4 .images-wrapper .img");

    var imageBox = document.querySelector(".form4 .images-wrapper .img.d-none");

    const ImagesWrapper = document.querySelector(
        ".form4 .images-wrapper .images"
    );
    j = 0;
    imageBoxs.forEach((item) => {
        if (j != 0) {
            item.remove();
        }
        j++;
    });

    // const Spiner = document.querySelector(".form4 .images .spiner");
    // Spiner.classList.remove("d-none");

    i = 0;

    while (i <= 10) {
        if (event.target.files[i]) {
            var clone = imageBox.cloneNode(true);
            clone.classList.remove("d-none");
            if (i === 0) {
                clone.classList.add("first-img");
                // let span = document.createElement("span");
                // let primary = document.createTextNode("Photo primary");
                // span.classList.add("primary-img");
                // span.appendChild(primary);
                // first_img = ImagesWrapper.querySelector(".img ");
                // first_img.appendChild(span);
                let img = document.createElement("img");
                img.src = URL.createObjectURL(event.target.files[i]);
                clone.appendChild(img)
                ImagesWrapper.appendChild(clone);
            } else {
                clone.classList.remove("first-img");
                // primary = clone.querySelector(".primary-img");
                // clone.removeChild(primary);
                let img = document.createElement("img");
                img.src = URL.createObjectURL(event.target.files[i]);
                clone.appendChild(img);
                ImagesWrapper.appendChild(clone);
                
            }
        }
        i++;
    }
    // Spiner.classList.add("d-none");
    initilaze_delete_btn();
};

function initilaze_delete_btn($item_number) {
    deleteBtns = document.querySelectorAll(".form4 .images-wrapper .delete");

    deleteBtns.forEach((item) => {
        item.addEventListener("click", (event) => {
            const imageB = event.target.parentElement;
            imageB.remove();
        });
    });
}
initilaze_delete_btn();
