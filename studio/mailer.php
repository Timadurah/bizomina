<?php
require 'robot.php';
@import('cord_sql');

?>



<div class="row p-2 my-3 w-100">
  <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none rounded bg-light"
    style="border-left: 5px solid gray;">
    <span class="fs-4 fw-bold text-dark" style="margin-left: 5px;"> Mail list </span>
  </div>


  <?php

  $Sci_con = $conn->prepare("SELECT * FROM mail_us order by id DESC LIMIT 100");
  $Sci_con->execute();
  $cnt = $Sci_con->rowCount();
  if ($cnt < 1) {

    echo '<center><h2 class="p-3 m-3 fw-bold text-danger"> 0 Mail Found </h2></center>';

  }
  foreach ($Sci_con as $Sci_col) {

    $Sci_id = $Sci_col['id'];
    $name = $Sci_col['name'];
    $email = $Sci_col['email'];
    $message = $Sci_col['message'];
    $subject = $Sci_col['subject'];

    ?>






    <div class="col-md-3 m-2 my-3 shadow-sm p-5">
        <p class="text-dark fw-bold">
          <?php echo $subject; ?>
        </p>
        <br>
        <small>          <?php echo $name; ?>
</small>
        <br>
        <small>          <?php echo $email; ?>
</small>
         <br>
        <small>          <?php echo $message; ?>
</small> 
        <br>
        
    </div>




    <?php
  }
  ?>


</div>