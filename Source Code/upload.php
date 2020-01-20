<html>
<body>
<form
	 action="bew/uploadf.php" method="post"
	 enctype="multipart/form-data" method="POST">
		<p><strong>Upload</strong></p>
		<p><label><strong>Title :</strong><input type="text" name="vname" /></label></p>
		<input type="file" name="videofile" />
		<p><strong>Category</strong><select name="category">
		 <option>Choose
		 <option>Tutorials
		 <option>Music
		 <option>ShortMovies
		 <option>Sports
		 </select><p>
		<input type="submit" value="Upload"/>
 </form> 
</body>
</html>