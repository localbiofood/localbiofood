@extends('layouts.app')
@section('content')
<div class="container">
  <div id="inner-container">
    <form class="form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>
        <!-- Form Name -->
        <div class="space-box">
          <legend>Sazinies ar mums!</legend>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Vārds:</label>  
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="first_name" placeholder="vārds" class="form-control"  type="text">
              </div>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">E-pasts:</label>  
            <div class="col-md-4 inputGroupContainer">
               <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="e-pasts" class="form-control"  type="text">
              </div>
            </div>
        </div>
        <!-- Text area -->
        <div class="form-group">
          <label class="col-md-4 control-label">Ziņa:</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="comment" placeholder="teksts šeit..."></textarea>
              </div>
            </div>
        </div>
        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message"> 
          <i class="glyphicon glyphicon-thumbs-up"></i> 
          Paldies, ka nosūtījāt ziņu mums, mēs sazināsimies ar Jums pēc iespējas ātrāk.
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-success" >Sūtīt 
                <span class="glyphicon glyphicon-send"></span>
              </button>
            </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
@endsection