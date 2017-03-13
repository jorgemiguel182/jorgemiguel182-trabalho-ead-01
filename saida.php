<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<?php
			$nomeDaBanda 					= $_POST['nomeDaBanda'];
			$linkParaImagem					= $_POST['linkParaImagem'];
			$integrante1Nome				= $_POST['integrante1Nome'];
			$integrante1DataDeNascimento	= $_POST['integrante1DataDeNascimento'];
			$integrante1Instrumento			= $_POST['integrante1Instrumento'];
			$integrante2Nome				= $_POST['integrante2Nome'];
			$integrante2DataDeNascimento	= $_POST['integrante2DataDeNascimento'];
			$integrante2Instrumento			= $_POST['integrante2Instrumento'];
			$integrante3Nome				= $_POST['integrante3Nome'];
			$integrante3DataDeNascimento	= $_POST['integrante3DataDeNascimento'];
			$integrante3Instrumento			= $_POST['integrante3Instrumento'];
			$biografiaDaBanda				= $_POST['biografiaDaBanda'];
			$corFundo						= $_POST['corFundo'];
			$corTexto						= $_POST['corTexto'];
			?>
		
		<title>
			<?php echo $nomeDaBanda;?> - Biografia
		</title>
		
		<style>
			body{
				color: 				<?php echo $corTexto; ?>;
				background-color: 	<?php echo $corFundo; ?>;
			}
			
			table, td {
				margin: 0 auto;			
				border: solid 2px;
			}
			
			.container {
				width: 800px;
				margin: 0 auto;
			}
			
			.titulo {
				text-align: center;
			}
			
			.imagem {
				width: 100%;
			}
		</style>
	</head>
	
	<body>
		<div class='container'>
			<h1 class='titulo'><?php echo $nomeDaBanda;?></h1>
				
		
			<figure>
				<img src='<?php echo $linkParaImagem;?>'
					 alt='<?php echo $nomeDaBanda;?>'
					 class='imagem'>
				<figcaption><?php echo $nomeDaBanda;?>'</figcaption>
			</figure>
			
			<hr>
			
			<h1>Biografia da Banda</h1>
			<p><?php echo $biografiaDaBanda;?></p>
			
			<hr>
			
			<h1>Integrantes</h1>
			<table>
				<thead>
					<th>Nome</th>
					<th>Data de Nascimento</th>
					<th>Instrumento</th>
				</thead>
				<tbody>
					<tr>
						<td> <?php echo $integrante1Nome;?></td>
						<td> <?php echo $integrante1DataDeNascimento;?></td>
						<td> <?php echo $integrante1Instrumento;?></td>
					</tr>
					<tr>
						<td> <?php echo $integrante2Nome;?></td>
						<td> <?php echo $integrante2DataDeNascimento;?></td>
						<td> <?php echo $integrante2Instrumento;?></td>
					</tr>
					<tr>
						<td> <?php echo $integrante3Nome;?></td>
						<td> <?php echo $integrante3DataDeNascimento;?></td>
						<td> <?php echo $integrante3Instrumento;?></td>
					</tr>
				</tbody>
			</table>		
		</div>	
	</body>	
</html>