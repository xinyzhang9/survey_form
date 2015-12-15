
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type ="text/css">
	body{
		text-align: center;
	}
	input{
		display: inline-block;
	}
	.error{
		color: red;

	}
	.row{
		border: 1px solid silver;
	}
	textarea{
		display: block;
		margin: 0 auto;

	}
	.form-group{
		padding: 10px;
	}
	</style>
</head>
<body>
	<div class = 'container'>
		<div class = 'form-group'>
			<form action="survey" method = "post">
			Your name: <input type="text" name = 'name'>
			<br>
			Dojo Location:
			<select name="location">
				<option value="Mountain View">Mountain View</option>
				<option value="Seatle">Seatle</option>
				<option value="Boston">Boston</option>
			</select>
			<br>
			Favorite Language:
			<select name="language">
				<option value="Javascript">Javascript</option>
				<option value="C++">C++</option>
				<option value="php">php</option>
				<option value="Python">Python</option>
				<option value="others">others</option>
			</select>
			<br>
			Comment (optional):
			<textarea name="comment" cols="30" rows="10"></textarea>
			<input type="submit" value = "Submit">
		</form>
		</div>
	</div>

</body>
</html>