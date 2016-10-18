
var _totalNum = 0;//购买总数
var _totalPrice = 0.00;//预估总价格
var listArray = new Array();
var listArrayNum = 0;
//选择购物车中的商品是否加入预算
function chooseGoods(x) {//点击按钮确定是否将该商品加入预算评估
    var num = x.substring(11);//获取id编号
    var goodspriceId = "listPrice" + num;//购物车中商品单价的id
    var basketGoodsNumId = "basketGoodsNum" + num;//购物车中指定商品的数目的id
    var ifchoose = document.getElementById(x).innerText;//获取选择模块的值
    var basketGoodsNum = document.getElementById(basketGoodsNumId).innerText;//购物车中指定商品的数目
    var goodsprice = document.getElementById(goodspriceId).innerText;//购物车中商品单价
    if (ifchoose == "✔") {//若商品被选择则加入预估
        document.getElementById(x).style.backgroundColor = "#e5eeff";
        _totalPrice = (_totalPrice - Number(goodsprice) * Number(basketGoodsNum)).toFixed(2);
        _totalNum = _totalNum - Number(basketGoodsNum);
        document.getElementById("totalPrice").innerText = _totalPrice;
        document.getElementById("totalNum").innerText = _totalNum;
        document.getElementById(x).innerText = "";
    }
    else {//若商品不被选择则从预估中减去
        document.getElementById(x).style.backgroundColor = "#00dbf5";
        _totalPrice = (Number(_totalPrice) + Number(goodsprice) * Number(basketGoodsNum)).toFixed(2);
        _totalNum = _totalNum + Number(basketGoodsNum);
        document.getElementById("totalPrice").innerText = _totalPrice;
        document.getElementById(x).innerText = "✔";
        document.getElementById("totalNum").innerText = _totalNum;
    }
}

function decrease1(x) {//点击-号按钮时，数量减一
    var num = x.substring(8);//获取id编号
    var buyNumId = "buyNum" + num;
    var goodspriceId = "goodsprice" + num;
    var zimu = num.substr(0, 1);//获取编号中的字母
    var basketGoodsNumId = "basketGoodsNum" + num;
    var iframeDiv = document.getElementById('ServerDiv').contentWindow;//获取子框架的子框架对象
    var basketGoodsNum = document.getElementById(basketGoodsNumId).innerText;
    basketGoodsNum--;
    _totalNum--;
    var goodsprice = iframeDiv.document.getElementById(goodspriceId).innerText;
    _totalPrice = (_totalPrice - Number(goodsprice)).toFixed(2);
    document.getElementById("totalPrice").innerText = _totalPrice;
    document.getElementById("totalNum").innerText = _totalNum;
    document.getElementById(basketGoodsNumId).innerText = basketGoodsNum;
    iframeDiv.document.getElementById(buyNumId).innerText = basketGoodsNum;
    if (basketGoodsNum == 0) {
        iframeDiv.document.getElementById(buyNumId).style.display = "none";
        var trId = "tableTr" + num;
        var trNode = document.getElementById(trId);
        document.getElementById("list").removeChild(trNode);//删除该tr结点
        var trNodesNum = document.getElementById("list").childNodes.length;
        if (trNodesNum == 0) {
            document.getElementById("estimateBg").style.display = "none";
            document.getElementById("estimateDiv").style.display = "none";
            document.getElementById("buy-orderDiv").style.display = "none";
            document.getElementById("primary-orderDiv").style.display = "block";
        }
    }

}
function add1(x) {//点击+号按钮时，数量加一
    var num = x.substring(3);//获取id编号
    var iframeNum = document.getElementById('ServerDiv').contentWindow.iframeNum;//获取子框架的子框架对象
    var iframeDiv = document.getElementById('ServerDiv').contentWindow;//获取子框架的子框架对象
    var buyNumId = "buyNum" + num;
    var goodspriceId = "goodsprice" + num;
    var basketGoodsNumId = "basketGoodsNum" + num;
    var basketGoodsNum = document.getElementById(basketGoodsNumId).innerText;
    var goodsprice = iframeDiv.document.getElementById(goodspriceId).innerText;
    basketGoodsNum++;
    _totalNum++;
    _totalPrice = (Number(_totalPrice) + Number(goodsprice)).toFixed(2);
    document.getElementById("totalPrice").innerText = _totalPrice;
    document.getElementById("totalNum").innerText = _totalNum;
    document.getElementById(basketGoodsNumId).innerText = basketGoodsNum;
    iframeDiv.document.getElementById(buyNumId).innerText = basketGoodsNum;
}
function cleanBasket() {//清空购物车
    var iframeDiv;
    if (iframeNum == 1) {
        iframeDiv = document.getElementById('ServerDiv').contentWindow;//获取子框架的子框架对象
    }
    else if (iframeNum == 2) {
        iframeDiv = document.getElementById('ServerDiv').contentWindow.document.getElementById("ClothesDiv").contentWindow;//获取子框架的子框架对象
    }
    var ifClean = confirm("是否确定清空购物车！");
    if (ifClean == true) {
        var num;
        var buyNum;
        for (var i = 0; i < listArray.length; i++) {
            num = listArray[i];
            buyNum = "buyNum" + num;
            iframeDiv.document.getElementById(buyNum).style.display = "none";
            iframeDiv.document.getElementById(buyNum).innerText = "0";
        }
        document.getElementById("list").innerHTML = "";
        document.getElementById("totalNum").innerText = "0";
        document.getElementById("estimateBg").style.display = "none";
        document.getElementById("estimateDiv").style.display = "none";
        document.getElementById("buy-orderDiv").style.display = "none";
        document.getElementById("primary-orderDiv").style.display = "block";
        document.getElementById("totalPrice").innerText = "0.00";
        document.getElementById("totalNum").innerText = "0";

    }
}




