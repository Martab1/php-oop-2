<h3 id="scarpe"> <?php echo $shoe1->category; ?> </h3>
       <section class="content container">
           <!-- shoes img -->
          <div class="card">
              <img src="https://static.zara.net/photos///2021/I/1/1/p/1646/810/002/2/w/1126/1646810002_6_5_1.jpg?ts=1622126200833" alt="img1"> 
          </div>

          <div class="card">
              <img src="https://static.zara.net/photos///2021/I/1/1/p/3654/810/002/2/w/1126/3654810002_6_2_1.jpg?ts=1622621646975" alt="img2">
           
          </div>
          
          <div class="card">
              <img src="https://static.zara.net/photos///2021/V/1/1/p/3643/710/091/2/w/1126/3643710091_6_1_1.jpg?ts=1616757023714" alt="img3">  
          </div>

          <div class="card">
               <img src="https://static.zara.net/photos///2021/I/1/1/p/1318/810/102/2/w/1126/1318810102_6_2_1.jpg?ts=1622450494225" alt="img4">
          </div>
       </section>

      <section  class="container">
           <!-- info shoes --> 
           <div class="flex">
               <?php foreach($shoes as $key => $shoe){ ?>
                <div class="box">
                        <h5><?php echo $shoe->name; ?></h5>
                        <p> <?php echo $shoe->getDescription();?></p>
                        <p> <?php echo $shoe->getPrice(); ?></p>
                        <p> Colore: <?php echo $shoe->getColor(); ?></p>
                        <p>  <?php echo $shoe->getSize(); ?></p>   
                        <p> Codice: <?php echo $shoe->getCode(); ?></p>
                </div>    
             <?php  } ?>
           </div>
      </section>
      