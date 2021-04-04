<?php
# create placeholder for some variable
$status_code_error = $date_error = $status_error = $share_error = $permission_error= "";
$status_code = $status = $date = $share = $permission = "";

# input validation
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    if (empty($_POST["status_code"])) {
        $status_code_error = "Status code is required";
    } else {
        $status_code = sanitize_input($_POST["status_code"]);
    }

    if (empty($_POST["status"])) {
        $status_error = "Status is required";
    } else {
        $status = sanitize_input($_POST["status"]);
    }

    if (empty($_POST["publicStatus"])) {
        $share_error = "Post visibility is required";
    } else {
        $share = sanitize_input($_POST["publicStatus"]);
    }
    
    if (!empty($_POST["datetime"])) {
        $time = strtotime($_POST['datetime']);
        if ($time) {
            $date = date('d-m-Y', $time);
        } else {
            echo 'Invalid Date: ' . $_POST['datetime'];
        }
    } else {
        $date_error = "Date is required";
    }

    if(!empty($_POST['permission'])) {
        $name = $_POST['permission'];
        foreach ($name as $permission) {
           $permission_arr[$permission] = true;
        }
        $permission = join(" ",$permission_arr);
    }

    if (empty($permission)) {
        $permission = "No permission";
    }
}
if (isset($_POST['reset'])) {
    $_POST = array();
}

# form generate
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Status code: <input type="text" name="status_code">
    <span class="error">* <?php echo $status_code_error; ?></span>
    <br><br>
    Status: <input type="text" name="status">
    <span class="error">* <?php echo $status_error; ?></span>
    <br><br>
    Share:
    <select name="publicStatus" required>
        <option value="friends">friends</option>
        <option value="public">public</option>
        <option value="onlyme">only me</option>
    </select>
    <span class="error"> <?php echo $share_error; ?></span>
    <br><br>
    Date: <input type="date" name="datetime" value="<?php echo date('Y-m-d'); ?>"/>
    <span class="error">* <?php echo $date_error; ?></span>
    <br><br>
    Permission type:
    <br><br>
    <input type="checkbox" id="allowLike" name="permission[]" value="allowLike">
    <label for="allowLike"> Allow Like </label><br>
    <input type="checkbox" id="allowComment" name="permission[]" value="allowComment">
    <label for="allowComment"> Allow Comment </label><br>
    <input type="checkbox" id="allowShare" name="permission[]" value="allowShare">
    <label for="allowShare"> Allow Share </label>
    <br><br>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="reset" value="Reset">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $status_code;
echo "<br>";
echo $status;
echo "<br>";
echo $date;
echo "<br>";
echo $share;
echo "<br>";
echo $permission;
?>