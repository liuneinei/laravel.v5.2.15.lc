

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h2>Input Div:</h2>
<div id="div">
    <p>Just have a <span style='color:white; text-shadow:0 0 2px blue;'>TRY</span></p><p><b>By Dion</b></p>
</div>
<h2>Output Image:</h2>

<div id="imglist">

</div>
<script>
    var divContent = document.getElementById("div").innerHTML;
    var data = "data:image/svg+xml," +
        "<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200'>" +
        "<foreignObject width='100%' height='100%'>" +
        "<div xmlns='http://www.w3.org/1999/xhtml' style='font-size:16px;font-family:Helvetica'>" +
        divContent +
        "</div>" +
        "</foreignObject>" +
        "</svg>";
    var img = new Image();
    img.src = data;
    //document.getElementsByTagName('body')[0].appendChild(img);
    document.getElementById('imglist').appendChild(img);
</script>

<div style="width: 300px">
<?php $var = "中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国中华人民共和国"; ?>
<img src="{{url('/imgzn')}}/<?php echo $var?>" style="width: 100%;">
</div>
</body>
</html>