<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo form_open_multipart('basic_php/do_upload');?>

<input type="file" name="photo" size="25" />
	<input type="submit" name="submit" value="Submit" />

</form>

</body>
</html>