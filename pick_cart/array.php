<?php
	$data = array();
	$data['LEVEL_1'] = array(
		"1First",
		"1Second",
		"1Third",
		"1Fourth",
		"1Fifth",
		"1Sixth",
		"1Seventh",
		"1Eighth",
		"1Ninth",
		"1Tenth"
	);
	$data['LEVEL_2'] = array(
		"2First",
		"2Second",
		"2Third",
		"2Fourth",
		"2Fifth",
		"2Sixth",
		"2Seventh",
		"2Eighth",
		"2Ninth",
		"2ssssTenth"
	);
?>
<html>
<head>
	<title></title>
	<style>
	.hidden { display: none; }
	</style>
	<Script Language = "JavaScript">
		function showMyItems(divID)
		{
			
			var myDiv = document.getElementById(divID);
			//alert(myDiv.className);

			if (myDiv.className == 'hidden')
			{
				//alert("here....");
				myDiv.className = 'unhidden';
			}
			else 
			{
				//alert("else....");
				myDiv.className = 'hidden';
			}
		}
	</Script>
</head>

<body>
<table>
<?php
	foreach($data as $levelID => $levelData)
	{
		?>
		<tr>
			<?php
			for($i=0;$i<5;$i++)
			{
				echo "<td>[<a href=\"javascript:showMyItems('".$levelID."');\">+</a>] ".$levelData[$i]."</td>";
			}
			?>
		</tr>
		<tr>
			<td colspan='5'>
				<div id="<?php echo $levelID;?>" class="hidden">
					<?php
					for($j=5;$j<10;$j++)
					{
						echo ($j+1).": <input type='text' name='txt".$j."' value='' style='width:40;'> | ";
					}	
					?>
					<br>
					<input type='button' name='btnClick' value='Click'>
					<!-- <input type="text" name="txt1" value=""><input type="button" name="btnClick" value="Click"> -->
				</div>
			</td>
		</tr>
		<?php
	}
?>
</table>
</body>
</html>