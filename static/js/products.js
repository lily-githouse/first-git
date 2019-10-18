window.addEventListener("load", function () {
    var select = this.document.querySelectorAll(".item>span");
    var products = document.querySelectorAll(".firstrow-picture");
    var underline = this.document.querySelectorAll(".underline")
    // 选项卡
    products.forEach((v, i) => {
        select[i].addEventListener("click", () => {
            products.forEach((v, j) => {
                products[j].style.opacity = 0;
                underline[j].classList.remove("sel");
            })
            products[i].style.opacity = 1;
            underline[i].classList.add("sel");
        }, false)
    })
    select[0].click();
})


