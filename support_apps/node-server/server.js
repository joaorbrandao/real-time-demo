var server = require('http').Server();
var io = require('socket.io')(server);
var Redis = require('ioredis');
var redis = new Redis();

redis.psubscribe('*', function (err, count) {
    console.log('Redis subscribe all...');
});
redis.on('pmessage', function (pattern, channel, message) {
    console.log(pattern, channel, message);
    message = JSON.parse(message);

    io.emit(`${channel}:${message.event}`, message.data);
});

server.listen(6001);