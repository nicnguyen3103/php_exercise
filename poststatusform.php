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
        <br/>
        Status (required): <input type="text" name="status">
        <br/>
        <p>Share</p>
        <input type="radio" id="public" name="publicStatus" value="public">
        <label for="male">Public</label><br>
        <input type="radio" id="friends" name="publicStatus" value="friends">
        <label for="female">Friends</label><br>
        <input type="radio" id="onlyme" name="publicStatus" value="onlyme">
        <label for="other">Only Me</label>
        <br/>
        Date: <input type="date" name="status">
        <br/>
        <input type="checkbox" id="allowLike" name="permission[]" value="allowLike">
        <label for="allowLike"> Allow Like </label><br>
        <input type="checkbox" id="allowComment" name="permission[]" value="allowComment">
        <label for="allowComment"> Allow Comment </label><br>
        <input type="checkbox" id="allowShare" name="permission[]" value="allowShare">
        <label for="allowShare"> Allow Share </label>
        <br/>
        <input type="submit" name="submit">
    </form> 


    <?php
    if(isset($_POST['submit'])){
        // if(!empty($_POST['publicStatus'])) {
        //     echo '  ' . $_POST['publicStatus'];
        // } else {
        //     echo 'Please select the value.';
        // }
        if(!empty($_POST['permission'])) {
            $name = $_POST['permission'];
            foreach ($name as $permission) {
                echo "{$permission}";
            }
        } else {
            
            echo 'empty permssion';
        }
        }
    
    ?>
</body>

</html>