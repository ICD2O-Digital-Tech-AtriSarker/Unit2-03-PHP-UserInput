<!-- USE DEV URL to run -->
<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Street Address Finder (PHP)">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Title -->
  <title>Street Address Finder, PHP Version</title>
</head>

<body>

  <!-- Header -->
  <h1>Street Address Finder, PHP Version</h1>

  <!-- Input Form | Fields : Street Number, Street Name-->

  <form method="post">
    <label for="streetNumber">Street Number:</label>
    <input type="number" name="streetNumber" placeholder="Street Number">
    <br>
    <label for="streetName">Street Name:</label>
    <input type="text" name="streetName" placeholder="Street Name">
    <br>
    <!-- Find Street Button -->
    <input type = "submit" name = "submit" value="Find Street!">
  </form>

  <!-- Results -->
  <h3>Street Address is shown here:</h3>
  <h2 id="resultDisplay">
    <?php   
    if(isset($_POST['submit']))  
      {   
        $streetNumber = $_POST['streetNumber'];   
        $streetName = $_POST['streetName'];   
        $streetAddress = "$streetNumber $streetName";
        echo $streetAddress;
      }   
    ?>
  </h2>
</body>

</html>
