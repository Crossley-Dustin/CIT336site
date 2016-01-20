<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trivia</title>
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
                    <h2>Trivia Time!</h2>
                    <p>
                        What's the difference between a violin and viola? What's the world's most popular candy? How thick is a piece of paper folded in half 50 times?
                    </p>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>
