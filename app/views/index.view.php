<form method="POST" action="/about">
    <input type="text" name="name">
    <?= CSRF::generate();?>
    <input type="submit">
</form>
