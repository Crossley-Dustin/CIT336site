<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mad Libs</title>
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
                        <h1>Mad Libs</h1>
                        <p>Have fun making up a crazy story</p>
                    </section>
                    <section>
                        <h1>Story Theme: The day I threw back my homework</h1>
                        <h2>Please fill in the required words for this story</h2>
                        <div><input type='text' placeholder='Enter a noun'><label>Teacher's Name</label></div>
                        <div><input type='text' placeholder='Enter a verb'><label>Verb</label></div>
                        <div><input type='text' placeholder='Enter an adjective'><label>Adjective</label></div>
                        <div><input type='text' placeholder='Enter another adjective'><label>Another Adjective</label></div>
                        <div><input type='text' placeholder='Enter a noun'><label>Pet Name</label></div>
                    </section>
                    <section>
                        <h2>Here's your story!</h2>
                        <p>Story text here</p>
                    </section>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>
