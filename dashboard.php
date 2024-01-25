<?php 

include 'session.php';

?>


<h1>welcome <?php echo $_SESSION['n'];  ?></h1>
<h1>welcome<?php echo $_SESSION['e'];  ?></h1>
<a href="logout.php">LOGOUT</a>