<h3> <?php echo $dress1->category; ?> </h3>
       <section class="content container">
           <!-- dress img -->
          <div class="card">
              <img src="https://static.zara.net/photos///2021/I/0/1/p/4437/247/446/2/w/1126/4437247446_6_1_1.jpg?ts=1622456358775" alt="img1"> 
          </div>

          <div class="card">
              <img src="https://static.zara.net/photos///2021/V/0/1/p/1067/445/541/2/w/1126/1067445541_6_1_1.jpg?ts=1621957149904" alt="img2">
           
          </div>
          
          <div class="card">
              <img src="https://static.zara.net/photos///2021/I/0/1/p/3439/839/620/2/w/1126/3439839620_6_1_1.jpg?ts=1622469454698" alt="img3">  
          </div>

          <div class="card">
               <img src="https://static.zara.net/photos///2021/I/0/1/p/8342/110/520/2/w/1024/8342110520_6_1_1.jpg?ts=1622473053013" alt="img4">
          </div>
       </section>

      <section  class=" container">
           <!-- info dress --> 
           <div class="flex">
               <?php foreach($dresses as $key => $dress){ ?>
                <div class="box">
                        <h5><?php echo $dress->name; ?></h5>
                        <p> <?php echo $dress->getDescription();?></p>
                        <p> <?php echo $dress->getPrice(); ?></p>
                        <p> Colore: <?php echo $dress->getColor(); ?></p>
                        <p>  <?php echo $dress->getSize(); ?></p>   
                        <p> Codice: <?php echo $dress->getCode(); ?></p>
                </div>    
             <?php  } ?>
           </div>
      </section>