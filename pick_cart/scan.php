<?php include 'header.php';?>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <h1>Scan Orders </h1>
        <p>Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Cras varius. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Phasellus tempus. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor.</p>
        <hr />   
        <form>
          <div  id="last-form-fields">
            <div class="form-group">
              <label for="orderno1">Scan Order</label>
              <input type="number" class="form-control" id="orderno1" placeholder="scan order now" max="20">
            </div>
          </div>
         <p>&nbsp;</p>
          
          <table class="table table-striped">
      <thead>
        <tr>
          <th class="">#</th>
          <th>Order Numbers</th>
          <th>Status</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>123456789</td>
          <td class="icons">
                <i class="fa fa-check-circle"></i>
          </td>
         <td class="icons"><i class="fa fa-trash"></i></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>987654321</td>
          <td class="icons">
                <i class="fa fa-check-circle"></i>
          </td>
        <td class="icons"><i class="fa fa-trash"></i></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>123456789</td>
         <td class="icons">
                <i class="fa fa-check-circle"></i>
          </td>
          <td class="icons"><i class="fa fa-trash"></i></td>
        </tr>
      </tbody>
    </table>
           <a type="button" role="button" class="btn btn-lg btn-success" href="pick.php">Genearate Pick List</a>
          
        </form>

      </div>
    </div>

</div> <!-- /container -->

<?php include 'footer.php';?>