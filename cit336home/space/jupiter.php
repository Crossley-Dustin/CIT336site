<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jupiter</title>
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
                        <h1>Jupiter</h1>
                        <p>How many moons does Jupiter have?</p>
                    </section>

                    <section>
                        <input type="number" placeholder='Enter your guess'><label>Enter the number of moons Jupiter has</label>
                        <p>answer shows here</p>
                        <video controls preload="none">
                            <source src='/cit336home/video/jupiter_moon_pullout_.m4v'>
                            <source src='/cit336home/video/jupiter_moon_pullout.webmhd.webm'>
                            <p>Your browser does not support HTML5 video. You can <a href='jupiter_moon_pullout' title='download an MP4 version of the file'>download an MP4 version</a>of the file in MP4 format to your computer.</p>
                        </video>
                        <p>source:<a href='http://svs.gsfc.nasa.gov/goto?3604' title='NASA Goddard Space Flight Center Scientific Visualization Studio'>NASA Goddard Space Flight Center Scientific Visualization Studio</a></p>
                    </section>
                </div> 
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>