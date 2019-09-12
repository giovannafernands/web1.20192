<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabela php</title>
		<style>
			table,tr,th,td{
        border: 2px solid #000000;
        text-align: left;
        padding: 8px;
        border-collapse: collapse;
        margin: auto;
    	}
		 tr:nth-child(even) {
    	  background-color: #dddddd;
        background-image: linear-gradient(#77bafc,#f1affa);
}		
		</style>
</head>
<body>
	
	<?php 
		$estudante = [
			['Giovanna', '10','9.5'],
			['Joan', '5.5', '1.5'],
			['Abine', '7', '8.5'],
			['Alisso', '10', '8.1']
		];
	 ?>

 	<table>

 		<tr>
			<th>Estudante</th>
			<th>Nota1</th>
			<th>Nota2</th>
 		</tr>


      <?php for ($i = 0; $i < sizeof($estudante); $i++): ?>
          <tr>
              <?php for ($j = 0; $j < sizeof($estudante[$i]); $j++): ?>
                  <td><?= $estudante[$i][$j] ?></td>
              <?php endfor ?>
          </tr>
      <?php endfor ?>

  </table>
</body>
</html>
