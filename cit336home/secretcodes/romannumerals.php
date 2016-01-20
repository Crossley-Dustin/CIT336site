<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Roman Numerals</title>
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
                        <h2>Counting in Roman Numerals</h2>
                        <p>How do you count in Roman Numerals?</p>
                    </section>

                    <section>
                        The Roman's developed a way to count things that is still used in many places even today. Dates are commonly displayed in Roman Numerals, as are the numbers on clock faces.
                        <table>
                            <tr>
                                <th>I</th>
                                <th>The smallest unit of measurement, 1.  Easy to count I, II, III. But too many in a row are difficult to read clearly so...</th>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td>The the Roman's used a symbol for 5.  Putting an I in from of the V subtracts one from 5, so IV means 4. Putting an I after V like so, VI,  means 6.</td>
                            </tr>
                            <tr>
                                <td>X</td>
                                <td>X is 10. The same subtraction used for 4 is used to show 9.  One from ten, or IX, is 9.  Putting 2 of these in a row, XX, is 20.</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>L is 50. Putting the next smaller number X in front of L would be, XL, or 40.  70 would be LXX. But putting 2 L's together isn't 100 because...</td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td>C is 100. The Latin word for 100 is centum. XC is 90, CCC is 300.</td>
                            </tr>
                            <tr>
                                <td>D</td>
                                <td>D is 500. CD is 100 from 500, or 400.  But DD is not 1000 because...</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td></td>
                            </tr>
                        </table>
                    </section>

                    <section>
                        <div><input type='number'><label>Enter a number</label></div>
                        <div>Roman numeral answer here</div>
                    </section>
                </div>
            </div>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336home/modules/footer.php'; ?>
            </footer>       
        </main>
    </body>
</html>
