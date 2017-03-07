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
				color: 				<?php echo $corTexto; ?>
				background-color: 	<?php echo $corFundo; ?>
			}
		</style>
	</head>
</html>