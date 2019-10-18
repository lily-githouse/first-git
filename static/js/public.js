window.addEventListener("load",function () {
let mid = document.querySelector(".middle");
let xxk = document.querySelector(".xxk");
let xialak = document.querySelector(".xialakuang");
let xk = document.querySelector(".x");
let zdJiantou = document.querySelector(".zdJiantou");
console.log(zdJiantou);
let header = document.querySelector("header");
let ChinaTitle = document.querySelector("about-title-zw");
let EnglishTitle = document.querySelector("about-title-yw");
 let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
 window.onscroll = function () {
    let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    if (scrollTop >= 100) {
        mid.style.top = 0;
        mid.style.transition = '3s';
        mid.style.opcity = 1;
    } else {
        mid.style.top = -88 + "px";
        mid.style.opcity = 0;
        mid.style.transition = '0.000001s';
    }
    if (scrollTop >= 600) {
        zdJiantou.style.display = "block";
    } else {
        zdJiantou.style.display = "none";
     }
}
xxk.onclick = function () {
    xialak.style.display = xialak.style.display == "none" ? "block" : "none";
    xk.innerHTML = xialak.style.display == "none" ? "首页" : "关闭";
}

zdJiantou.onclick = function () {
    let jttop = document.documentElement || document.body;
    jttop.scrollTop = 0;
}
})
