<?php 
    $con = new mysqli('localhost','root','','mybank');
    
    $ar = $con->query("select * from userAccounts,branch where id = userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>