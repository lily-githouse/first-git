window.addEventListener("load", function () {
    var cd = document.querySelector(".code");
    // 随机的数组
    var numArr = ["2v264", "rhjki", "hp7se", "0qz4l", "oiebv", "987px"];
    //给提交按钮添加点击事件
    cd.onclick = function () {
        var index = Math.floor(Math.random() * numArr.length);
        cd.innerHTML = numArr[index];
    }
})