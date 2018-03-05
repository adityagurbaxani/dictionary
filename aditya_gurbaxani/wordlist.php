<?php
    $db = new MySQLi('localhost', 'admin', '', 'test');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dictionary: World List</title>
        <link rel="stylesheet" type="text/css" href="./style.css" >
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="navbar" class="header">
            <img id="icon" src="./dictionary_invert.png">
            <a href="./wordlist.php" >Word List</a>
            <a>Login</a>
            <div class="search-container">
                <form id="search_form">
                    <input id="search_input" type="text" placeholder="Search" size="20">
                    <button id="search_submit" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
            <div class="main">
                <h1>Word List</h1><br><br>
                <form>
                    <fieldset>
                        <legend>Select List</legend>
                        <label>Alphbet:</label>
                        <select>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                                <option value="f">F</option>
                                <option value="g">G</option>
                                <option value="h">H</option>
                                <option value="i">I</option>
                                <option value="j">J</option>
                                <option value="k">K</option>
                                <option value="l">L</option>
                                <option value="m">M</option>
                                <option value="n">N</option>
                                <option value="o">O</option>
                                <option value="p">P</option>
                                <option value="q">Q</option>
                                <option value="r">R</option>
                                <option value="s">S</option>
                                <option value="t">T</option>
                                <option value="u">U</option>
                                <option value="v">V</option>
                                <option value="w">W</option>
                                <option value="x">X</option>
                                <option value="y">Y</option>
                                <option value="z">Z</option>
                        </select>
                        &nbsp;
                        <label>Other Lists</label>
                        <select>
                            <option value="all">All</option>
                            <option value="hf1">High Frequncy List 1</option>
                            <option value="hf2">High Frequncy List 2</option>
                        </select>
                    </fieldset>
                </form>
                <div class="alpha" id="A"><h2>A WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'a%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="B"><h2>B WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'b%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="C"><h2>C WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'c%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="D"><h2>D WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'d%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="E"><h2>E WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'e%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="F"><h2>F WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'f%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="G"><h2>G WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'g%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="H"><h2>H WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'h%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="I"><h2>I WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'i%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="J"><h2>J WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'j%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="K"><h2>K WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'k%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="L"><h2>L WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'l%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="M"><h2>M WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'m%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="N"><h2>N WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'n%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="O"><h2>O WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'o%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="P"><h2>P WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'p%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="Q"><h2>Q WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'q%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="R"><h2>R WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'r%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="S"><h2>S WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'s%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="T"><h2>T WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'t%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="U"><h2>U WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'u%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="V"><h2>V WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'v%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="W"><h2>W WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'w%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="X"><h2>X WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'x%\'';
                    $result = $db->query($sql);
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                        $i++;
                    }
                    if ($i == 0) {
                        echo "<p> No words </p>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="Y"><h2>Y WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'y%\'';
                    $result = $db->query($sql);
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                        $i++;
                    }
                    if ($i == 0) {
                        echo "<p> No words </p>";
                    }
                    ?>
                    </table>
                </div>
                <div class="alpha" id="Z"><h2>Z WordList</h2>
                <table>
                <?php
                    $sql = 'SELECT * from wordlist WHERE word LIKE \'z%\'';
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>";
                        echo "<b>".$row['word']."</b>";
                        echo "</td><td>";
                        echo $row['def'];
                        echo "</td></tr>";
                    }
                    ?>
                    </table>
                </div>
            </div>
        
    </body>
</html>