<!-- includes/functions.php -->
<?php
function validate_password($password) {
    $pattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/";
    return preg_match($pattern, $password);
}
?>
