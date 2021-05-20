<?php 
    $con = new mysqli('localhost','root','12345','mybank');
    define('bankName', 'Jandhan Bank',true);
    $ar = $con->query("select * from userAccounts,branch where id = '$_SESSION[userId]' AND userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>