<form method="POST" action="/about" name="name_form">
    <input type="text" name="name">
    <?= App\Core\CSRF::generate("Submit_name");?>
    <input type="submit" name="Submit_name" value="POST">
</form>

<form method="GET" action="/about" name="surname_form">
    <input type="text" name="surname">
    <?= App\Core\CSRF::generate("/about");?>
    <input type="submit" name="Submit_surname" value="GET">
</form>
