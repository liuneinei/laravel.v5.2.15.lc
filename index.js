//#######测试1
var app = require('http').createServer(handler);
var io = require('socket.io')(app);
var Redis = require('ioredis');
var redis = new Redis('6379','139.199.8.48',{ password: '' });
app.listen(8087, function() {
    console.log('Server is running! Listening on Port 8087');
});
function handler(req, res) {
    res.writeHead(200);
    res.end('');
}
io.on('connection', function(socket) {
    console.log('connected');
});
redis.psubscribe('*', function(err, count) {
    console.log('err:'+err+"/count:"+count);
});
redis.on('pmessage', function(subscribed, channel, message) {
    console.log(subscribed);
    console.log(channel);
    console.log(message);

    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});

//######测试2
// var app = require('express')();
// var http = require('http').Server(app);
// var io = require('socket.io')(http);
// var Redis = require('ioredis');
// var redis = new Redis('6379','139.199.8.48',{ password: 'hi,redis' });
//
// redis.subscribe('test-channel', function(err, count) {
// });
// redis.on('message', function(channel, message) {
//     console.log('Message Recieved: ' + message);
//     //message = JSON.parse(message);
//     io.emit(channel + ':' + message.event, message.data);
// });
// http.listen(3000, function(){
//     console.log('Listening on Port 3000');
// });