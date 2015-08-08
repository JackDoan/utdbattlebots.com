<?php
/*
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contactUs">
  Launch demo modal
</button>
*/
?>

<div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="contactUsLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
	<div id="thanks">
         <form class="contact" name="contact">
		<div class="form-group">
            		<label for="name">Name:</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
           		 <label for="email">E-mail Address:</label>
         		 <input type="email" name="email" class="form-control">
		</div>
            	<div class="form-group">
			<label class="" for="message">Message:</label>
            		<textarea name="message" class="form-control"></textarea>
		</div>
        </form>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<input class="btn btn-success" type="submit" value="Send!" id="submit">
      </div>
    </div>
  </div>
</div>
