<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" placeholder="name" name="name"/>
        <br>
        <input type="text" placeholder="password" name="password"/>
        <br>

        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" checked>male
            <input type="radio" name="gender" value="female" checked>female
        </fieldset>
                <br>
               
        <fieldset>
            <legend>Select course</legend>
            <input type="checkbox" name="course[]" value="html" checked>html
            <input type="checkbox" name="course[]" value="css" checked>css
        </fieldset>
        <button type="submit">submit</button>
    </form>
    <?php
    echo isset($_POST["name"]);
    echo "";
    echo isset($_POST["password"]);
    echo $_GET ("course[]");
    ?>
</body>
</html>