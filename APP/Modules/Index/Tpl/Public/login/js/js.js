//ͼƬ��������
var wrap = document.getElementById("wrap");
var inner = document.getElementById("inner");
var divList = document.getElementById("paganation").getElementsByTagName("div");
var left = document.getElementById("left");
var right = document.getElementById("right");
var clickFlag = true;//���������л����λ��ֹ������
var time;//��Ҫ���������Զ������ļ�ʱ��
var index = 0;//��¼ÿ�λ���ͼƬ���±�
var Distance = wrap.offsetWidth;//��ȡչʾ���Ŀ�ȣ���ÿ��ͼƬ�Ŀ��
//����ͼƬ�����ĺ���
function AutoGo() {
    var start = inner.offsetLeft;//��ȡ�ƶ��鵱ǰ��left�Ŀ�ʼ����
    var end = index * Distance * (-1);//��ȡ�ƶ������������
    //���㹫ʽ�����ƶ���������ͼƬʱ��ͼƬ�±�Ϊ2����ͼƬ�Ŀ�Ⱦ��ǿ��leftֵ
    var change = end - start;//ƫ����
    var timer;//�ü�ʱ��ΪͼƬ��Ӷ���Ч��
    var t = 0;
    var maxT = 30;
    clear();//�ȰѰ�ť״̬��������ö�Ӧ��ť�ı�״̬
    if (index == divList.length) {
        divList[0].className = "selected";
    }
    else {
        divList[index].className = "selected";
    }
    clearInterval(timer);//������ʱ��Ǯ�Ȱ�֮ǰ�����
    timer = setInterval(function () {
        t++;
        if (t >= maxT) {//��ͼƬ�����յ�����л�
            clearInterval(timer);
            clickFlag = true;
        }
        inner.style.left = change / maxT * t + start + "px";//ÿ��17�����ÿ��ƶ�
        if (index == divList.length && t >= maxT) {
            inner.style.left = 0;
            index = 0;
            //��ͼƬ�����һ��ʱ����˲���л��ص�һ�ţ����ڶ���ͬһ��ͼƬ�����Բ���Ӱ��Ч��
        }
    }, 17);
}
//��дͼƬ���һ����ĺ���
function forward() {
    index++;
    //��ͼƬ�±굽���һ�Ű��±껻0
    if (index > divList.length) {
        index = 0;
    }
    AutoGo();
}
//��дͼƬ���󻬶�����
function backward() {
    index--;
    //��ͼƬ�±굽��һ�������Żص������ڶ��ţ�
    //leftֵҪ�䵽���һ�ŲŲ�Ӱ�����Ч��
    if (index < 0) {
        index = divList.length - 1;
        inner.style.left(index + 1) * Distance * (-1) + "px";
    }
    AutoGo();
}
//����ͼƬ�Զ����һ����ļ�ʱ��
time = setInterval(forward, 3000);
//���������ͣ����ֹͣ
wrap.onmouseover = function () {
    clearInterval(time);
}
wrap.onmouseout = function () {
    time = setInterval(forward, 3000);
}
//����ÿ����ť�����л�����ӦͼƬ
for (var i = 0; i < divList.length; i++) {
    divList[i].onclick = function () {
        index = this.innerText - 1;
        AutoGo();
    }
}
//���л��¼�
left.onclick = function () {
    if (clickFlag) {
        backward();
    }
    clickFlag = false;
}
//���л��¼�
right.onclick = function () {
    if (clickFlag) {
        forward();
    }
    clickFlag = false;
}
//���ҳ�����а�ť״̬��ɫ
function clear() {
    for (var i = 0; i < divList.length; i++) {
        divList[i].className = "";
    }
}



/********************��˾��ƬͼƬ��������*****************///
//ͼƬ��������
var wrap1 = document.getElementById("wrap1");
var inner1 = document.getElementById("inner1");
var divList1 = document.getElementById("paganation1").getElementsByTagName("div");
var left1 = document.getElementById("left1");
var right1 = document.getElementById("right1");
var clickFlag1 = true;//���������л����λ��ֹ������
var time1;//��Ҫ���������Զ������ļ�ʱ��
var index1 = 0;//��¼ÿ�λ���ͼƬ���±�
var Distance1 = wrap1.offsetWidth;//��ȡչʾ���Ŀ�ȣ���ÿ��ͼƬ�Ŀ��
//����ͼƬ�����ĺ���
function AutoGo1() {
    var start = inner1.offsetLeft;//��ȡ�ƶ��鵱ǰ��left�Ŀ�ʼ����
    var end = index1 * Distance1 * (-1);//��ȡ�ƶ������������
    //���㹫ʽ�����ƶ���������ͼƬʱ��ͼƬ�±�Ϊ2����ͼƬ�Ŀ�Ⱦ��ǿ��leftֵ
    var change = end - start;//ƫ����
    var timer;//�ü�ʱ��ΪͼƬ��Ӷ���Ч��
    var t = 0;
    var maxT = 30;
    clear1();//�ȰѰ�ť״̬��������ö�Ӧ��ť�ı�״̬
    if (index1 == divList1.length) {
        divList1[0].className = "selected";
    }
    else {
        divList1[index1].className = "selected";
    }
    clearInterval(timer);//������ʱ��Ǯ�Ȱ�֮ǰ�����
    timer = setInterval(function () {
        t++;
        if (t >= maxT) {//��ͼƬ�����յ�����л�
            clearInterval(timer);
            clickFlag1 = true;
        }
        inner1.style.left = change / maxT * t + start + "px";//ÿ��17�����ÿ��ƶ�
        if (index1 == divList1.length && t >= maxT) {
            inner1.style.left = 0;
            index1 = 0;
            //��ͼƬ�����һ��ʱ����˲���л��ص�һ�ţ����ڶ���ͬһ��ͼƬ�����Բ���Ӱ��Ч��
        }
    }, 17);
}
//��дͼƬ���һ����ĺ���
function forward1() {
    index1++;
    //��ͼƬ�±굽���һ�Ű��±껻0
    if (index1 > divList1.length) {
        index1 = 0;
    }
    AutoGo1();
}
//��дͼƬ���󻬶�����
function backward1() {
    index1--;
    //��ͼƬ�±굽��һ�������Żص������ڶ��ţ�
    //leftֵҪ�䵽���һ�ŲŲ�Ӱ�����Ч��
    if (index1 < 0) {
        index1 = divList1.length - 1;
        inner1.style.left(index + 1) * Distance1 * (-1) + "px";
    }
    AutoGo1();
}
//����ͼƬ�Զ����һ����ļ�ʱ��
time1 = setInterval(forward1, 3000);
//���������ͣ����ֹͣ
wrap1.onmouseover = function () {
    clearInterval(time);
}
wrap1.onmouseout = function () {
    time = setInterval(forward1, 3000);
}
//����ÿ����ť�����л�����ӦͼƬ
for (var i = 0; i < divList1.length; i++) {
    divList1[i].onclick = function () {
        index1 = this.innerText - 1;
        AutoGo1();
    }
}
//���л��¼�
left1.onclick = function () {
    if (clickFlag1) {
        backward1();
    }
    clickFlag1 = false;
}
//���л��¼�
right1.onclick = function () {
    if (clickFlag1) {
        forward1();
    }
    clickFlag1 = false;
}
//���ҳ�����а�ť״̬��ɫ
function clear1() {
    for (var i = 0; i < divList1.length; i++) {
        divList1[i].className = "";
    }
}