<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DireOwl Contato</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/mobile.css">
</head>

<body>
    <header>
        <div class="logo"><img src="./imgs/logobranca.svg" width="55px">DireOwl</div>

        <nav id="nav">
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="Contato.html">Contato</a></li>
                <li><a href="#">Cadastro</a></li>
                <li><a href="#" class="login-btn">Login</a></li>
            </ul>

            <button onclick="abrirnav()" class="menulateral">
                <img src="./icons/botao-de-menu.png" alt="">
            </button>

        </nav>
        
    </header>
    <main>
        <section class="contact-section">
            <h1>Contato</h1>
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Não seja tímido!</h2>
                    <p>Fique à vontade para entrar em contato conosco. Estamos abertos para discutir novas ideias e
                        melhorias para o bom funcionamento do nosso site!</p>

                        
                    <p class="email">Envie-me </p>
                    <img src="icons/email-icon.png" alt="img-email" >
                        <br>
                        <p><a href="mailto:direwoltcc135@gmail.com">direwoltcc135@gmail.com</a></p>
                </div>
                <div class="contact-form">
                    <form action="https://formsubmit.co/direwoltcc135@gmail.com" method="post">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" required>

                        <label for="surname">Sobrenome</label>
                        <input type="text" id="surname" name="surname" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Menssagem</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>