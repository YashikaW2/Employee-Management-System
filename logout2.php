<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 2/22/2019
 * Time: 9:31 PM
 */
?>
<?php
session_start();
if(isset($_SESSION['username'])){
    session_unset();
    session_destroy();
}
echo"<script>location.href='employeelogin.php'</script>";
?>
