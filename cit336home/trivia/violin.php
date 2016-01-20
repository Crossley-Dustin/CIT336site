<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Violin vs Viola</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/metastyle.php'; ?>
    </head>
    <body>
        <main>
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/header.php'; ?>
            </header>
            <div class="contain">
                <div class="column one">
                    <nav class="subnav">
                        <ul>
                            <li><a href="/cit336home/trivia/violin.php">Violin</a></li>
                            <li><a href="/cit336home/trivia/paper.php">Paper</a></li>
                            <li><a href="/cit336home/trivia/candy.php">Candy</a></li>
                        </ul>
                    </nav> 
                </div>

                <div class="column two">
                    <section>
                        <h1>Violin vs Viola</h1>
                        <h2>What's the difference between a violin and a viola?</h2>
                    </section>

                    <section>

                        <div>
                            <img src='/cit336home/images/violin.jpg' alt='violin'>
                            <span>Violins are:</span>
                            <ul>
                                <li>smaller</li>
                                <li>higher pitched</li>
                                <li>strings are E A D G</li>
                                <li>music is in treble clef</li>
                            </ul>
                        </div>
                        <div>
                            <img src='/cit336home/images/viola.jpg' alt='viola'>
                            <span>Violas are:</span>
                            <ul>
                                <li>bigger than a violin</li>
                                <li>lower pitched and mellower</li>
                                <li>strings are A D G C</li>
                                <li>music is in alto clef</li>
                            </ul>
                        </div>

                    </section>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>