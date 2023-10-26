const express = require("express");
const app = express();
const server = require("http").createServer(app);
const socket_port = '3000'

const io = require("socket.io")(server, {
    cors: { origin: "*" },
});

io.on('connection', (socket) => {
    socket.on('sendChatToServer', (message) => {
        io.sockets.emit('sendChatToClient', message);
    })
})

server.listen(socket_port);
