<html>
	<center>
		<label>login</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		<label>password</label>
			<input type="text" name="pseudo" value="<?php if (isset($comment)) echo htmlspecialchars($comment['auteur']); ?>" /><br />
		 <input type="submit" value="Connection" />
	</center>
</html>