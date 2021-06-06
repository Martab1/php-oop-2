<header>
         <h1 id="vestiti">AZOS</h1>
         <section>
            <!-- user -->
            <h2> Welcome <?php // user
                echo  $user1->getName() . ' ' .  $user1->getLastname();
                ?>
            </h2>
   
            <!-- sale -->
            <div> Il tuo sconto per i prodotti selezionati è del <strong>  <?php echo $user1->getSale();  ?> % </strong>  </div>

             <!--categories-->
             <div class="categories">
                <a href="#vestiti">vestiti</a>
                <a href="#scarpe">scarpe</a>
            </div>
        </section>
       
    </header>