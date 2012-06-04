
    <div class="span-17 colborder" id="content">  
	
          <h3 class="loud">News</h3>  

            <img class="right"  alt="" />  
            <?php foreach($data->result_array() as $row): ?>
		    Title : <?php echo $row['NewsTitle']; ?><br/>
			Time :  <?php echo $row['NewsTime']; ?><br/>
			Post By :  <?php echo $row['NewsUser']; ?><br/>
			Content :<?php echo $row['NewsContent']; ?><hr/>
		    <?php endforeach; ?>

          <div class="span-8 colborder">  
            <h4 class="prepend-5">Changelog</h4>  
            <p> 6/3/2012 = Rank Char Done :)<br/>
				6/2/2012 = Proses Register<br/>
				6/1/2012 = Add validation in Register<br/>
				6/1/2012 = Create new project :)
            </p>  
          </div>  
      
          <div class="span-8 last">  
            <h4 class="prepend-5">Coming Soon</h4>  
            <p>  
             Register
            </p>  
          </div>  
        </div>  
      
   