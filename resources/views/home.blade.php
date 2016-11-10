@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-3 well">
    <div class="well">
      <p><a href="#">My Profile</a></p>
      {{\Auth::user()->nombre.",".\Auth::user()->apellido}}
      <br>
      <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
    </div>
    <div class="well">
      <p><a href="#">Interests</a></p>
      <p>
        <span class="label label-default">News</span>
        <span class="label label-primary">W3Schools</span>
        <span class="label label-success">Labels</span>
        <span class="label label-info">Football</span>
        <span class="label label-warning">Gaming</span>
        <span class="label label-danger">Friends</span>
      </p>
    </div>
    <div class="alert alert-success fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <p><strong>Ey!</strong></p>
      People are looking at your profile. Find out who.
    </div>
    <p><a href="#">Link</a></p>
    <p><a href="#">Link</a></p>
    <p><a href="#">Link</a></p>
  </div>
  <div class="col-sm-7">

    <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>{{\Auth::user()->nombre}} ¿Qué estas pensando? </p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <textarea name="userpost" rows="6" cols="75" placeholder="¿Listo para Kidyfycarte?"> </textarea>
          <input type="button" name="send" value="Enviar">
        </div>

    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="well">
         <p>John</p>
         <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
        </div>
      </div>
      <div class="col-sm-9">
        <div class="well">
          <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="well">
         <p>Bo</p>
         <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
        </div>
      </div>
      <div class="col-sm-9">
        <div class="well">
          <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="well">
         <p>Jane</p>
         <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
        </div>
      </div>
      <div class="col-sm-9">
        <div class="well">
          <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="well">
         <p>Anja</p>
         <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
        </div>
      </div>
      <div class="col-sm-9">
        <div class="well">
          <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2 well">
    <div class="thumbnail">
      <p>Upcoming Events:</p>
      <img src="paris.jpg" alt="Paris" width="400" height="300">
      <p><strong>Paris</strong></p>
      <p>Fri. 27 November 2015</p>
      <button class="btn btn-primary">Info</button>
    </div>
    <div class="well">
      <p>ADS</p>
    </div>
    <div class="well">
      <p>ADS</p>
    </div>
  </div>
</div>
</div>
<!-- Finish MainContainer -->
@endsection
