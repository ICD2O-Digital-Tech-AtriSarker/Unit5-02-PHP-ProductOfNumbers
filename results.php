

<!-- <form id="inputForm" method="post" action="results.php" target="resultFrame"> -->

<b id="outputResult">
  <?php
    // Code
    if(isset($_POST['submit'])) 
    {
      // INPUT
      $input = floatval($_POST['{value}']);
    }
    else {
      // Default
      echo "Results will be shown here...";
    }
  ?>
</b> 
