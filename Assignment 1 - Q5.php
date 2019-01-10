<!DOCTYPE html>
	<html>
		<head>
			<title>Chessboard</title>
		</head>
		
		<table  cellspacing="0px" cellpadding="0px" border="1px">
	
		<?php
		// declare variables
		$total;
		
		// outer loop to generate rows
		for ($row = 1; $row < 9; $row++)
		{
			echo "<tr>";
			// inner nested loop to generate columns
			for ($col = 1; $col < 9; $col++)
			{
				$total = $row + $col;
				// alternate squares
				if ($total % 2 == 0)
				{
					echo "<td><img src=\"whiteSquare.gif\" height='30' width='30' align='top'/></td>";
				}
				else
				{
					echo "<td><img src=\"blackSquare.gif\" height='30' width='30' align='top'/></td>";
				}
			}
			
		}
		?>
		</table>
	</html>
</html>
	
	

	
