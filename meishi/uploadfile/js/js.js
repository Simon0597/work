
var  aInput = document.getElementsByClassName('upimages');

// 文件数组
var arr = [];
// 文件大小求和
var aSize = [];
// 文件名称
var aTitle = [];
for( var i=0;i<aInput.length;i++ ){
    aInput[i].onchange = function () {
        var This = this;
        if( this.value ){
            if( this.files.length ){
                for ( var i=0;i<this.files.length;i++ ){
                    (function (i) {
                        var files = This.files.item(i)
                        arr.push(files);
                        var oSize = files.size;
                        var aName =  files.name;
                        aSize.push( oSize );
                        aTitle.push(aName);
                        window.localStorage.setItem('foodImg',aName);
                        window.localStorage.setItem('upfoodImg',aName);
                        readerFile(files);
                    })(i);
                }
            }
            this.value = '';
        }
    }
}

// 生成文件
function readerFile(files) {
    console.log(oUl.innerHTML)
    if( oUl.innerText == '' || oUl.innerText == null ){
        var blob = new Blob([files]);
        var url = window.URL.createObjectURL(blob);
        console.log(url)

        var li = document.createElement('li');
        li.innerHTML = '<img src="'+url+'" width="100%" height="100%" "/><p></p>';
        li.style.margin = "0 auto";
        oUl.appendChild(li);

        var img = new Image();
        img.src = url;
        img.width = 150;
        img.onload = function () {
            conut();
        }
    }else{
        alert("只能选择一张照片")
    }

    /*var blob = new Blob([files]);
    var url = window.URL.createObjectURL(blob);
    var img = new Image();
    img.src = url;
    img.width = 150;
    img.onload = function () {
        oUl.appendChild(img);
    }*/
    /*var obj = new FileReader();
    obj.readAsDataURL(files);
    obj.addEventListener('load',function () {
        var img = new Image();
        img.src = this.result;
        img.width = 150;
        img.onload = function () {
            oUl.appendChild(img);
        }
    })*/
}


// 拖拽功能
drag.ondragenter = function () {
    this.innerHTML = '请释放鼠标';
}
drag.ondragover = function (e) {
    e.preventDefault();
    e.stopPropagation();
}
drag.ondragleave = function () {
    this.innerHTML = '请将图片拖到此区域';
}
drag.ondrop = function (e) {
    e.preventDefault();
    e.stopPropagation();
    for ( var i=0;i<e.dataTransfer.files.length;i++ ){
        (function (i) {
            var files = e.dataTransfer.files.item(i)
            arr.push(files);
            var oSize = files.size;
            var aName =  files.name;
            aSize.push( oSize );
            aTitle.push(aName);
            window.localStorage.setItem('foodImg',aName);
        window.localStorage.setItem('upfoodImg',aName);
            readerFile(files);
        })(i);
    }
    this.innerHTML = '请将图片拖到此区域';
}

// 统计图片个数 大小名称

function conut() {
    var aLi = oUl.querySelectorAll('li');
    if( !aLi.length ){
        arr = [];
        aSize = [];
        aTitle = [];
        picLen.innerHTML = 0;
        picSize.innerHTML = 0;
    }

    var aP = oUl.getElementsByTagName('p');
    picLen.innerHTML = arr.length;
    if( !aSize[0] ){
        picSize.innerHTML = 0;
    }else {
        picSize.innerHTML = (eval(aSize.join('+'))/1024/1024).toFixed(2);
    }
    //console.log( aP.length )
    for( var i=0;i<aP.length;i++ ){
        aP[i].innerHTML = aTitle[i]+'<i></i>';
    }
    slide();
}

// 删除li

function slide() {
    var aLi = oUl.getElementsByTagName('li');
    var n = 0;
    for( var i=0;i<aLi.length;i++ ){
        //console.log( aLi[i].children[1].children[0] )
        aLi[i].index = i;
        aLi[i].children[1].children[0].onclick= function () {
            //console.log( this.parentNode.parentNode.index );
            n = this.parentNode.parentNode.index;
            oUl.removeChild(aLi[n]);
            arr.splice(n,1);
            aSize.splice(n,1);
            conut();
            for( var i=0;i<aLi.length;i++ ){
                aLi[i].index = i;
            }
        }
    }
}

// 图片上传
/*btn.onclick = function () {
    var aLi = oUl.querySelectorAll('li');
    aLi.forEach(function (item,i) {
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            console.log( i )
            drag.innerHTML = '恭喜你上传成功';
            oUl.removeChild(item);
            conut();

        }
        xhr.open('post','./uploadfile/upload.php',true);
        var data = new FormData();
        data.append('file',arr[i]);
        xhr.send(data);
    })



    for ( var i=0;i<arr.length;i++ ){
        (function (i) {
            var aLi = oUl.getElementsByTagName('li');
            var xhr = new XMLHttpRequest();
            xhr.onload = function () {
                arr.splice(i,1);
                aSize.splice(i,1);
                drag.innerHTML = '恭喜你上传成功';
                oUl.removeChild(aLi[i]);
                conut();
            }
            xhr.open('post','./upload.php',true);
            var data = new FormData();
            data.append('file',arr[i])
            xhr.send(data);
        })(i);
    }
}*/








