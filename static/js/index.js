// 获取大盒子、图片、滑块、左右按钮
var banner = document.querySelector(".banner");
var img = document.querySelector(".imgList");
var imglist = img.children;
var dot = document.querySelectorAll(".boxs");
var btnL = document.querySelector(".btn-left");
var btnR = document.querySelector(".btn-right");
var width = banner.offsetWidth;
// 获取需要进行动画的盒子
var servelist = document.querySelectorAll('.serve>.item');
var intImage = document.querySelector('.int-image');
var knowImage = document.querySelector('.know-image');
// 声明下标
var index = 0;
// 克隆第一张放到最后
img.appendChild(imglist[0].cloneNode(true));
var time = setInterval(move, 2000);
// 移动
function move() {
    // 对index进行判断,如果下标等于图片的长度，将移回第一张
    if (index == imglist.length - 1) {
        index = 0;
        img.style.left = 0;
    }
    index++;
    // 调用动画
    animate(img, -index * width);
    dotActive();
}
// 轮播点状态
function dotActive() {
    // 遍历数组移除选中所有状态
    dot.forEach((v, i) => {
        v.classList.remove("active");
    })
    // 图片到达最后一张时，给第一个滑块添加选中状态，并移除最后一个滑块的状态
    if (index == imglist.length - 1) {
        dot[dot.length - 1].classList.remove("active");
        dot[0].classList.add("active");
    }
    if (index < imglist.length - 1) {
        dot[index].classList.add("active");
    }
}
// 动画
function animate(obj, target) {
    clearInterval(obj.timer);
    // 定义速度speed
    var speed = width/100;
    // 获取img当前位置x
    var x;
    obj.timer = setInterval(() => {
        x = obj.offsetLeft;
        speed = x > target ? -Math.abs(speed) : Math.abs(speed);
        // 移动当前位置
        x += speed;
        // 判断x与目标距离target的大小，来确定是否需要停止动画
        if (Math.abs(target - x) > Math.abs(speed)) {
            obj.style.left = x + 'px';
        } else {
            clearInterval(obj.timer);
            obj.style.left = target + 'px';
        }
        window.onresize = () => {
            width = banner.offsetWidth;
            x = obj.offsetLeft;
            if (Math.abs(target - x) > Math.abs(speed)) {
                obj.style.left = x + 'px';
            } else {
                clearInterval(obj.timer);
                obj.style.left = target + 'px';
            }
        }
    }, 10)
}
// 鼠标移入
banner.onmouseover = () => {
    clearInterval(time);
}
// 鼠标移出
banner.onmouseout = () => {
    time = setInterval(move, 2000);
}
// 右按钮
btnR.onclick = () => {
    move();
}
// 左按钮
btnL.onclick = () => {
    if (index == 0) {
        index = imglist.length - 1;
        img.style.left = -index * width + "px";
    }
    index--;
    animate(img, -index * width);
    dotActive();
}
// 点击轮播点
for (let j = 0; j < dot.length; j++) {
    dot[j].onclick = () => {
        move();
    }
};
// 鼠标滚动动画效果
window.addEventListener('scroll', () => {
    res = document.documentElement.scrollTop;
    if (res == 400) {
        servelist.forEach((v, i) => {
            v.classList.add("fadeInUp");
        })
    }
    if (res == 1000) {
        intImage.classList.add("zoomIn");
        intImage.style.opacity = 1;
        intImage.style.transition = "all 1s";
        knowImage.classList.add("zoomIn");
        knowImage.style.opacity = 1;
        knowImage.style.transition = "all 1s";
    }
}, false)
