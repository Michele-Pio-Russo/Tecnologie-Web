<?php
session_start();
?>
<!DOCTYPE html>
<html lang="it"> 
    <head>
        <title>Tera ➔ Forum</title>
        <link rel="icon" href="..\..\imgs\Home\homeIcon.ico" type="image/x-icon">
        <meta name="description" content="Forum di Tera">  
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="..\..\css\home.css"/>
        <script type="text/javascript" src="..\..\js\index.js" defer></script>
    </head>

    <body>
        <?php if (isset($_SESSION['autorizzato']) && $_SESSION['autorizzato'] === true): ?>
        <div class="header">
        <div class="logo">
            <div class="immagine-logo"></div>
            <h1>TERA</h1>
        </div>
        <div class="login">
            <div class="theme-icon" title="Cambia al tema Scuro">
            <button id="theme-button">
                <img src="/imgs/Tema/light_mode.png" alt="Immagine Tema Chiaro" />
                <img src="/imgs/Tema/dark_mode.png" alt="Immagine Tema Scuro" />
            </button>
        </div>
            <p>Login</p>
            <a href="/html/login.html" title="Vai alla pagina di accesso">
                <img src="/imgs/Home/login-logout-white-icon-11642597802btccm3uuci-removebg-preview.png"
                    alt="Immagine Login" class="login-icon" /></a>
        </div>
    </div>
        <div class="main-content">
            <div class="content">
                <h2>Chi siamo?</h2>
                <div class="element1">
                <img class="image1" src="/imgs/Home/steven.jpg" alt="stefano">
                <p>Siamo tre ragazzi con un’idea: creare una community per chi, come noi, va oltre la superficie. 
                    Persone che non si accontentano di consumare contenuti in un periodo storico predominato da passività, 
                    ma vogliono capire il messaggio, l’intento e il valore artistico dietro ogni forma di espressione 
                    e partecipare in modo attivo al progetto. Da questa necessità nasce Tera.</p>
                </div>
                <h2>Perché dovresti prendere parte al nostro progetto?</h2>
                <div class="element2">
                <img class="image2" src="/imgs/Home/steven.jpg" alt="stefano">
                <p>Partecipare attivamente al nostro progetto vuol dire portare, proprio come abbiamo fatto noi, 
                    la propria visione su ciò che più gli appassiona. Ognuno di noi ha una propria visione, e Tera è fatto per concretizzarla. 
                    Si tratta di raccontare perché qualcosa ti colpisce, di confrontarsi senza paura di essere giudicati e di costruire un dialogo 
                    autentico attorno alle proprie passioni.</p>
                </div>
                <h2>Cosa trovi su Tera.</h2>
                <div class="element1">
                <img class="image1" src="/imgs/Home/steven.jpg" alt="stefano">
                <p>Tera non è un semplice sito web: è un progetto che vuole crescere, creare community e far scoprire nuove prospettive. 
                    Qui puoi leggere analisi, scoprire contenuti, confrontarti con altri e approfondire tutto ciò che riguarda arte, 
                    cultura e creatività, in modo accessibile ma profondo.</p>
                </div>
                <h2>Regolamento</h2>
                <div class="element2">
                <img class="image2" src="/imgs/Home/steven.jpg" alt="stefano">
                <ul>
                    <li>Essere rispettosi nei confronti dei creatori del sito e degli altri utenti.</li>
                    <li>Usare un linguaggio corretto e costruttivo.</li>
                    <li>Divertirsi e partecipare con entusiasmo.</li>
                </ul>
                </div>
            </div>
            <div class="sidebar">
                <nav class="menu">
                    <div class="menu-itme">
                        <img src="/imgs/Home/Icone/icons8-home-100.png" alt="home icon">
                        <a href="/html/home.html">HOME</a>
                    </div>
                    <div class="menu-itme">
                        <img src="/imgs/Home/Icone/icons8-pencil-100.png" alt="animazione">
                        <a href="/html/animazione.html">ANIMAZIONE & DISEGNO</a>
                    </div>
                    <div class="menu-itme">
                        <img src="/imgs/Home/Icone/icons8-controller-100.png" alt="videogiochi">
                        <a href="/html/videogiochi.html">VIDEOGIOCHI</a>
                    </div>
                    <div class="menu-itme">
                        <img src="/imgs/Home/Icone/icons8-headphones-100.png" alt="hip-hop">
                        <a href="/html/hip-hop.html">HIP-HOP</a>
                    </div>
                    <div class="menu-itme">
                        <img src="/imgs/Home/Icone/icons8-clapperboard-100 (1).png" alt="cinema">
                        <a href="/html/cinema.html">CINEMA</a>
                    </div>
                    <div class="menu-itme">
                        <img src="/imgs/Home/Icone/icons8-other-100.png" alt="menzioni">
                        <a href="/html/menzioni.html">MENZIONI ONOREVOLI</a>
                    </div>
                    <div class="menu-itme">
                        <img src="/imgs/Home/Icone/icons8-forum-100.png" alt="forum">
                        <a href="/html/forum.html">FORUM</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="footer">
            <div class="contacts">
                <div class="contact whatsapp">
                    <img src="/imgs/Home/Footer/icons8-whatsapp-100 (1).png" alt="Whatsapp">
                    <a href="#">Whatsapp</a>
                </div>
                <div class="contact instagram">
                    <img src="/imgs/Home/Footer/icons8-instagram-100.png" alt="Instagram">
                    <a href="#">Instagram</a>
            </div>
                <div class="contact facebook">
                    <img src="/imgs/Home/Footer/icons8-facebook-nuovo-100.png" alt="Facebook">
                    <a href="#">Facebook</a>
                </div>
                <div class="contact telegram">
                    <img src="/imgs/Home/Footer/icons8-telegramma-100.png" alt="Telegram">
                    <a href="#">Telegram</a>
                </div>
                <div class="contact discord">
                    <img src="/imgs/Home/Footer/icons8-logo-discord-100.png" alt="Discord">
                    <a href="#">Discord</a>
                </div>
            </div>
            <p>© 2026 TERA. All rights reserved.</p>
        </div>
    </body>
    <?php else: ?>

    <h1>Accesso Negato</h1>
    <p>Per favore, <a href="login.html">autenticati</a> per visualizzare questa pagina.</p>

    <?php endif; ?>

</html>