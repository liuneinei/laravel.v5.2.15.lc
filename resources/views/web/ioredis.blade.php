<html>
<head>
    <script src="{{asset('/js/socket.io-client/dist/socket.io.js')}}"></script>
    <script type="text/javascript">
        var url='str';
        var socket = io('http://localhost:3000');
        socket.on('connection', function (data) {
            console.log('data：'+data);
        });
        socket.on('test-channel:App\\Events\\SomeEvent', function(message){
            document.getElementById('message').innerHTML=message;
            //console.log('message：'+message);
        });
        console.log(socket);
    </script>
</head>
<body>
<div id="message">
    测试
</div>
</body>
</html>

