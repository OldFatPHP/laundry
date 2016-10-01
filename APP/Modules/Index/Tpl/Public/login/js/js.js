//图片滑动窗口
var wrap = document.getElementById("wrap");
var inner = document.getElementById("inner");
var divList = document.getElementById("paganation").getElementsByTagName("div");
var left = document.getElementById("left");
var right = document.getElementById("right");
var clickFlag = true;//设置左右切换标记位防止连续按
var time;//主要用来设置自动滑动的计时器
var index = 0;//记录每次滑动图片的下标
var Distance = wrap.offsetWidth;//获取展示区的宽度，即每张图片的宽度
//定义图片滑动的函数
function AutoGo() {
    var start = inner.offsetLeft;//获取移动块当前的left的开始坐标
    var end = index * Distance * (-1);//获取移动块结束的坐标
    //计算公式即当移动到第三张图片时，图片下标为2乘以图片的宽度就是块的left值
    var change = end - start;//偏移量
    var timer;//用计时器为图片添加动画效果
    var t = 0;
    var maxT = 30;
    clear();//先把按钮状态清除，再让对应按钮改变状态
    if (index == divList.length) {
        divList[0].className = "selected";
    }
    else {
        divList[index].className = "selected";
    }
    clearInterval(timer);//开启计时器钱先把之前的清除
    timer = setInterval(function () {
        t++;
        if (t >= maxT) {//当图片到达终点才能切换
            clearInterval(timer);
            clickFlag = true;
        }
        inner.style.left = change / maxT * t + start + "px";//每个17毫秒让块移动
        if (index == divList.length && t >= maxT) {
            inner.style.left = 0;
            index = 0;
            //当图片到最后一张时把它瞬间切换回第一张，由于都用同一张图片，所以不会影响效果
        }
    }, 17);
}
//编写图片向右滑动的函数
function forward() {
    index++;
    //当图片下标到最后一张把下标换0
    if (index > divList.length) {
        index = 0;
    }
    AutoGo();
}
//编写图片向左滑动函数
function backward() {
    index--;
    //当图片下标到第一张让它放回到倒数第二张，
    //left值要变到最后一张才不影响过渡效果
    if (index < 0) {
        index = divList.length - 1;
        inner.style.left(index + 1) * Distance * (-1) + "px";
    }
    AutoGo();
}
//开启图片自动向右滑动的计时器
time = setInterval(forward, 3000);
//设置鼠标悬停动画停止
wrap.onmouseover = function () {
    clearInterval(time);
}
wrap.onmouseout = function () {
    time = setInterval(forward, 3000);
}
//遍历每个按钮让其切换到对应图片
for (var i = 0; i < divList.length; i++) {
    divList[i].onclick = function () {
        index = this.innerText - 1;
        AutoGo();
    }
}
//左切换事件
left.onclick = function () {
    if (clickFlag) {
        backward();
    }
    clickFlag = false;
}
//右切换事件
right.onclick = function () {
    if (clickFlag) {
        forward();
    }
    clickFlag = false;
}
//清除页面所有按钮状态颜色
function clear() {
    for (var i = 0; i < divList.length; i++) {
        divList[i].className = "";
    }
}



/********************公司照片图片滑动窗口*****************///
//图片滑动窗口
var wrap1 = document.getElementById("wrap1");
var inner1 = document.getElementById("inner1");
var divList1 = document.getElementById("paganation1").getElementsByTagName("div");
var left1 = document.getElementById("left1");
var right1 = document.getElementById("right1");
var clickFlag1 = true;//设置左右切换标记位防止连续按
var time1;//主要用来设置自动滑动的计时器
var index1 = 0;//记录每次滑动图片的下标
var Distance1 = wrap1.offsetWidth;//获取展示区的宽度，即每张图片的宽度
//定义图片滑动的函数
function AutoGo1() {
    var start = inner1.offsetLeft;//获取移动块当前的left的开始坐标
    var end = index1 * Distance1 * (-1);//获取移动块结束的坐标
    //计算公式即当移动到第三张图片时，图片下标为2乘以图片的宽度就是块的left值
    var change = end - start;//偏移量
    var timer;//用计时器为图片添加动画效果
    var t = 0;
    var maxT = 30;
    clear1();//先把按钮状态清除，再让对应按钮改变状态
    if (index1 == divList1.length) {
        divList1[0].className = "selected";
    }
    else {
        divList1[index1].className = "selected";
    }
    clearInterval(timer);//开启计时器钱先把之前的清除
    timer = setInterval(function () {
        t++;
        if (t >= maxT) {//当图片到达终点才能切换
            clearInterval(timer);
            clickFlag1 = true;
        }
        inner1.style.left = change / maxT * t + start + "px";//每个17毫秒让块移动
        if (index1 == divList1.length && t >= maxT) {
            inner1.style.left = 0;
            index1 = 0;
            //当图片到最后一张时把它瞬间切换回第一张，由于都用同一张图片，所以不会影响效果
        }
    }, 17);
}
//编写图片向右滑动的函数
function forward1() {
    index1++;
    //当图片下标到最后一张把下标换0
    if (index1 > divList1.length) {
        index1 = 0;
    }
    AutoGo1();
}
//编写图片向左滑动函数
function backward1() {
    index1--;
    //当图片下标到第一张让它放回到倒数第二张，
    //left值要变到最后一张才不影响过渡效果
    if (index1 < 0) {
        index1 = divList1.length - 1;
        inner1.style.left(index + 1) * Distance1 * (-1) + "px";
    }
    AutoGo1();
}
//开启图片自动向右滑动的计时器
time1 = setInterval(forward1, 3000);
//设置鼠标悬停动画停止
wrap1.onmouseover = function () {
    clearInterval(time);
}
wrap1.onmouseout = function () {
    time = setInterval(forward1, 3000);
}
//遍历每个按钮让其切换到对应图片
for (var i = 0; i < divList1.length; i++) {
    divList1[i].onclick = function () {
        index1 = this.innerText - 1;
        AutoGo1();
    }
}
//左切换事件
left1.onclick = function () {
    if (clickFlag1) {
        backward1();
    }
    clickFlag1 = false;
}
//右切换事件
right1.onclick = function () {
    if (clickFlag1) {
        forward1();
    }
    clickFlag1 = false;
}
//清除页面所有按钮状态颜色
function clear1() {
    for (var i = 0; i < divList1.length; i++) {
        divList1[i].className = "";
    }
}