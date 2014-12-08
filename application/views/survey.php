<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div id="container">
<?php
		if(isset($this->session->userdata['error']))
		{ 	?>
				<p><?= $this->session->userdata['error'] ?></p>
<?php
		}

		$this->session->unset_userdata('error');
?>
	    <table>
	    	<form action='/surveys/process' method='post'>
	        <tr>
		        <td>Your Name:</td>
		        <td><input type='text' name='name'></td>
	        </tr>
	        <tr>
		        <td>Dojo Location:</td>
		        <td>
		        	<select name="location" width="20">
						<option value="Mountain Valley, Ca">Mountain Valley, Ca</option>
						<option value="San Diego, Ca">San Diego, Ca</option>
						<option value="Seattle, Phoenix">Seattle, Pheonix</option>
						<option value="La Union, Philippines">La Union, Philippines</option>
					</select>
				</td>
			<tr>
			<td>Favorite language:</td>
				<td> 
					<select name="language" width="20">
						<option value="Javascript">Javascript</option>
						<option  value="PHP">PHP</option>
						<option value="HTML">HTML</option>
						<option value="CSS">CSS</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Comment:</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea rows="4" cols="40" name="comment"></textarea>
				</td>
		    </tr>
	        <tr>
	        	<td></td>
	        	<td align="right">
	        	<input type='submit' value='Submit'>
	        	</td>
	        </tr>
	        </form>
	    </table>
	</div>
</body>
</html>