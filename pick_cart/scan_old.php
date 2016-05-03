<?php include 'header.php';?>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <h1>Scan Orders </h1>
        <p>Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Cras varius. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Phasellus tempus. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor.</p>

        <form>
          <div  id="last-form-fields">
            <div class="form-group">
              <label for="orderno1">Order No 1</label>
              <input type="number" class="form-control" id="orderno1" placeholder="scan product now" max="20">
            </div>
          </div>
  
          <button type="button" id="addButton" class="btn btn-default">Scan Next Order</button>  <button type="submit" class="btn btn-default">Done Scanning</button>
        </form>

      </div>
    </div>

</div> <!-- /container -->

<?php include 'footer.php';?>