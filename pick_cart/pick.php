<?php include 'header.php';?>

<div class="container">
    <!--  <div class="row">
      <div class="col-md-12">
        <h1>Pick Page</h1>
      </div>
    </div> -->
    <form>
        
                
    <div class="row mrg-top-20">
        <div class="col-md-12">       
            <div class="form-group">
                <div class="col-md-2 text-right"><h2 class="h2bottom">Next Bin: </h2></div>   
                <div class="col-md-10"><h2><span class="next_bin green">F11A-OS-OS</span><span class="skip">skip <i class="fa fa-share"></i></h2></div>
            </div>     
        </div>
        <div class="col-md-12"> 
            <hr>  
        </div>
    </div>
                
                
    <div class="row mrg-top-20">
        <div class="col-md-12">       
            <div class="form-group">
                <div class="col-md-2 text-right"><label for="scan-order">Scan Bin/UPC</label></div>   
                <div class="col-md-10"><input type="" class="form-control" id="exampleInputEmail1" placeholder="Scan Bin/UPC"></div>
            </div>     
      </div>
    </div>
        

    <div class="row mrg-top-40">
        <div class="col-md-12">
          <div class="col-md-4"></div>   
            <div class="col-md-4">
                <span class="count">1 out 7 items</span>
            </div>
         <div class="col-md-4"></div>  
        </div>
    </div>
    
    <div class="row mrg-top-30">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="bin bin-wait">
                    <div>Completed - order number </div>
                     <div><i class="fa fa-check-circle"></i></div>
                    
                </div> 
                <div class="bin-action">
                    <span class="skip f-left">skip <i class="fa fa-share"></i></span>
                    <span class="delete f-right">remove <i class="fa fa-times"></i></span>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="bin bin-on">
                    <div>On - order number </div>
                     <div><span class="count blink">2</span></div>
                    
                </div> 
                <div class="bin-action">
                    <span class="skip f-left">skip <i class="fa fa-share"></i></span>
                    <span class="delete f-right">remove <i class="fa fa-times"></i></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bin bin-wait">
                    <div>Waiting - order number </div>
                    <div><span class="count">12</span></div>
                    
                </div> 
                <div class="bin-action">
                    <span class="skip f-left">skip <i class="fa fa-share"></i></span>
                    <span class="delete f-right">remove <i class="fa fa-times"></i></span>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="bin bin-wait">
                    <div>Waiting - order number </div>
                    <div><span class="count">4</span></div>
                    
                </div> 
                <div class="bin-action">
                    <span class="skip f-left">skip <i class="fa fa-share"></i></span>
                    <span class="delete f-right">remove <i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
    </div>
        
     <div class="row mrg-top-20">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="bin bin-wait">
                    <div>Waiting - order number </div>
                    <div><span class="count">5</span></div>
                    
                </div> 
                <div class="bin-action">
                    <span class="skip f-left">skip <i class="fa fa-share"></i></span>
                    <span class="delete f-right">remove <i class="fa fa-times"></i></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bin bin-off"> 
                    <div>Bin off</div>
                </div>   
            </div>
             <div class="col-md-3">
                <div class="bin bin-off"> 
                    <div>Bin off</div>
                </div>   
            </div>
            <div class="col-md-3">
                <div class="bin bin-off"> 
                    <div>Bin off</div>
                </div>   
            </div>
        </div>
    </div>
        
    <div class="row mrg-top-20">
        <div class="col-md-12">
          <div class="col-md-2"></div>   
            <div class="col-md-10">
                <a type="button" role="button" class="btn btn-lg btn-success" href="skipped.php">Complete</a>
            </div>  
        </div>
    </div>
            
            
            
     </form>        
    
</div> <!-- /container -->

<?php include 'footer.php';?>