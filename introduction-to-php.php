<?php
/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/
echo "Welcome to PHP!";

// task separator
echo "<hr style=\"margin 1rem 0\">"; 
?>

<?php 
/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/
echo 'PHP stands for "Hypertext Preprocessor"!';

// task separator
echo "<hr style=\"margin 1rem 0\">";
?>

<?php
/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/
echo '<p>PHP stands for "Hypertext Preprocessor"!</p>';

// task separator
echo "<hr style=\"margin 1rem 0\">";
?>

<?php
/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

echo '<p>
<acronym title="Hypertext Markup Language">HTML</acronym> - Stands for Hypertext Markup Language<br>
<acronym title="Cascading Stylesheet">CSS</acronym> - Stands for Cascading Stylesheet<br>
<acronym title="Javascript">JS</acronym> - Stands for JavaScript<br>
<acronym title="Hypertext Preprocessor">PHP</acronym> - Stands for Hypertext Preprocessor<br>
<acronym title="Structural Query Language">SQL</acronym> - Stands for Structural Query Language<br>
</p>';

// task separator
echo "<hr style=\"margin 1rem 0\">";
?>

<?php
/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

echo '<ul>
<li><acronym title="Hypertext Markup Language">HTML</acronym> - Stands for Hypertext Markup Language</li>
<li><acronym title="Cascading Stylesheet">CSS</acronym> - Stands for Cascading Stylesheet</li>
<li><acronym title="Javascript">JS</acronym> - Stands for JavaScript</li>
<li><acronym title="Hypertext Preprocessor">PHP</acronym> - Stands for Hypertext Preprocessor</li>
<li><acronym title="Structural Query Language">SQL</acronym> - Stands for Structural Query Language</li>
</ul>';
?>