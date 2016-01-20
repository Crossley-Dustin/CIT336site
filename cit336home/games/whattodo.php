<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>What To Do?</title>
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
                            <li><a href="/cit336home/games/whattodo.php">What to do</a></li>
                            <li><a href="/cit336home/games/words.php">How many words</a></li>
                            <li><a href="/cit336home/games/madlibs.php">Mad Libs</a></li>
                        </ul>
                    </nav> 
                </div>
                <div class="column two">
                <section>
                    <h1>What to do?</h1>
                    <p>Ever have trouble deciding what to do?</p>
                </section>
                <section>
                    <h2>Ask your Question!</h2>
                    <input type="text">
                    <h2>Your answer is:</h2>
                    <p>Answer here</p>
                </section>
            </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>