<?php include 'header.php';?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Skipped Bins</h1>
        </div>
    </div>
        
    <form>
        
        <div class="row mrg-top-20">
            <div class="col-md-12">       
                <div class="form-group">
                    <div class="col-md-2 text-right"><label for="scan-order">Scan Bin/UPC</label></div>   
                    <div class="col-md-10"><input type="" class="form-control" id="exampleInputEmail1" placeholder="Scan Bin/UPC"></div>
                </div>     
            </div>
        </div>

       <div class="row mrg-top-20">          
          <table class="table table-striped">
      <thead>
        <tr>
          <th class="text-right">#</th>
          <th>Bin Numbers</th>
          <th></th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="form-num">1</th>
          <td>123456789</td>
          <td></td>
          <td class="icons">
                <i class="fa fa-check-circle"></i>
          </td>
        </tr>
        <tr>
          <th scope="row" class="form-num">1</th>
          <td>123456789</td>
          <td></td>
          <td class="icons">
                <i class="fa fa-check-circle"></i>
          </td>
        </tr>
        <tr>
          <th scope="row" class="form-num">1</th>
          <td>123456789</td>
          <td></td>
          <td class="icons">
                <i class="fa fa-check-circle"></i>
          </td>
        </tr>
      </tbody>
    </table>
          <a type="button" role="button" class="btn btn-lg btn-success" href="complete.php">complete</a>
            
            
    </div> <!-- /row -->
    
    </form>

</div> <!-- /container -->

<?php include 'footer.php';?>