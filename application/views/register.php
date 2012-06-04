
    <div class="span-17 colborder" id="content">  
	
          <h3 class="loud">Register</h3>  
        
           <?php $attributes = array('id' => 'form');
				echo form_open('home/register', $attributes); ?>
			<?php echo form_open('register');?>

<table>

<tr>
  <td>Username</td>
  <td><input type="text" name="username" value="<?php echo set_value('username'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('username'); ?> </font>
  </td>
</tr>
<tr>
  <td>Email</td>
  <td><input type="text" name="email" value="<?php echo set_value('email'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('email'); ?> </font>
  </td>
</tr>
<tr>
  <td>Password</td>
  <td><input type="password" name="password" value="<?php echo set_value('password'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('password'); ?> </font>
  </td>
</tr>
<tr>
  <td>Re-type Password</td>
  <td><input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('passconf'); ?> </font>
  </td>
</tr>
<tr>
  <td>Gender</td>
  <td>Male <?php echo form_radio('gender', '1'); ?> Female <?php echo form_radio('gender', '2'); ?>
</td>
  <td><font color="#FF0000"><?php echo form_error('gender'); ?> </font>
  </td>
</tr>
<tr>
  <td>Age</td>
  <td><input type="text" name="age" value="<?php echo set_value('age'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('age'); ?> </font>
  </td>
</tr>
<tr>
  <td>Birthday</td>
  <td><input type="text" name="birthday" value="<?php echo set_value('birthday'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('birthday'); ?> </font>
  </td>
</tr>
<tr>
  <td>Code PIN</td>
  <td><input type="text" name="pin" value="<?php echo set_value('pin'); ?>" id="txtinput" /></td>
  <td><font color="#FF0000"><?php echo form_error('pin'); ?> </font>
  </td>
</tr>

</table>

<center><?php echo form_checkbox('newsletter', 'accept');?> Saya telah membaca dan menyetujui perjanjian pengguna<center><br/>
        <?php echo form_submit('submit', 'Register'). form_reset('reset', 'Clear'); ?>
        <?php echo form_close(); ?>
				
        </div>  
      
