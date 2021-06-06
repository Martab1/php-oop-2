<?php
 require_once __DIR__ . '/classes/User.php';
 require_once __DIR__ . '/classes/Product.php';
?>


<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . '/templates/head.php'; ?>
<body>
    
    <!-- HEADER -->
    <?php require_once __DIR__ . '/templates/header.php'; ?>

    <main>
       <!-- DRESS -->    
       <?php require_once __DIR__ . '/templates/dress.php'; ?>
      
      <!-- SHOES -->
      <?php require_once __DIR__ . '/templates/shoes.php'; ?>
      
    </main>

</body>
</html>