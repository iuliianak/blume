<?php
echo "<h1>This is a russian wikipedia</h1>";
echo "<h2>Википедия на русском языке</h2><hr>";
echo file_get_contents('https://ru.wikipedia.org');

