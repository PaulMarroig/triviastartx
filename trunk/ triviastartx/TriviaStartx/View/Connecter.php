<html>
	<center>
		<form method="post" action="../View/newpartie.php">
		<label>login</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		<label>password</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		
		
		 	<input type="submit" value="Connection" />
		</form>
	</center>
</html>