function CreateList(num, goodsNum, goodsPrice, imgSrc, goodsName) {//点击商品将商品放入购物车

    _totalNum++;//购买总数+1
    document.getElementById("totalNum").innerText = _totalNum;
    document.getElementById("totalNum").style.display = "block";
    document.getElementById("buy-orderDiv").style.display = "block";
    document.getElementById("primary-orderDiv").style.display = "none";
    _totalPrice = Number(_totalPrice) + Number(goodsPrice);
    document.getElementById("totalPrice").innerText = _totalPrice.toFixed(2);

    if (goodsNum == 1) {//如果商品数为1，在购物篮中创建一行购物信息
        listArray[listArrayNum] = num;
        listArrayNum++;
        var tr = document.createElement("tr");//创建一个tr
        tr.id = "tableTr" + num;
        document.getElementById("list").appendChild(tr);//将创建的tr放入id=list的table中
        var th = document.createElement("th");//创建一个th
        tr.appendChild(th);//将创建的th放入刚刚创建的tr中
        var div1 = document.createElement("div");
        div1.innerText = "✔";//div1中的值为“✔”
        div1.id = "chooseGoods" + num;
        div1.setAttribute('onclick', 'chooseGoods(this.id)');//当点击✔号按钮时触发chooseGoods(this.id)函数
        th.appendChild(div1);
        var td1 = document.createElement("td");
        tr.appendChild(td1);
        var img = document.createElement("img");
        img.setAttribute('src', imgSrc);//将图片地址付给新创建的img
        td1.appendChild(img);
        var td2 = document.createElement("td");
        td2.innerText = goodsName;//创建商品名的td
        tr.appendChild(td2);
        var td3 = document.createElement("td");
        tr.appendChild(td3);
        var span1 = document.createElement("span");
        span1.innerText = "¥";
        td3.appendChild(span1);
        var span2 = document.createElement("span");
        span2.id = "listPrice" + num;
        span2.innerText = goodsPrice;
        td3.appendChild(span2);
        var td4 = document.createElement("td");
        tr.appendChild(td4);
        var div2 = document.createElement("div");
        div2.className = "btn-num";
        td4.appendChild(div2);
        var div3 = document.createElement("div");
        div3.innerText = "-";
        div3.id = "decrease" + num;//给－号按钮赋Id值
        div3.setAttribute('onclick', 'decrease1(this.id)');//当点击-号按钮时触发decrease1(this.id)函数
        div2.appendChild(div3);
        var div4 = document.createElement("div");
        div4.innerText = goodsNum;
        div4.id = "basketGoodsNum" + num;
        div2.appendChild(div4);
        var div5 = document.createElement("div");
        div5.innerText = "+";
        div5.id = "add" + num;//给－号按钮赋Id值
        div5.setAttribute('onclick', 'add1(this.id)');//当点击-号按钮时触发add1(this.id)函数
        div2.appendChild(div5);
    }
    else {//如果商品数大于1 ，在购物篮更新数目
        var basketGoodsNumId = "basketGoodsNum" + num;
        document.getElementById(basketGoodsNumId).innerHTML = goodsNum;
    }
}
function navClick1(x) {
    //还原按钮样式，改变被点击的按钮的样式
    document.getElementById("Server1").className = "";
    document.getElementById("Server2").className = "";
    document.getElementById("Server3").className = "";
    document.getElementById("Server4").className = "";

    document.getElementById(x).className = "active";
    //控制模块切换
    if (x == "Server1") {
        document.getElementById("ServerDiv").src = "TopClothes.html";
    }
    else if (x == "Server2") {
        document.getElementById("ServerDiv").src = "Shoes.html";
    }
    else if (x == "Server3") {
        document.getElementById("ServerDiv").src = "HomeFurnishing.html";
    }
    else if (x == "Server4") {
        document.getElementById("ServerDiv").src = "Luxury.html";
    }

}
function openShoppingBasket() {  //打开购物车
    document.getElementById("estimateBg").style.display = "block";
    document.getElementById("estimateDiv").style.display = "block";
}
function closeShoppingBasket() {//关闭购物车
    document.getElementById("estimateBg").style.display = "none";
    document.getElementById("estimateDiv").style.display = "none";
}

