function buy(x) {//点击商品将商品放入购物车
    var num = x.substr(6);//获取该模块id的编号
    var buyNum = "buyNum" + num;//该模块购买个数的span的id
    var buyPriceNum = "goodsprice" + num;//该模块商品单价的span的id
    var goodsNum = document.getElementById(buyNum).innerText;//获取该模块商品的购买数
    var goodsPrice = document.getElementById(buyPriceNum).innerText;//获取该模块商品的单价
    document.getElementById(buyNum).style.display = "block";
    goodsNum++;//购买数+1

    document.getElementById(buyNum).innerText = goodsNum;
    if (goodsNum == 1) {
        var imgId = "goodsImg" + num;// 获取新购买物品的图片Id
        var imgSrc = document.getElementById(imgId).src;
        var goodsNameId = "goodsName" + num;//获取商品的名字的Id
        var goodsName = document.getElementById(goodsNameId).innerText;//获取商品的名字

    }
    
        window.parent.CreateList(num, goodsNum, goodsPrice, imgSrc, goodsName);//触发父页面的函数并传值


}