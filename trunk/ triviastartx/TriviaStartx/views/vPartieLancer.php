<?php 

foreach ($data as $k=>$v){
	if ($k=="Question"){
		echo $v."<br>";
	}
	else{
		foreach ($v as $reponse){
				echo "<input type='submit' class='reponse' id='".$reponse->getEstBonne()."' name='choix' value=".$reponse->getLibelle()." ><br>"; 
			
			
		}
	}
	
}
?>
<div id="message"></div>


