<div class="centre">
	1ère Question
<br>

<?php 

foreach ($data as $k=>$v){
	if ($k=="Question"){
		echo $v."<br>";
	}
	else{
		foreach ($v as $reponse){
				echo "<br><input type='submit' class='reponse' id='".$reponse->getEstBonne()."' name='choix' value=".$reponse->getLibelle()." ><br>"; 
			
			
		}
	}
	
}
?>

<div id="message"></div>

</div>
