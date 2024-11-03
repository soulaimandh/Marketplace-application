
function initialize_tagify() {
    var input = document.querySelectorAll("form .tagify");
    input.forEach((item) => {
        // initialize Tagify on the above input node reference
        new Tagify(item);
    });
}
initialize_tagify();

difineElement();

const addOptionBtn = document.getElementById("add-option-btn");
var addOptionSection = document.querySelector(".add-option");
const addOptionWrapper = document.getElementById("add-option-wrapper");
const addOptionContainer = document.querySelector(".add-option-container");


const addOptionSwitch = document.getElementById("show-add-option");
if(addOptionSwitch){
addOptionSwitch.addEventListener("change", (e) => {
    addOptionContainer.classList.toggle("active");
});
}
$i = 1;
if(addOptionBtn){
addOptionBtn.addEventListener("click", () => {
    var clone = addOptionSection.cloneNode(true);
    clone.querySelector(".option-number").innerHTML = $i + 1;
    clone.querySelector("tags").remove();
    addOptionWrapper.appendChild(clone);
    const newTag = clone.querySelector(".tagify");
    new Tagify(newTag);
    difineElement();
    $i++;
});
}


function difineElement(){
    removeOptions = document.querySelectorAll(".add-option .remove");
    document.querySelectorAll("#remove").forEach((item) => {
        item.addEventListener("click", (event) => {
            const addSection = event.target.parentElement.parentElement.parentElement.parentElement;
            addSection.remove();
        });
    });
}
