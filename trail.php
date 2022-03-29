<!-- wrong code -->
 <!--<!DOCTYPE html>    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1>pageBannerOne</h1>

/*  </?php
function pageBannerOne($args = NULL) {

  
    if (!$args['title']) {
      $args['title'] =  'Am h1 title';
    }
    
      if (!$args['subtitle']) {
        $args['subtitle'] = 'Am h2 subtitle';
      }
        ?>

<h1></?php echo $args['title'] ?></h1>
<h2></?php echo $args['subtitle'] ?></h2>


 <//?php
    }

   /* pageBannerOne(array(

    # here title and subtitle is not given but above- 
    # - IF statement output the title and subtitle but showing warning.

    ));
?>
<h3>************************************************</h3>
<h1> pageBannerTwo</h1>

</?php
function pageBannerTwo($argsTwo = NULL) {

  
    if (!$argsTwo['title']) {
      $argsTwo['title'] =  'Am h1 title of argsTwo';
    }
    
      if (!$argsTwo['subtitle']) {
        $argsTwo['subtitle'] = 'Am h2 subtitle of argsTwo';
      }
        ?>

<h1></?php echo $argsTwo['title'] ?></h1>
<h2></?php echo $argsTwo['subtitle'] ?></h2>


        </?php
    }

    pageBannerTwo(array(

       'title' => 'Am title of  pageBannerTwo'  # if title given here No warning,
                                                #  but if title not given. the 
                                                # [--if (!$argsTwo['title']) {
                                                #      $argsTwo['title'] =  'Am h1 title of argsTwo';} --]
                                                # this IF statement works but  showing warning.
       

    

    ));
    
?>
 
</body>
</html> */
-->
<!---------------------------------------------------------------------------------------------------------
**************************************************************************************
______________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  if(1<0){
    ?>
    <h1>pageBannerOne</h1>
<?php
  }
  else{
    ?>
        <h1>pageBannertwo</h1>

    <?php
  }
  ?>

<?php
function pageBannerOne($args = NULL) {

  
    if (!isset($args['title'])) {
      $args['title'] =  'Am h1 title';
    }
    
      if (!isset($args['subtitle'])) {
        $args['subtitle'] = 'Am h2 subtitle';
      }
        ?>

<h1><?php echo $args['title'] ?></h1>
<h2><?php echo $args['subtitle'] ?></h2>


        <?php
    }

    pageBannerOne(array(

    # here title and subtitle is not given but above- 
    # - IF statement output the title and subtitle but showing warning.

    ));
?>
<h3>****************</h3>
<h1> pageBannerTwo</h1>

<?php
function pageBannerTwo($argsTwo = NULL) {

  
    if (!isset($argsTwo['title'])) {
      $argsTwo['title'] =  'Am h1 title of argsTwo';
    }
    
      if (!isset($argsTwo['subtitle'])) {
        $argsTwo['subtitle'] = 'Am h2 subtitle of argsTwo';
      }
        ?>

<h1><?php echo $argsTwo['title'] ?></h1>
<h2><?php echo $argsTwo['subtitle'] ?></h2>


        <?php
    }

    pageBannerTwo(array(

       'title' => 'Am title of  pageBannerTwo'  # if title given here No warning,
                                                #  but if title not given. the 
                                                # [--if (!$argsTwo['title']) {
                                                #      $argsTwo['title'] =  'Am h1 title of argsTwo';} --]
                                                # this IF statement works but  showing warning.
       

    

    ));
?>
 
</body>
</html>








