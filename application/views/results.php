<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Survey Successful</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div id="success_msg">				
		<p>Thanks for submitting this form! You have submitted this form <?= $this->session->userdata['views'] ?> time(s) now.</p>
	</div>
	<div id="container2">
	<table>
		<tr>
			<td colspan='2'><strong><u>Submitted Information</u></strong></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><?= $this->session->userdata['name'] ?></td>
		</tr>
		<tr>
			<td>Dojo Location:</td>
			<td><?= $this->session->userdata['location'] ?></td>
		</tr>
		<tr>
			<td>Favorite Language:</td>
			<td><?= $this->session->userdata['language'] ?></td>
		</tr>
		<tr>
			<td>Comment:</td>
			<td class="comment"><?= $this->session->userdata['comment'] ?></td>
		</tr>
		<tr>
		    <td colspan="2" align="right">
		    	<form action="/surveys" >
			   		<input type='submit' value='Go Back'>
		   		</form>
		    </td>
		</tr>
	</table>
	</div>
</body>
</html>