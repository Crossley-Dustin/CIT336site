<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Folded Paper</title>
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
                        <h1>Folded Paper</h1>
                        <h2>How thick is a piece of paper folded 50 times?</h2>
                        <img src='/cit336home/images/stackofpaper.jpg' alt='a stack of paper'>
                    </section>

                    <section>
                        <div><input type='radio' name='paper' onclick="Trivia_Paper('3feet')">3 feet</div>
                        <div><input type='radio' name='paper' onclick="Trivia_Paper('20feet')">20 feet</div>
                        <div><input type='radio' name='paper' onclick="Trivia_Paper('500miles')">6 inches</div>
                        <div><input type='radio' name='paper' onclick="Trivia_Paper('6inches')">500 miles</div>
                        <div><input type='radio' name='paper' onclick="Trivia_Paper('70million')">70 million miles</div>
                        <div><input type='radio' name='paper' onclick="Trivia_Paper('11centimeters')">11 centimeters</div>
                    </section>

                    <section>
                        <p id="paperanswer"></p>
                    </section>

                    <section>
                        <p>It's really not possible to fold a piece of paper in half 50 times, but let's just play with the idea for a minute.
                            <br>A piece of standard copy paper is about .1 millimeter thick, represented by this line:</p>
                        <p>________________________</p>
                        <p>Folding the paper in half would double the thickness to .2 millimeters:</p>
                        <p>________________________
                            <br>________________________</p>
                        <p>Folding it a second time would double the thickness from .2 to .4 millimeters.</p>
                        <p>________________________
                            <br>________________________
                            <br>________________________
                            <br>________________________</p>
                        <p>Folding it a third time would double the thickness from .4 to .8 millimeters.</p>
                        <p>________________________
                            <br>________________________
                            <br>________________________
                            <br>________________________
                            <br>________________________
                            <br>________________________
                            <br>________________________                   
                            <br>________________________</p>                    
                        <p>So, this is turning into an exponential answer.
                            <br>The formula is .1mm * 2^50, which equals 1.13 * 10^14mm.
                            <br>Converting that to kilometers means moving the decimal place 6 places; 3 to get from millimeters to meters and another 3 to get from meters to kilometers. This leaves us with 113,000,000 kilometers. 113 million kilometers is about 70 million miles.  That's most of the way from the earth to the sun!</p>
                    </section>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>