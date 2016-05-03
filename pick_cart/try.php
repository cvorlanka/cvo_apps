<?php
function dbConn()
                {
                        $dbHost = "cvoTest";
                        $dbName = "CVO";
                        $dbUser = "sa";
                        $dbPass = "sa12345";
                        $dbInfo = array();
                        global $dbLink;
                        $dbInfo['Database']     = $dbName;
                        $dbInfo['UID']          = "sa";
                        $dbInfo['PWD']          = "sa12345";

                        #$dbLink = odbc_connect("Driver={SQL Server};Server=$dbHost;Database=$dbName;", $dbUser, $dbPass) or die(odbc_error());
                        $dbLink = new PDO ("dblib:host=$dbHost;dbname=$dbName","$dbUser","$dbPass");
                        if(!$dbLink)
                        {
                                echo "Failure! Connection to SQL Server is not successful";
                                #die(print_r(odbc_error(), true));
                        }
                        else
                        {
                                return $dbLink;
                        }
                }

                function initBins($dbLink, $user)
                {
                        $data = array();
			$stmt = $dbLink->prepare("SELECT * FROM cvo_cart_scan_orders WHERE scan_user = '".$user."'");
  			$stmt->execute();
			#$count = $stmt->rowCount();
			$rowCount = (int) $stmt->fetchColumn(); 
			echo $rowCount."\n\n";
  			//if($stmt->rowCount() > 0)
			//{
			while ($row = $stmt->fetch()) {
  				array_push($data, $row['order_no']);
			}
			return $data;
			//}
		}
		$dbLink = dbConn();
		initBins($dbLink, 6);

		/*
		#$data = initBins($dbLink, 1);
		$cart = 1;
		$order = 2702129;
		$orderExt = 0;
		$operation = 0;

		#$stmt = $dbLink->prepare("exec cvo_pick_cart_process_sp @cart_no=?, @order_no=?, @order_ext=?, @proc_option=?");
		$stmt = $dbLink->prepare("exec cvo_pick_cart_process_sp ?, ?, ?, ?");
                        $stmt->bindParam(1, $cart);
                        $stmt->bindParam(2, $order);
                        $stmt->bindParam(3, $orderExt);
                        $stmt->bindParam(4, $operation);
		if ($stmt->execute()) {
		#if ($stmt->execute(array($cart, $order, $orderExt, 0))) {
			echo "Done";
		}
		*/

		/*
		$query = "call cvo_pick_cart_process_sp(?,?,?,?)";
                        $stmt1 = $dbLink->prepare($query);
			$res = $stmt1->execute(array($cart, $order, $orderExt, $operation));
			echo $res;
                        if($res)
                        {
                                echo $binLabel.":::"."Hello".$rows;
                                $this->binData['LABEL'] = $orderNo;
                                $this->binData['FLAG']  = "wait";

                                $binContent = $this->divBin($idx, $this->binData);
                                echo $binLabel.":::".$binContent;
                        }
		*/

?>
