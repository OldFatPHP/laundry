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
