
<!-- CSS -->
<link rel="stylesheet" href="./css/style.css">

<b id="outputResult">
  <?php
  
  if (isset($_POST['userNum'])) {

    // Get inputs
    $userNum = floatval($_POST['userNum']);
    $userInt = intval($_POST['userInt']);
  
  
    // Initalize Product Sum
    $productSum = 0;
  
    // Use for loop to calculate product
    for ($counter = 0; $counter < abs($userInt); $counter++) {
  
      // Check if userInt is positive / non-negative
      if ($userInt >= 0) {
        // Increment Product Sum
        $productSum += $userNum;
      }
      // else [ userInt is negative ]
      else {
        // Decrement Product Sum
        $productSum -= $userNum;
      }
  
    }

    // Display Result
    echo "$userNum x $userInt = " . round($productSum,2);

  }
  
  ?>
</b> 
