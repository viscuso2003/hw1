<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soundcloud</title>
    <link rel="stylesheet" href="mhw2.css">
    <script src="mhw2.js" defer></script>
</head>
<body>
    <header>
        <div class="navbar">
            <img id="logo" src="logo.png" alt="logo">
            <img id="sc" src="sc.png" alt="soudcloud">
        </div>
        <div class="navlinks">
            <a id="logout" href="logout.php">Logout</a>
            <a id="favorites" href="favorites.php">Favorites</a>
        </div>
    </header>

    <img id="img1" src="im1.jpg" alt="img1">
    <img id="img1alt" src="im1alt.jpg" alt="img1">

    <div class="scritta">
        <h2>
            Discover more with SoundCloud Go+
        </h2>
        <p>
            SoundCloud Go+ lets you listen offline, ad-free, with over 320</br>million tracks — and growing.
        </p>

        <div class="bottoni">
            <a id="learn" href="#">Learn more</a>
            <a id="try" href="#">Try it free for 30 days</a>
        </div>

        <div class="buttons">
            <button data-index="1" id="sinistra"></button>

            <button data-index="2" id="destra"></button>
        </div>
    </div>
    <div class="cerca">
        <div id="Barra">
        <h1>Album musicali</h1>
        <form class="form">
            Inserisci il nome di un album 
            <input type='text' id='album'>
            <input type='submit' id='submit' value='Cerca'>
          </form>

          <section id="album-view">
          </section>
    </div>
        <span id="or">or</span>
        <a id="upload" href="#">Upload your own</a>        
    </div>

    <div id="hear">Hear what’s trending for free in the SoundCloud community</div>

    <div class="ttt">
    <div class="tracks">
        <img src="t1.jpg" alt="t1">
        <img src="t2.jpg" alt="t1">
        <img src="t346.jpg" alt="t1">
        <img src="t346.jpg" alt="t1">
        <img src="t5.jpg" alt="t1">
        <img src="t346.jpg" alt="t1">
    </div>

    <div class="tracks2">
        <img src="t7.jpg" alt="t1">
        <img src="t8.jpg" alt="t1">
        <img src="t9.jpg" alt="t1">
        <img src="t10.jpg" alt="t1">
        <img src="t11.jpg" alt="t1">
        <img src="t12.jpg" alt="t1">
    </div>
    </div>

    <div class="testo">
        <a href="#"><p>ecstacy - (slowed)</br>
            SUICIDAL-IDOL</p></a>

        <a href="#"><p>IDGAF (feat. Yeat)</br>
            octobersveryown
            </p></a>

        <a href="#"><p>15 PIANI - Sfera Ebbasta, Marracash</br>
            slowedmoon
            </p></a>

        <a href="#"><p>3UPHON - Sfera Ebbasta, thasup, Tony Effe</br>
            slowedmoon
            </p></a>

        <a href="#"><p>Vois sur ton chemin (Techno Mix)</br>
            Bennett
            </p></a>
        
        <a href="#"><p>CALCOLATRICI - Sfera Ebbasta, Geolier, Baby Gang, Simba La Rue</br>
            slowedmoon
            </p></a>
    </div>

    <div class="testo2">
        <a href="#"><p>My Love Mine All Mine</br>
            mitski</p></a>

        <a href="#"><p>Cadillac</br>
            boro
            </p></a>

        <a href="#"><p>KOKO - Come Le Convinci Tu (Mina 1975)</br>
            KOKO
            </p></a>

        <a href="#"><p>The Weeknd, JENNIE, Lily Rose Depp - One Of The Girls</br>
            The Weeknd
            </p></a>

        <a href="#"><p>Intro Orange County</br>
            gianlucaasinisi 
            </p></a>
        
        <a href="#"><p>Drake - You Broke My Heart</br>
            octobersveryown
            </p></a>
    </div>

    <div class="exp"><a id="explore" href="#">Explore trending playlists</a></div>

    <div>
        <img id="sf1" src="im2.jpg" alt="sfondo1">
    </div>

    <div>
        <img id="sf2" src="im3.jpg" alt="sfondo2">
    </div>

    <div class="block1">
        <p id="s1">Never stop</br>listening</p>
        <p id="s2">SoundCloud is available on</br>Web, iOS, Android, Sonos,</br>Chromecast, and Xbox One.</p>
    </div>

    <div class="apps">
        <a href="#"><img src="apple.png" alt="applestore"></a>
        <a href="#"><img src="apple.png" alt="applestore"></a>
    </div>

    <div class="block2">
        <p id="calling">Calling all creators</p>
        <p id="geton">Get on SoundCloud to connect with fans,</br>
            share your sounds, and grow your audience.</br>What are you waiting for?</p>
    </div>



    <div class="container">
        <h1>Joke of the Day</h1>
        <div id="joke" class="joke-container"></div>
    </div>

</body>
</html>