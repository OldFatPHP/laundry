
var _totalNum = 0;//购买总数
var _totalPrice = 0.00;//预估总价格
var listArray = new Array();//新建一个数组，存放购买商品的id的尾部编号
var listArrayNum = 0;


//选择购物车中的商品是否加入预算
function chooseGoods(x) {//点击按钮确定是否将该商品加入预算评估
    var num = x.substring(11);//获取id编号
    var goodspriceId = "listPrice" + num;//购物车中商品单价的id
    var basketGoodsNumId = "basketGoodsNum" + num;//购物车中指定商品的数目的id
    var ifchoose = document.getElementById(x).innerText;//！！！获取！！！选择模块的值
    var basketGoodsNum = document.getElementById(basketGoodsNumId).innerText;//！！！获取！！！购物车中指定商品的数目
    var goodsprice = document.getElementById(goodspriceId).innerText;//！！！获取！！！购物车中商品单价
    if (ifchoose == "✔") {//若商品不被选择则从预估中减去
        document.getElementById(x).style.backgroundColor = "#e5eeff";
        _totalPrice = (_totalPrice - Number(goodsprice) * Number(basketGoodsNum)).toFixed(2);//计算除去没选项的商品之后的总价格
        _totalNum = _totalNum - Number(basketGoodsNum);//计算除去没选项的商品之后的商品数目
        document.getElementById("totalPrice").innerText = _totalPrice;//将减掉取消选择的商品的价格后的商品总价格！！！！！传回！！！页面
        document.getElementById("totalNum").innerText = _totalNum;//!!将减掉取消选择的商品的的数目后的总商品数目！！！！传回！！！！页面
        document.getElementById(x).innerText = "";//减选择按钮中的“✔”除去
    }
    else {////若商品被选择则加入预估
        document.getElementById(x).style.backgroundColor = "#00dbf5";
        _totalPrice = (Number(_totalPrice) + Number(goodsprice) * Number(basketGoodsNum)).toFixed(2);//计算加上选项的商品之后的总价格
        _totalNum = _totalNum + Number(basketGoodsNum);//计算加上选项的商品之后的商品数目
        document.getElementById("totalPrice").innerText = _totalPrice;//将加上选择的商品的价格后的商品总价格！！！！！传回！！！页面
        document.getElementById(x).innerText = "✔";
        document.getElementById("totalNum").innerText = _totalNum;//!!将加上选择的商品的的数目后的总商品数目！！！！传回！！！！页面
    }
}

