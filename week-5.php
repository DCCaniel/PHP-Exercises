<?php $loggedIn = false; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!-- Show HTML form if user IS NOT logged in -->
<form>
    <fieldset>
        <legend>Login Form</legend>
        <div class="form-box">
            <label>username</label>
            <input type="text">
        </div>
        <div class="form-box">
            <label>password</label>
            <input type="password">
        </div>
        <div class="form-box">
            <input type="submit" value="LOGIN">
        </div>
    </fieldset>
</form>
<?php
// if user is admin:
   // greet user with "Hello Admin!"
// guest:
   // greet user with "Hello Guest!"
// otherwise:
   // "Goodbye, my server doesn't like you."

$employee = [
    "first-name" => "Hitomi",
    "last-name" => "Inoue",
    "email" => "hi@ac.com",
    "number" => "555-5555"
];

foreach ($employee as $key => $value) {
    echo "$key: $value<br>";
}

$lol = "This is a global variable.";
function testScope() {
    // echo $lol;
} 
testScope();

function testScope2() {
    global $loc;
    $loc = "This is a local variable.";
    echo $loc . "<br>";
} 
testScope2();

echo $lol . "<br>";
echo $loc;

$_GET["first-name"] = "Anna";
$_GET["last-name"] = "Smith";
print_r($_GET);
?>

<!-- Show feedback if user IS logged in -->
<div class="feedback">
    <p>Hello User!</p>
</div>
</body>
</html>