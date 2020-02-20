<?php include("header.php"); ?>

<!--form--->
<div class="container-fluid" style="background-color: #b2dfdb ;">
  <h1 style="margin-bottom:50px;"><u>Say to Hello</u></h1>


  <div class="col-md-6">

    <div class="mapouter">
      <div class="gmap_canvas"><iframe width="100%" height="300"  id="gmap_canvas"
          src="https://maps.google.com/maps?q=TATHASTU%20SUPERSPECIALITY%20DENTAL%20CLINIC&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
          href="https://www.instazilla.net">instazilla.net</a></div>
      <style>
        .mapouter {
          position: relative;
          text-align: right;
          height: 300px;
          width: 100%;
          margin-bottom: 30px;
        }

        .gmap_canvas {
          overflow: hidden;
          background: none !important;
          height: 300px;
          width: 100%;
        }
      </style>
    </div>
  </div>

  <div class="col-md-6">
    <form class="form-horizontal" action="/action_page.php">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Name:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="email" placeholder="Enter name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Phone :</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="pwd" placeholder="Enter number">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="pwd" placeholder="Enter email">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Message:</label>
        <div class="col-sm-10">
          <textarea rows="2" class="form-control"></textarea>
      </div>
        <center>  <button type="button" class="btn btn-default" style="margin:30px;">Submit</button></center>
        
      </div>
    </form>
  </div>
</div>



<?php include("footer.php"); ?>