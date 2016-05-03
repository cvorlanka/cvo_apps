<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Static Top Navbar Example for Bootstrap</title>

    <!-- CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<Script Language = "JavaScript">
		var currOrder;
		var currBin;
		var currBox;
		var currUPC;
		var currPickNo = 0;
		var totalPicks = 0;
		function showPicks(flag)
		{
			//alert("Triggered Show Picks");
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var ajaxData = xmlhttp.responseText;
						var opElements = ajaxData.split(":::");
						
						if(opElements[0]!="NONE")
						{
							currBin = opElements[0];
							showBinAllocation(currBin);
							document.getElementById("next_bin_alert").innerHTML = opElements[1];
						}
						else
						{
							currBin = "";
							document.getElementById("next_bin_alert").innerHTML = opElements[1];					
						}
						document.getElementById("scan_item").focus();
					}
					else
					{
						//alert("Else");
							//document.getElementById("alert_window").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=picks&opr="+flag+"&cartNo=3",false);
			xmlhttp.send();
		}

		function completeCycle()
		{
			//alert("Triggered Show Picks");
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("next_bin_alert").innerHTML = "";
						initializeBins();
					}
					else
					{
						//alert("Else");
							//document.getElementById("alert_window").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=comp&cartNo=3",false);
			xmlhttp.send();
		}

		function initializeBins()
		{
			//alert('Pick List Triggered');
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("all_bins").innerHTML = xmlhttp.responseText;						
						document.getElementById("scan_item").focus();
					}
					else
					{
						//alert("Else");
							//document.getElementById("alert_window").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=init&cartNo=3",false);
			xmlhttp.send();
		}

		function skipOrder(orderNo, binNo)
		{
			//alert("Triggered Skip Order");
			//alert('In Skip Order - Total Picks: '+totalPicks);
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				//alert("something");
				//alert(xmlhttp.responseText);
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						
						if(xmlhttp.responseText=="ORDER_SKIPPED")
						{
							totalPicks = totalPicks - 1;
							currPickNo = 0;
							if(totalPicks > 0)
							{
								showBinAllocation(currBin);
								reloadBox(currBox, currBin, currOrder, '', 'wait');
							}
							else
							{
								showPicks('');
								document.getElementById('scan_item').value = "";
								document.getElementById("scan_item").focus();
							}							
								
						}
					}
					else
					{
						//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=sord&cartNo=3&passOrder="+orderNo+"&binNo="+binNo+"&box="+currBox,false);
			xmlhttp.send();
		}

		function skipBin(binNo)
		{
			//alert('Skip Bin Triggered');
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				//alert("something");
				//alert(xmlhttp.responseText);
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						
						if(xmlhttp.responseText=="SKIPPED")
						{
							//alert('Skip confirmed, invoking showPicks');
							reloadBox(currBox, binNo, currOrder, '', 'wait');
							showPicks('');	
							document.getElementById("scan_item").focus();
						}
					}
					else
					{
						//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=sbin&cartNo=3&binNo="+binNo+"&box="+currBox, false);
			xmlhttp.send();
		}

		function removeOrder(orderNo, binNo)
		{
			//alert('Removing Orders');
			//alert(orderNo);
			//alert(binNo);
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				//alert("something");
				//alert(xmlhttp.responseText);
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var ajaxData;
						var loadDiv;
						var loadDivContent;
						if(xmlhttp.responseText!="")
						{
							ajaxData = xmlhttp.responseText;
							var opElements = ajaxData.split(":::");
							loadDiv = opElements[0];
							loadDivContent = opElements[1];
						
							document.getElementById(loadDiv).innerHTML = loadDivContent;	
							document.getElementById("scan_item").focus();
							//disableBin(binNo);
						}
					}
					else
					{
						//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=rord&cartNo=3&passOrder="+orderNo+"&binNo="+binNo,false);
			xmlhttp.send();
		}
		
		function disableBin(binNo)
		{
			//alert('Disabling Bin');
			//alert(binNo);
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				//alert("something");
				//alert(xmlhttp.responseText);
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var ajaxData;
						var loadDiv;
						var loadDivContent;
						if(xmlhttp.responseText!="")
						{
							ajaxData = xmlhttp.responseText;
							var opElements = ajaxData.split(":::");
							loadDiv = opElements[0];
							loadDivContent = opElements[1];
						
							document.getElementById(loadDiv).innerHTML = loadDivContent;	
							document.getElementById("scan_item").focus();
						}
					}
					else
					{
						//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=dbin&cartNo=3&binNo="+binNo,false);
			xmlhttp.send();
		}

		function disableRemove(binNo)
		{
			//alert('Disabling Remove');
			//alert(binNo);
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				//alert("something");
				//alert(xmlhttp.responseText);
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var ajaxData;
						var loadDiv;
						var loadDivContent;
						if(xmlhttp.responseText!="")
						{
							ajaxData = xmlhttp.responseText;
							var opElements = ajaxData.split(":::");
							loadDiv = opElements[0];
							loadDivContent = opElements[1];
						
							document.getElementById(loadDiv).innerHTML = loadDivContent;	
							document.getElementById("scan_item").focus();
						}
					}
					else
					{
						//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=drmv&cartNo=3&binNo="+binNo,false);
			xmlhttp.send();
		}
		
		

		function reloadBox(box, bin, order, content, flag)
		{
			//alert('Reloading Bin');
			//alert(binNo);
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var ajaxData;
						var loadDiv;
						var loadDivContent;
						if(xmlhttp.responseText!="")
						{
							ajaxData = xmlhttp.responseText;
							//alert(ajaxData);
							var opElements = ajaxData.split(":::");
							loadDiv = opElements[0];
							loadDivContent = opElements[1];

							//alert(loadDiv);
							//alert(loadDivContent);
						
							document.getElementById(loadDiv).innerHTML = loadDivContent;	
							document.getElementById("scan_item").focus();
						}
					}
					else
					{
						//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=reload&box="+box+"&binNo="+bin+"&order="+order+"&content="+content+"&flag="+flag,false);
			xmlhttp.send();
		}

		function showBinAllocation(binNo)
		{
			//alert('Triggered: '+binNo);
			//alert('Total Picks: '+totalPicks);
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var ajaxData;
					
					if(xmlhttp.responseText!="")
					{
						if(xmlhttp.responseText == "nothing")
						{
							//alert("Reached No more picks");
							showPicks('');
						}
						else
						{
							ajaxData = xmlhttp.responseText;
							//alert(ajaxData);
							var box_list = ajaxData.split("___");
							if(box_list.length > 0)
							{
								var isActive = 1;
								var picksCount = box_list.length;
								totalPicks = picksCount;
								//alert('Now, Total Picks: '+totalPicks);
								for(var b=0;b<picksCount;b++)
								{
									var currentBox = box_list[b];
									//alert("Current Box: "+currentBox);
									var box_pickno = currentBox.split(":");
									var box = box_pickno[0];
									var pickno	= box_pickno[1];
									var orderNo = box_pickno[2];
									var skipped = box_pickno[3];
									var upc_code = box_pickno[4];
									
									//alert(box);
									//alert(pickno);
									//alert(orderNo);
									//alert(b);
									
									if((skipped == "0") && (isActive == 1))
									{
										isActive = 0;
										//alert('Inside');
										currOrder = orderNo;
										currBin = binNo;
										currBox = box;
										currPickNo = pickno;
										currUPC = upc_code;
										reloadBox(box, currBin, orderNo, pickno, 'on');
									}
									else
									{
										//alert('Else case');
										//alert(box);
										//alert(pickno);
										var loadDiv = "content"+box;
										if(skipped == 1)
										{
											totalPicks = totalPicks - 1;
											var loadDivContent = "<div><span class='skip f-left'>skip <i class='fa fa-share'></i></span></div>";
										}
										else
										{
											var loadDivContent = "<div><span class='count'>"+pickno+"</span></div>";
										}
										//alert(loadDiv);
										//alert(loadDivContent);
										document.getElementById(loadDiv).innerHTML = loadDivContent;
										document.getElementById("scan_item").focus();

									}

									document.getElementById('scan_item').value = "";
									document.getElementById("scan_item").focus();
								}
							}
						}
					}
				}
				else
				{
					//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
				}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=scan_bin&cartNo=3&binNo="+binNo,false);
			xmlhttp.send();
		}

		function scanUPC(upc)
		{
			//alert('Scanning UPC');
			//alert('In Scan UPC - Total Picks: '+totalPicks);
			//alert(currOrder);
			//alert(currBin);
			//alert(binNo);
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var ajaxData;
					var loadDiv;
					var loadDivContent;
					if(xmlhttp.responseText!="")
					{
						ajaxData = xmlhttp.responseText;
						//alert(ajaxData);
						if(ajaxData == "UPDATED")
						{
							currPickNo = currPickNo - 1;
							if(currPickNo < 1)
							{
								totalPicks = totalPicks - 1;
								reloadBox(currBox, currBin, currOrder, '', 'wait');
							}

							if(totalPicks > 0)
							{
								//alert("Still left: "+totalPicks);
								showBinAllocation(currBin);
							}
							else
							{
								//alert("All picks done, proceeding to next bin");
								showPicks('');
							}
							document.getElementById('scan_item').value = "";
							document.getElementById("scan_item").focus();
						}
						//var opElements = ajaxData.split(":::");
						//loadDiv = opElements[0];
						//loadDivContent = opElements[1];

						//alert(loadDiv);
						//alert(loadDivContent);
					
						//document.getElementById(loadDiv).innerHTML = loadDivContent;	
					}
				}
				else
				{
					//document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
				}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=scan_upc&upc="+upc+"&box="+currBox+"&order="+currOrder+"&binNo="+currBin,false);
			xmlhttp.send();
		}

		function loadOrder(orderNo)
		{
			//alert('Pick List Triggered');
			if (window.XMLHttpRequest) {						
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
			} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				//alert("something");
				//alert(xmlhttp.responseText);
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var ajaxData;
						var loadDiv;
						var loadDivContent;
						if(xmlhttp.responseText!="")
						{
							ajaxData = xmlhttp.responseText;
							var opElements = ajaxData.split(":::");
							loadDiv = opElements[0];
							loadDivContent = opElements[1];
						
							document.getElementById(loadDiv).innerHTML = loadDivContent;	
							document.getElementById('scan_item').value = '';
							document.getElementById("scan_item").focus();
						}
					}
					else
					{
						document.getElementById("").innerHTML = "<center>Processing the Orders ...</center>";
					}
			}
			xmlhttp.open("GET","operations.php?rndVal="+Math.random()+"&opt=lord&cartNo=3&passOrder="+orderNo,false);
			xmlhttp.send();
		}

		jQuery.noConflict();
        jQuery(document).ready(function($) {
                $(document).keypress(function(e) {
				if(e.which == 13) {
				if(e.target.id == "scan_item")
					{
						var skuEntry = document.getElementById('scan_item');						
						if (typeof skuEntry !== "undefined" && skuEntry.value == '') {
							//alert('Please scan');
						  }
						  else
						  {
							  //alert('here..');
							  //alert(skuEntry.value.substr(skuEntry.value.length-3, 1));
							  var category;
							
							  if((skuEntry.value.substr(skuEntry.value.length-3, 1) == "-") || (skuEntry.value.substr(0, 3) == "RED"))
							  {
								  category = "bin";
							  }
							  else if(skuEntry.value.substr(skuEntry.value.length-2, 1) == "-")
							  {
								  category = "order";
							  }
							  else if((skuEntry.value.match(/^\d/)) && (skuEntry.value.length <= 9))
							  {
								  category = "order";
								  //alert(category);
							  }
							  else if(!skuEntry.value.match(/-/g))
							  {
								  category = "sku";
							  }
							  else
							  {
								  //alert(category);
								  //alert("None");
							  }
							  /*
							  if(category == "bin")
							  {
								  //alert('Found: Bin');
								  //alert(skuEntry.value);
									if(currBin!=skuEntry.value)
									{
										document.getElementById("alert_message").innerHTML = "<div class='col-md-12 error'><h3 class='text-center'>Invalid Bin / UPC Scanned</h2></div>";
										document.getElementById('scan_item').value = "";
										document.getElementById("scan_item").focus();
									}
									else
									  {
										document.getElementById("alert_message").innerHTML = "";
										showBinAllocation(skuEntry.value);
									  }
							  }
							  */
							  if(category == "bin")
							  {
								  if(currBin!="")
								  {
									//if(currBin!=skuEntry.value)
									if(currBin.toUpperCase() != skuEntry.value.toUpperCase())
									{
										document.getElementById("alert_message").innerHTML = "<div class='col-md-12 error'><h3 class='text-center'>Invalid Bin / UPC Scanned</h2></div>";
										document.getElementById('scan_item').value = "";
										document.getElementById("scan_item").focus();
									}
									else
									{
										document.getElementById("alert_message").innerHTML = "";
										showBinAllocation(skuEntry.value);
									}
								  }
								  else
								  {
									document.getElementById("alert_message").innerHTML = "";
									showBinAllocation(skuEntry.value);
								  }
							  }
							  else if(category == "sku")
							  {
								  if(currUPC!=skuEntry.value)
									{
										//alert(currUPC);
										//alert(skuEntry.value);
										document.getElementById("alert_message").innerHTML = "<div class='col-md-12 error'><h3 class='text-center'>Invalid Bin / UPC Scanned</h2></div>";
										document.getElementById('scan_item').value = "";
										document.getElementById("scan_item").focus();
									}
									else
									{
										document.getElementById("alert_message").innerHTML = "";
										scanUPC(skuEntry.value);
									}
								  /*
								  //alert('here...');
								  var passBin	= document.getElementById('hdBin');
								  var passTran	= document.getElementById('hdTran');
								  var passIQty	= document.getElementById('hdQty');
								  if (typeof skuEntry !== "undefined" && skuEntry.value == '') {
								  }
								  else
								  {
									  //alert("Bin No is:");
									  //alert(passBin.value);
								  }
								  //alert(skuEntry.value);
								  document.getElementById("show_progress").innerHTML = "";
								  pickSKU(passBin.value, passTran.value, passIQty.value);
								  */
							  }
							  else if (category == "order")
							  {
								  loadOrder(skuEntry.value);
							  }
							  else
							  {
									//alert("Now here: "+category);
								  //document.getElementById('scan_item').value = "";
								  //document.getElementById("show_progress").innerHTML = "<font color='darkbrown'>Invalid Bin / UPC Code scanned</font>";
							  }
						  }
					}
				}
				//alert(e.target.id);
				//if(e.which == 13) {
				//	alert('You pressed enter!');
				//}
			});
		});

	</Script>
  </head>

<body onLoad="javascript:initializeBins();">
<div class="container-fluid main-nav">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img class="img-responsive" src="assets/img/clearview_logo_white.png"></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <p class="navbar-text navbar-right">| Signed in as <a href="#" class="navbar-link">Raghava</a></p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">start</a></li>
        <li><a href="pick.php">pick</a></li>        
        <li><a href="skipped.php">skipped bins</a></li>
        <li><a href="confirm.php">confirmation</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
</div>
