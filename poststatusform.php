<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Using if and while statements</title>
</head>

<body>
    <h1>Status Posting System</h1>
    <form method="POST" action="">
        Status code (required): <input type="text" name="status_code">
    </form>
    <form method="POST" action="">
        Status (required): <input type="text" name="status">
    </form>
    <form action="/action_page.php">
        <p>Share</p>
        <input type="radio" id="public" name="publicStatus" value="public">
        <label for="male">Public</label><br>
        <input type="radio" id="friends" name="publicStatus" value="friends">
        <label for="female">Friends</label><br>
        <input type="radio" id="onlyme" name="publicStatus" value="onlyme">
        <label for="other">Only Me</label>
    </form>
    <form method="POST" action="">
        Date: <input type="date" name="status">
    </form>
    <form>
        <input type="checkbox" id="allowLike" name="allowLike" value="allowLike">
        <label for="allowLike"> Allow Like </label><br>
        <input type="checkbox" id="allowComment" name="allowComment" value="allowComment">
        <label for="allowComment"> Allow Comment </label><br>
        <input type="checkbox" id="allowShare" name="allowShare" value="allowShare">
        <label for="allowShare"> Allow Share </label>
    </form> 
    <input type="submit">


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $test = $_POST['year'];
        echo "{$test}";
    }
    
    ?>
</body>

</html>