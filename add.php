<?php include("header.php"); ?>
  <div class="container">

      <div class="contact">
        <form action="." method="post">
          <div class="container" class="content">
              <div class="content">

                <h3 class="brand"> Add an<span> Employee </span> Information </h3>
               <label>Project ID:</label>
               <input type="text" name="id" ><br><br>
               <label>Budget:</label>
               <input type="text" name="budget"  ><br><br>
               <label>Sq ft:</label>
               <input type="text" name="sq_ft" ><br><br>
               <label>Linear ft:</label>
               <input type="text" name="linear_ft" ><br><br>
               <label>Material Type:</label>
               <input type="text" name="material_type"  ><br><br>
               <label>Price per sq ft:</label>
               <input type="text" name="price_sq_ft" ><br><br>
               <label>Price per linear ft:</label>
               <input type="text" name="price_linear_ft"  ><br><br>
               <label>Labor  Cost:</label>
               <input type="text" name="labor_cost" ><br><br>
            
              <input type="hidden" name="action" value="add">
              <label>&nbsp;</label>
              <input class="waves-effect waves-light btn" type="submit" value="Add a new Employee">
              <a class="waves-effect waves-light btn" href=".?action=next">Back to Update Form</a><br><br><br><br><br><br>
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>
