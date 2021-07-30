<?php

function afficherTableau($rows, $headers) {
		?>

		<table border="1">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>
s
			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=formulaireEtudiants.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "nom";
	$headers[] = "prenom";
	$headers[] = "age";
	$headers[] = "adresse_email";
	return $headers;
}


?>
