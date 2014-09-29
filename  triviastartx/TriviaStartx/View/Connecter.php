<html>
	<center>
		<label>login</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		<label>password</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		
		<form method="post" action="View/newpartie.php">
		 	<input type="submit" value="Connection" />
		</form>
	</center>
</html>
