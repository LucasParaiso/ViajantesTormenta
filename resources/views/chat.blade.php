<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.jpg" type="image/x-icon">

    <!-- CSS -->
    <style>
        .chat-row {
            margin: 50px;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        ul li {
            padding: 8px;
            margin-bottom: 20px;
        }

        #chatInput {
            border: 1px solid #d3d3d3;
            padding: 8px 10px;
        }

        #nameInput {
            border: 1px solid darkgray;
            padding: 8px 10px;
        }
    </style>

    <!-- Title -->
    <title>Viajantes da Tormenta</title>
</head>

<body>
    <h1 class="my-4 mx-5 display-5">CHAT</h1>

    <div class="container">
        <div class="row chat-row">
            <div class="chat-content">
                <ul id="chat-content-ul"></ul>

                <div class="chat-section">
                    <div class="chat-box">
                        <div class="input bg-white" id="chatInput" contenteditable=""></div>
                        <div class="input bg-white mt-2" id="nameInput" contenteditable=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"
        integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            console.log("Pronto!");

            const target = document.querySelector('#chat-content-ul')

            const observer = new MutationObserver(function(mutations) {
                let items = target.getElementsByTagName('li');

                for (let i = 0; i < items.length; i++) {
                    const nameMessage = items[i].getElementsByTagName('p')[0].innerHTML;
                    const nameInput = $("#nameInput").html()

                    console.log(nameInput, nameMessage);

                    if (nameMessage == nameInput) items[i].style.background = '#928787';
                    if (nameMessage != nameInput) items[i].style.background = '#c3c5c5';
                }
            });

            observer.observe(target, {
                attributes:    true,
                childList:     true,
                characterData: true
            });
        });

        $(function() {
            const ip_adress = '127.0.0.1'
            const socket_port = '3000'
            const socket = io(ip_adress + ":" + socket_port)

            let chatInput = $('#chatInput');

            chatInput.keypress(function(e) {
                const content = $(this).html()
                const name = $("#nameInput").html()

                const message = {
                    name: name,
                    content: content,
                };

                if (e.which === 13 && !e.shiftKey) {
                    socket.emit('sendChatToServer', message);
                    chatInput.html('');
                    return false;
                }
            })

            socket.on('sendChatToClient', (message) => {
                $('.chat-content ul').append(`
                    <li>
                        <p class="chat-content-name">${message.name}</p>
                        <p class="chat-content-message">${message.content}</p>
                    </li>
                `)
            })
        })
    </script>
</body>

</html>
