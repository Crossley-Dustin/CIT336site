<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mars</title>
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
                            <li><a href="/cit336home/space/jupiter.php">Jupiter</a></li>
                            <li><a href="/cit336home/space/mars.php">Mars</a></li>
                            <li><a href="/cit336home/space/earth.php">Earth</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column two">
                    <section>
                        <h2>Mars</h2>
                        <p>How many missions to Mars have there been?</p>
                    </section>

                    <section>
                        <input type="number" placeholder="Enter your guess"><label>Enter the number of moons.</label>
                        <p>answer shows here</p>
                    </section>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>