function decrease1(x) {//点击-号按钮时，数量减一
    var num = x.substring(8);//获取id编号
    var buyNumId = "buyNum" + num;
    var goodspriceId = "goodsprice" + num;
   //var zimu = num.substr(0, 1);//获取编号中的字母、、、、、没用了的代码，之前修改页面忘记删了，请删掉！！！
    var basketGoodsNumId = "basketGoodsNum" + num;
    var iframeDiv = document.getElementById('ServerDiv').contentWindow;//获取子框架的子框架对象
    var basketGoodsNum = document.getElementById(basketGoodsNumId).innerText;//！！！获取！！！购物车中选择减少的商品的原数目
    basketGoodsNum--;
    _totalNum--;
    var goodsprice = iframeDiv.document.getElementById(goodspriceId).innerText;//！！！获取！！！子页面中的商品单价
    _totalPrice = (_totalPrice - Number(goodsprice)).toFixed(2);//！！！获取！！！减去要减少的商品之后的总价格
    document.getElementById("totalPrice").innerText = _totalPrice;//将总价格！！！传回！！！给页面
    document.getElementById("totalNum").innerText = _totalNum;//将减少商品后的总商品数目！！！传回去！！！
    document.getElementById(basketGoodsNumId).innerText = basketGoodsNum;//将减少商品后的指定商品数目！！！传回！！！购物车中的指定商品的数目的div
    iframeDiv.document.getElementById(buyNumId).innerText = basketGoodsNum;//将减少商品后的指定商品数目！！！传回！！！子框架中指定商品的数目的div
    if (basketGoodsNum == 0) {//当购物车中某商品的数目减少为0时，删除该商品
        iframeDiv.document.getElementById(buyNumId).style.display = "none";
        var trId = "tableTr" + num;
        var trNode = document.getElementById(trId);
        document.getElementById("list").removeChild(trNode);//删除该tr结点
        var trNodesNum = document.getElementById("list").childNodes.length;//获取购物车的list模块中子元素的个数
        if (trNodesNum == 0) {//若list模块中子元素的个数为0，关闭购物车，还原预约按钮
            document.getElementById("estimateBg").style.display = "none";
            document.getElementById("estimateDiv").style.display = "none";
            document.getElementById("buy-orderDiv").style.display = "none";
            document.getElementById("primary-orderDiv").style.display = "block";
        }
    }

}
function add1(x) {//点击+号按钮时，数量加一
    var num = x.substring(3);//获取id编号
    //var iframeNum = document.getElementById('ServerDiv').contentWindow.iframeNum;//获取子框架的子框架对象、、、、没用了的代码，之前修改页面忘记删了，请删掉！！！
    var iframeDiv = document.getElementById('ServerDiv').contentWindow;//获取子框架的子框架对象
    var buyNumId = "buyNum" + num;
    var goodspriceId = "goodsprice" + num;
    var basketGoodsNumId = "basketGoodsNum" + num;
    var basketGoodsNum = document.getElementById(basketGoodsNumId).innerText;////！！！获取！！！购物车中选择增加商品的原数目
    var goodsprice = iframeDiv.document.getElementById(goodspriceId).innerText;//！！！获取！！！子页面中的商品单价
    basketGoodsNum++;
    _totalNum++;
    _totalPrice = (Number(_totalPrice) + Number(goodsprice)).toFixed(2);//！！！获取！！！加上要增加的商品的价格之后的总价格
    document.getElementById("totalPrice").innerText = _totalPrice; //将增加商品数目后的指定商品的总价格！！！传回去！！！
    document.getElementById(basketGoodsNumId).innerText = basketGoodsNum;//将增加商品后的指定商品数目！！！传回！！！购物车中的指定商品的数目的div
    iframeDiv.document.getElementById(buyNumId).innerText = basketGoodsNum;//将增加商品后的指定商品数目！！！传回！！！子框架中指定商品的数目的div
    document.getElementById("totalNum").innerText = _totalNum;//将增加商品后的总商品数目！！！传回去！！！
}
function cleanBasket() {//清空购物车


    var iframeDiv = document.getElementById('ServerDiv').contentWindow;//获取子框架的子框架对象、、、、这一句要改成这样子
    /*
    if (iframeNum == 1) {
        iframeDiv = document.getElementById('ServerDiv').contentWindow;//获取子框架的子框架对象
    }
    else if (iframeNum == 2) {
        iframeDiv = document.getElementById('ServerDiv').contentWindow.document.getElementById("ClothesDiv").contentWindow;//获取子框架的子框架对象
    }*///、、、、、、无用代码、、、、请删除！！
    var ifClean = confirm("是否确定清空购物车！");
    if (ifClean == true) {
        var num;
        var buyNum;
        for (var i = 0; i < listArray.length; i++) {
            num = listArray[i];
            buyNum = "buyNum" + num;
            iframeDiv.document.getElementById(buyNum).innerText = "0";//将子页面中所有本来购买过的商品的购买数变为0
            iframeDiv.document.getElementById(buyNum).style.display = "none";//隐藏将子页面中所有本来购买过的商品的购买数的div
        }
        document.getElementById("list").innerHTML = "";//清空购物车中list模块
        document.getElementById("totalNum").innerText = "0";//！！！将购物车中总商品数目设置为0！！！传回去！！！！！
        document.getElementById("estimateBg").style.display = "none";
        document.getElementById("estimateDiv").style.display = "none";
        document.getElementById("buy-orderDiv").style.display = "none";
        document.getElementById("primary-orderDiv").style.display = "block";
        document.getElementById("totalPrice").innerText = "0.00";//！！！！总价格清0！！！！
        document.getElementById("totalNum").innerText = "0";//！！！！总购买数目清0！！！！

    }
}




function CreateList(num, goodsNum, goodsPrice, imgSrc, goodsName) {//在子页面点击商品将商品放入购物车

    _totalNum++;//购买总数+1
    document.getElementById("totalNum").innerText = _totalNum;//将增加后的总购买数！！！传回！！！页面
    document.getElementById("totalNum").style.display = "block";
    document.getElementById("buy-orderDiv").style.display = "block";
    document.getElementById("primary-orderDiv").style.display = "none";
    _totalPrice = Number(_totalPrice) + Number(goodsPrice);//计算商品总价格
    document.getElementById("totalPrice").innerText = _totalPrice.toFixed(2);//将商品总价格！！！传回！！！页面

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
        td2.innerText = goodsName;//将商品名！！！放入！！！该td
        tr.appendChild(td2);
        var td3 = document.createElement("td");
        tr.appendChild(td3);
        var span1 = document.createElement("span");
        span1.innerText = "¥";
        td3.appendChild(span1);
        var span2 = document.createElement("span");
        span2.id = "listPrice" + num;
        span2.innerText = goodsPrice;//将商品单价！！！放入！！！该span
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
        div4.innerText = goodsNum; //将指定商品购买数目！！！放入！！！该div
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
        document.getElementById(basketGoodsNumId).innerHTML = goodsNum; //将购买总数目！！！传回！！！购物车的商品总数目的div
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

