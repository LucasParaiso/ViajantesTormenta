{{--
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
--}}

<nav class="navbar fixed-top">
    <div class="container-fluid">
        <ion-icon class="mt-2" size="large" name="dice-outline" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasChat" aria-controls="offcanvasChat" style="cursor: pointer;"></ion-icon>
    </div>
</nav>

<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasChat" aria-labelledby="offcanvasChatLabel"
    data-bs-scroll="true">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasChatLabel">Chat</h5>
        <button type="button" class="bg-transparent border border-0" data-bs-dismiss="offcanvas" aria-label="Close">
            <ion-icon size="large" name="close-outline"></ion-icon>
        </button>
    </div>

    <div class="offcanvas-body p-0">
        <div class="container overflow-auto scrollBottom">
            <div class="row row-cols-1">
                <div class="chat-content p-0">
                    <ul class="chat-content-group mx-3 p-0" id="list-group"></ul>
                </div>
            </div>
        </div>

        <div class="chat-section">
            <div class="chat-box">
                <textarea class="form-control" id="chatBox" rows="3" placeholder="Digite sua Mensagem..."></textarea>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const target = document.querySelector('.chat-content > ul')

        const observer = new MutationObserver(function(mutations) {
            let items = target.getElementsByTagName('li');

            for (let i = 0; i < items.length; i++) {
                const nameMessage = items[i].getElementsByTagName('p')[0].innerHTML;
                const nameInput = $("#sheetName").html()

                if (nameMessage == nameInput) items[i].style.background = '#A8A8A8';
                if (nameMessage != nameInput) items[i].style.background = '#858585';
            }
        });

        observer.observe(target, {
            attributes: true,
            childList: true,
            characterData: true
        });
    });

    $(function() {
        const ip_adress = '127.0.0.1'
        const socket_port = '3000'
        const socket = io(ip_adress + ":" + socket_port)

        let chatInput = $('#chatBox');

        chatInput.keypress(function(e) {
            let content = $(this).val()

            const name = $("#sheetName").html()

            if (e.which === 13 && !e.shiftKey) {
                let contentSplited = content.split(" ")

                if (contentSplited[0] == '/r') content = rollDice(content)

                const message = {
                    name: name,
                    content: content,
                };

                socket.emit('sendChatToServer', message);
                chatInput.val('');
                return false;
            }
        })

        socket.on('sendChatToClient', (message) => {
            $('.chat-content ul').append(`
                <li class="list-group-item mb-1">
                    <p class="chat-content-name">${message.name}</p>
                    <p class="chat-content-message text-break">${message.content}</p>
                </li>
            `)

            const scroll = document.querySelector('.scrollBottom');

            scroll.scrollTo({
                top: scroll.scrollHeight,
                left: 0,
                behavior: 'smooth'
            })
        })
    })

    function rollDice(content) {
        const errorMessage = `Não foi possível executar o comando: ${content}`

        try {
            let contentSplited = content.split(" ")

            if (contentSplited.length != 2 && contentSplited.length != 4) return errorMessage

            // DADO
            if (!contentSplited[1].includes('d')) return errorMessage

            let comands = contentSplited[1].split('d')

            if (comands[0] == '' || isNaN(comands[0])) return errorMessage
            if (comands[1] == '' || isNaN(comands[1])) return errorMessage

            let dices = []
            for (let i = 0; i < comands[0]; i++) dices.push(Math.floor(Math.random() * ((comands[1] - 1) + 1) + 1));

            let sumDices = 0
            sumDices += parseInt(dices.reduce((partialSum, a) => partialSum + a, 0));

            // MODIFICADOR
            if (contentSplited.length > 2) {
                var modificador = contentSplited[3]

                if (isNaN(modificador)) return errorMessage

                if (contentSplited[2] == '+') sumDices += parseInt(modificador)
                else if (contentSplited[2] == '-') sumDices -= parseInt(modificador)
                else return errorMessage
            }

            // RESULTADO
            content =
                `Rolou ${contentSplited[1]}${contentSplited[2]}${contentSplited[3]}: <strong>${sumDices}</strong> = [${ dices[0] }`

            for (let i = 1; i < dices.length; i++) {
                content += `, ${dices[i]}`
            }

            content += ']'

            if (contentSplited.length > 2) {
                content += ` ${contentSplited[2]} ${modificador}`
            }

            return content
        } catch (error) {
            console.log(error);
            return errorMessage
        }
    }
</script>
