<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;    //一定要设置，不然你会发现各种图片对不齐
        list-style: none;
        }
        .pic-box{
            width: 800px;
            height: 450px;
            border: 1px solid #ddd;
            overflow: hidden;   //溢出隐藏
        margin: 0 auto;
            position: relative;
        }
        .pic-box ul{
            width: 4800px;
            position: absolute;   //让ul相对于pic-box进行定位
        }

        .pic-box ul li{
            width: 800px;
            height: 450px;
            float: left;}
        .pic-box ul li img{
            width: 100%;
            height: 100%;}
        .control{
            padding: 10px;
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);  //一种通用的居中策略
        }
        .control em{
            width: 15px;
            height: 15px;
            background-color: #fff;
            display: inline-block;
            margin: 0 10px;
            border-radius: 50%;
        }
        .control .now{
            background-color: #f60;
        }
    </style>
</head>
<body>
<div class="pic-box" id="pic-box">
    <ul id="pic-ul">
        <li><img src="/upload/0.jpg"></li>
        <li><img src="/upload/0-1.jpg"></li>
        <li><img src="/upload/0-2.jpg"></li>
        <li><img src="/upload/0-3.jpg"></li>
        <li><img src="/upload/0-4.jpg"></li>
        <li><img src="/upload/0-5.jpg"></li>
    </ul>
    <!--底部进度提示-->
    <div class="control">
        <em class="now"></em>
        <em></em>
        <em></em>
        <em></em>
        <em></em>
        <em></em>
    </div>
</div>
</body>
<script>
    var getbox = document.getElementById("pic-box");
    //alert(getbox.nodeName);
    var getul = document.getElementById("pic-ul");
    //alert(getul.nodeType);
    //alert(getul.nodeValue);
    //alert(getul.nodeName);
    var getem = document.getElementsByTagName("em");
    //alert(getem[0].className);
    //alert(getem.length);
    var index = 0,timer = null;

    function autoplay(){
        timer = setInterval(function(){
            index++;
            if(index >= getem.length){
                index = 0;
            }
            changePic(index);
        },3000)
    }
    autoplay();
    function changePic(number){
        getul.style.marginLeft = -800 * number + "px";
        for (var i = 0;i < getem.length;i++) {
            getem[i].className = "";
        }
        getem[number].className = "now";
    }
    getbox.onmouseout = autoplay;
    //autoplay不能加（）
    getbox.onmouseover = function(){
        clearInterval(timer);
    }
    for(var i = 0;i < getem.length;i++){
        getem[i].id = i;
        getem[i].onmouseover = function(){
            changePic(this.id);
        }
    }
</script>
</html>