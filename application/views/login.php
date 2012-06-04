
    <div class="span-17 colborder" id="content">  
	
          
           <?php $attributes = array('id' => 'form');
				echo form_open('home/register', $attributes); ?>
			<?php echo form_open('register');?>

<table>

<tr>
  <td>Username</td>
  <td><input type="text" name="username" value="<?php echo set_value('username'); ?>" id="txtinput" /></td>
  <td><font size="1"><font color="#FF0000"><?php echo form_error('username'); ?> </font>
  </td>
</tr>
  <td>Password</td>
  <td><input type="password" name="password" value="<?php echo set_value('password'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('password'); ?> </font>
  </td>
</tr>
</table>

<center>        <?php echo form_submit('submit', 'Login'). form_reset('reset', 'Clear'); ?>
        <?php echo form_close(); ?>
				</center>   
        </div>  
      
