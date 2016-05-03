<?php include 'header.php';?>

<div class="container">
    <!-- <div class="row">
      <div class="col-md-12">
        <h1>Pick Page</h1>
      </div>
    </div>-->

	<!--    error message here-->  
    <div id="alert_message">        
    </div>    

	<div class="row mrg-top-20" id="next_bin_alert">
        
    </div>
    
    <div class="row mrg-top-20">
        <div class="col-md-12">       
            <div class="form-group">
                <div class="col-md-2 text-right"><label for="scan-order">Scan Order</label></div>   
                <div class="col-md-10"><input type="text" class="form-control" id="scan_item" name="txtScanItem" autofocus placeholder="Please scan"></div>
            </div>     
      </div>
    </div>
        

	
    <div id="all_bins">	    
    </div>

	<!--
     <div class="row mrg-top-20">
        <div class="col-md-12">
             <div class="col-md-3">
                <div class="bin bin-off"> 
                    <div>Bin off  </div>
                </div>   
            </div>
            <div class="col-md-3">
                <div class="bin bin-off"> 
                    <div>Bin off  </div>
                </div>   
            </div>
            <div class="col-md-3">
                <div class="bin bin-off"> 
                    <div>Bin off  </div>
                </div>   
            </div>
             <div class="col-md-3">
                <div class="bin bin-off"> 
                    <div>Bin off  </div>
                </div>   
            </div>
        </div>
    </div>
	-->
        
    <div class="row mrg-top-20">
        <div class="col-md-12">
          <div class="col-md-2"></div>   
            <div class="col-md-10" id="show_next">
                <br><br><a type="button" role="button" class="btn btn-lg btn-success" href="javascript:showPicks('load');">Next</a>
            </div>  
        </div>
    </div>
            
            
                 
    
</div> <!-- /container -->

<?php include 'footer.php';?>
