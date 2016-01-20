<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Candy</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/metastyle.php'; ?>
        <script type="text/javascript" src="/cit336home/scripts/jscript.js"></script>
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
                        <h1>Candy</h1>
                        <h2>What's the most popular candy in the world?</h2>
                    </section>

                    <section>
                        <h3>Which candy do you think is the most popular?</h3>
                        <div><input type='radio' name='candy' value='Reeses' onclick="Trivia_Candy('Reeses')">Reese's</div>
                        <div><input type='radio' name='candy' value ='Dove' onclick="Trivia_Candy('Dove')">Dove/Galaxy</div>
                        <div><input type='radio' name='candy' value = 'Skittles' onclick="Trivia_Candy('Skittles')">Skittle's</div>
                        <div><input type='radio' name='candy' value ='M&Ms' onclick="Trivia_Candy('M&Ms')">M&AMP;M's</div>
                        <div><input type='radio' name='candy' value = 'ThreeMusketeers' onclick="Trivia_Candy('ThreeMusketeers')">Three Musketeers</div>
                        <div><input type='radio' name='candy' value = 'Snickers' onclick="Trivia_Candy('Snickers')">Snickers</div>
                    </section>
                    <section>
                        <p id="candyanswer"></p>
                    </section>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>