<html>
<head>
    <script src="{{asset('/js/socket.io-client/dist/socket.io.js')}}"></script>
    <script type="text/javascript">
        var socket = io('http://localhost:8087');
        socket.on('connection', function (data) {
            console.log(data);
        });
        socket.on('test-channel:App\\Events\\SomeEvent', function(messaxge){
            console.log(message);
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

