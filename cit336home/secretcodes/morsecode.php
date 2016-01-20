<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Morse Code</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/metastyle.php'; ?>
    </head>
    <body>
        <main>
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/header.php'; ?>
            </header>

            <div id="contain">
                <div class="column one">
                    <nav class="subnav">
                        <ul>
                            <li><a href="/cit336home/secretcodes/codeofclaw.php">Code of Claw</a></li>
                            <li><a href="/cit336home/secretcodes/morsecode.php">Morse Code</a></li>
                            <li><a href="/cit336home/secretcodes/romannumerals.php">Roman Numerals</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column two">
                    <section>
                        <h1>Morse Code</h1>
                        <h2>How do you decode Morse Code?</h2>
                    </section>

                    <section>
                        <p>In 1836 Samuel Morse invented a way to send words over long distances using long and short electrical signals. Morse code is still used today in military, amateur radio, and emergency situations. It is also used by people with certain disabilities to communicate with others.</p>                   
                        <p>Morse code can be read, but is most effective when it is heard:</p>
                        <audio controls preload="none">
                            <source src="/cit336home/audio/morsecode-d.mp3" type="audio/mp3">
                            <source src="/cit336home/audio/morsecode-d.ogg" type="audio/ogg">
                            <p>Your browser does not support HTML5 audio.  You can <a href="/cit336home/audio/morsecode-d.mp3" title="download an MP3 file">download an MP3 file</a>
                                of the file to listen on your own MP3 player by right-clicking the link and selecting "Save As...".</p>
                        </audio>
                        <p>That was a voice interpretation of the letter D. Listen to this example of the letter D using electronic sounds:</p>
                        <audio controls preload="none">
                            <source src="/cit336home/audio/d-morse-code.ogg" type="audio/ogg">
                            <source src='/cit336home/audio/d_morse_code.mp3' type='audio/mp3'>
                            <p>Your browser does not support HTML5 audio.  You can <a href="/cit336home/assets/morsecode-d.mp3" title="download an MP3 file">download an MP3 file</a>
                                of the file to listen on your own MP3 player by right-clicking the link and selecting "Save As...".</p>
                        </audio>
                    </section>

                    <section>
                        <p>Write a message and it will be translated into Morse code below!</p>
                        <div><input type="text"><label>Enter secret message here</label></div>
                        <div>More code here</div>
                    </section>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>