
    <div class="span-17 colborder" id="content">  
	
          <h3 class="loud">Rank Char</h3>  
           <center>
        <table border="1" width="450">
    <tr>
    <td>Name</td>
	<td>Level</td>
	<td>Job</td>
	<td>Money</td>
	<td>Sex</td>
    </tr>
    <?php foreach($data->result_array() as $row): 
	if($row['job']==0)
	{
		$job = "Beginner";
	}
	else if($row['job']==1)
	{
		$job = "Warrior";
	}
	else if($row['job']==2)
	{
		$job = "Knight";
	}
	else if($row['job']==3)
	{
		$job = "Clown";
	}
	else if($row['job']==4)
	{
		$job = "Magician";
	}
	else if($row['job']==5)
	{
		$job = "Cleric";
	}
	else if($row['job']==6)
	{
		$job = "Craftsman";
	}
	else if($row['job']==7)
	{
		$job = "GM";
		
	}else if($row['job']==8)
	{
		$job = "VagaBond";
	}
	else if($row['job']==9)
	{
		$job = "????";
	}
	else if($row['job']==10)
	{
		$job = "Berserker";
	}
	else if($row['job']==11)
	{
		$job = "Warrior";
	}
	else if($row['job']==12)
	{
		$job = "RaneGade";
	}
	else if($row['job']==13)
	{
		$job = "Assassin";
	}
	else if($row['job']==14)
	{
		$job = "Ice Wizard";
	}
	else if($row['job']==15)
	{
		$job = "Demolitionst";
	}
	else if($row['job']==16)
	{
		$job = "Swordmaster";
	}
	else if($row['job']==17)
	{
		$job = "Defender";
	}
	else if($row['job']==18)
	{
		$job = "Gamber";
	}else if($row['job']==19)
	{
		$job = "Fire Wizard";
	}
	else if($row['job']==20)
	{
		$job = "Warrior";
	}
	else if($row['job']==21)
	{
		$job = "Knight";
	}
	else if($row['job']==22)
	{
		$job = "Warrior";
	}
	else if($row['job']==23)
	{
		$job = "Warrior";
	}else if($row['job']==24)
	{
		$job = "Beginner";
	}
	else if($row['job']==25)
	{
		$job = "Apostle";
	}
	else if($row['job']==26)
	{
		$job = "Artisan";
	}
	else
	{
		$job =$row['job'];
	}
	
	if($row['sex']==1)
	{
		$sex="Male";
	}
	else
	{
		$sex ="Female";
	}
	?>
    <tr>
    <td><?php echo $row['char_name']; ?></td>
	<td><?php echo $row['level']; ?></td>
	<td><?php echo $job ?></td>
	<td><?php echo $row['money']; ?></td>
	<td><?php echo $sex  ?></td>
    </tr>
    <?php endforeach; ?>
     
    
    </table>
     <?php echo "<div class='pagination' >".$this->pagination->create_links()."</div>"; ?>
    </center><br/><br/>

				
        </div>  
      
