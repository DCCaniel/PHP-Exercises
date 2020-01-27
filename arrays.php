<?php /*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$favfood = [
"corn nuts",
"corn bread",
"tamale",
"corn"];

/*
Print every array element in a new line.
*/

echo $favfood[0] . "<br>";
echo $favfood[1] . "<br>";
echo $favfood[2] . "<br>";
echo $favfood[3] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
<li>" . $favfood[0] . "</li>"
 . "<li>" . $favfood[1] . "</li>"
 . "<li>" . $favfood[2] . "</li>"
 . "<li>" . $favfood[3] . "</li>
 </ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
"corn nuts"=>"dessert",
"corn bread"=>"main course",
"tamale"=>"main course",
"corn"=>"salad"];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo $favfood[0] . " | " . $food_assoc["corn nuts"] . "<br>" 
 . $favfood[1] . " | " . $food_assoc["corn bread"] . "<br>"
 . $favfood[2] . " | " . $food_assoc["tamale"] . "<br>"
 . $favfood[3] . " | " . $food_assoc["corn"] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece

So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = [
  "corn_nuts"=> [
    "type" => "dessert",
    "origin" => "multiple countries of origin"
  ],
  "corn_bread"=> [
    "type" => "main course", 
    "origin" => "multiple countries of origin with different variations"
  ],
  "tamale"=>[
    "type" => "main course", 
    "origin" => "Mexico"
  ],
  "corn"=>[
    "type" => "salad", 
    "origin" => "Mexico"
  ]
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo $favfood[0]
 . " | "
 . $food_assoc["corn_nuts"]["type"]
 . " | "
 . $food_assoc["corn_nuts"]["origin"]
 . "<br>" . $favfood[1]
 . " | "
 . $food_assoc["corn_bread"]["type"]
 . " | "
 . $food_assoc["corn_bread"]["origin"]
 . "<br>" . $favfood[2]
 . " | "
 . $food_assoc["tamale"]["type"]
 . " | "
 . $food_assoc["tamale"]["origin"]
 . "<br>" . $favfood[3]
 . " | "
 . $food_assoc["corn"]["type"]
 . " | "
 . $food_assoc["corn"]["origin"]
;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo
"<table>
  <tr>
    <th>".$favfood[0]."</th>
    <th>".$food_assoc["corn_nuts"]["type"]."</th>
    <th>".$food_assoc["corn_nuts"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$favfood[1]."</th>
    <th>".$food_assoc["corn_bread"]["type"]."</th>
    <th>".$food_assoc["corn_bread"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$favfood[2]."</th>
    <th>".$food_assoc["tamale"]["type"]."</th>
    <th>".$food_assoc["tamale"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$favfood[3]."</th>
    <th>".$food_assoc["corn"]["type"]."</th>
    <th>".$food_assoc["corn"]["origin"]."</th>
  </tr>
</table>"
?>