<?php
	extract($_REQUEST);
	include "CVOPickCart.php";
	
	
	$pc = new CVOPickCart();
	$dbLink = $pc->dbConn();
	//echo "called";
	
	if(isset($opt) && ($opt!=""))
	{
		if($opt == "init")
		{
			$pc->initBins($dbLink, $cartNo);			
		}
		else if($opt == "lord")
		{
			$pc->loadOrder($dbLink, $cartNo, $passOrder);
		}
		else if($opt == "sord")
		{
			$pc->skipOrder($dbLink, $passOrder, $binNo, $box);
		}
		else if($opt == "rord")
		{
			$pc->removeOrder($dbLink, $cartNo, $passOrder, $binNo);
		}
		else if($opt == "dbin")
		{
			$pc->disableBin($binNo);
		}
		else if($opt == "drmv")
		{
			$pc->disableRemove($binNo);
		}
		else if($opt == "picks")
		{
			//Check and load records to SQLite database from 
			#if(isset($opr) && ($opr == 'load'))	
			#	$pc->loadPicksDB($dbLink, $cartNo);
			$pc->showPicks($dbLink, $cartNo);
		}
		else if($opt == "scan_bin")
		{
			/*
			//echo "This...";
			if($binToScan != $binScanned)
				echo "MISMATCH";
			else
			*/
			$pc->showBinAllocation($dbLink, $cartNo, $binNo);
		}
		else if($opt == "reload")
		{
			$pc->reloadBin($box, $binNo, $order, $content, $flag);
		}
		else if($opt == "scan_upc")
		{	
			$pc->scanUPC($dbLink, $upc, $order, $binNo, $box);
		}
		else if($opt == "sbin")
		{	
			$pc->skipBin($dbLink, $cartNo, $binNo, $box);
		}
		else if($opt == "comp")
		{	
			$pc->completeCycle($dbLink, $cartNo);
		}
	}
?>
