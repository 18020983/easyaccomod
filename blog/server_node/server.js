var io = require('socket.io')(6001)
console.log('ktn')
io.on('error',function(socket){
    console.log('error')
})

io.on('connection',function(socket){
    console.log('ok' + socket.id)
})

var Redis = require('ioredis')
var redis = new Redis(1000)

redis.psubscribe("*",function(error,count){

})
redis.on('pmessage',function(partner,channel,message){
    message = JSON.parse(message)
    io.emit(channel+":"+message.event,message.data.message)
})