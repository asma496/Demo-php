
<?php 
$title = "Demo class";
$heading = "my first php class";


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel='stylesheet' href='css/<?php echo $user['style'];  ?>.css' />

</head>

<body>
    <h1><?php echo $heading; ?></h1>
<!-- <form method='POST' action='form.php' class='form'>
 <h2>Name:<input type='text' name='name' placeholder='Name' /></h2> <br /> 
 <h2>E-mail:<input type='email'name='email'  placeholder='email' /></h2><br /> 
 <h2>Password:<input type='password'  placeholder='password' /></h2> <br /> 
<h1><button type='submit' value='send'>Send</button><h1>

</form> -->

<?php
$arr=array("asma","madiha","iqra");


// for($i = 0; $i < count($arr); $i++) {
//     echo  $arr[$i] ;
//    }

   
// foreach($arr as $value) {
//     echo  "$value <li>";
//   }
// $length = count($arr);
// for ($i = 0; $i < $length; $i++) {
//   print $arr[$i];
// }
?>
<ul>
    <?php foreach($arr as $value){?>

    <li><?php  echo $value ?></li>
<?php } ?>
</ul>
</body>
</html>