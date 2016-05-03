<?php include 'header.php';?>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <h1>Allocate</h1>
        <p>Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Cras varius. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Phasellus tempus. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor.</p>
        <hr />
  </div>
  </div>
    
    <div id="message" class="error">
        This is an error message
    </div>
   <div class="row">
          <form>
          <div  id="last-form-fields" class="col-md-12">
            <div class="form-group">
              <label for="orderno1">Scan Bin</label>
              <input type="number" class="form-control" id="orderno1" placeholder="scan order now" max="20">
            </div>
          </div>
         <p>&nbsp;</p>

            <div class="order-block clearfix">
              <div class="col-sm-9 mrg-top-20">
                <div class="row">
                   <div class="col-sm-1">
                    
                  </div>
                  <div class="col-sm-1">
                    Loc
                  </div>
                  <div class="col-sm-3">
                    Bin #:123456789
                  </div>
                  <div class="col-sm-3">UPC:123456789</div>
                  <div class="col-sm-4">Sku:123456789</div>
                </div>
                <div class="row mrg-top-20">
                  <div class="col-sm-1 icons">
                    <i class="fa fa-check-circle"></i>
                  </div>
                  <div class="col-sm-1">
                    1
                  </div>
                  <div class="col-sm-3">
                    Order #: 123456789
                  </div>
                  <div class="col-sm-3">
                    Quantity: 12
                  </div>
                  <div class="col-sm-4">
                    Picked: <span class="count-completee">12</span>
                  </div>
                </div>
                <div class="row mrg-top-20">
                  <div class="col-sm-1 icons">
                  <i class="fa fa-refresh fa-spin"></i>
                  </div>
                  <div class="col-sm-1">
                    1
                  </div>
                  <div class="col-sm-3">
                    Order #: 123456789
                  </div>
                  <div class="col-sm-3">
                    Quantity: 12
                  </div>
                  <div class="col-sm-4">
                    Picked: <span class="count-active">12</span>
                  </div>
                </div>
                
                </div>
             
            </div>

            <div class="order-block clearfix active">
              <div class="col-sm-9 mrg-top-20">
                <div class="row">
                   <div class="col-sm-1">
                    
                  </div>
                  <div class="col-sm-1">
                    Loc
                  </div>
                  <div class="col-sm-3">
                    Bin #:123456789
                  </div>
                  <div class="col-sm-2">UPC:123456789</div>
                  <div class="col-sm-2">Sku:123456789</div>
                </div>
                <div class="row mrg-top-20">
                  <div class="col-sm-1 icons">
                    <i class="fa fa-check-circle"></i>
                  </div>
                  <div class="col-sm-1">
                    1
                  </div>
                  <div class="col-sm-3">
                    Order #: 123456789
                  </div>
                  <div class="col-sm-2">
                    Quantity: 12
                  </div>
                  <div class="col-sm-2">
                    Picked: <span class="count-completee">12</span>
                  </div>
                </div>
                <div class="row mrg-top-20">
                  <div class="col-sm-1 icons">
                  <i class="fa fa-refresh fa-spin"></i>
                  </div>
                  <div class="col-sm-1">
                    1
                  </div>
                  <div class="col-sm-3">
                    Order #: 123456789
                  </div>
                  <div class="col-sm-2">
                    Quantity: 12
                  </div>
                  <div class="col-sm-2">
                    Picked: <span class="count-active">12</span>
                  </div>
                </div>
                
                </div>
              <div class="col-sm-3 mrg-top-20"><img src="http://placehold.it/300x110/fff" class="img-responsive" /></div>
            </div>

            <div class="order-block clearfix">
              <div class="col-sm-9 mrg-top-20">
                <div class="row">
                   <div class="col-sm-1">
                    
                  </div>
                  <div class="col-sm-1">
                    Loc
                  </div>
                  <div class="col-sm-3">
                    Bin #:123456789
                  </div>
                  <div class="col-sm-2">UPC:123456789</div>
                  <div class="col-sm-2">Sku:123456789</div>
                </div>
                <div class="row mrg-top-20">
                  <div class="col-sm-1 icons">
                    <i class="fa fa-check-circle"></i>
                  </div>
                  <div class="col-sm-1">
                    1
                  </div>
                  <div class="col-sm-3">
                    Order #: 123456789
                  </div>
                  <div class="col-sm-2">
                    Quantity: 12
                  </div>
                  <div class="col-sm-2">
                    Picked: <span class="count-completee">12</span>
                  </div>
                </div>
                <div class="row mrg-top-20">
                  <div class="col-sm-1 icons">
                  <i class="fa fa-refresh fa-spin"></i>
                  </div>
                  <div class="col-sm-1">
                    1
                  </div>
                  <div class="col-sm-3">
                    Order #: 123456789
                  </div>
                  <div class="col-sm-2">
                    Quantity: 12
                  </div>
                  <div class="col-sm-2">
                    Picked: <span class="count-active">12</span>
                  </div>
                </div>
                
                </div>
              <div class="col-sm-3 mrg-top-20"><img src="http://placehold.it/300x110/fff" class="img-responsive" /></div>
            </div> 
             <div class="row">
                  <div class="checkbox col-sm-12">
                    <a type="button" role="button" class="btn btn-lg btn-success" href="pick.php">Allocation Complete</a>
  
                </div>      
              </div>
          
        </form>


    </div>

</div> <!-- /container -->

<?php include 'footer.php';?>