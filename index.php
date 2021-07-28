<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
  <h1>Bootstrap modal: close current, open new</h1>
  <p class="text-muted">
  A proper and clean way to get this done without addtional Javascript/jQuery. The main purpose of this demo is was to answer this 
  <a href="http://stackoverflow.com/questions/18253972/bootstrap-modal-close-current-open-new">question on stackoverflow</a>
  </p>
  <hr />

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demo-1">Launch Modal #1</button>
  <button type="button" class="btn btn-info"    data-toggle="modal" data-target="#demo-2">Launch Modal #2</button>
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demo-3">Launch Modal #3</button>

  <!-- [ Modal #1 ] -->
  <div class="modal fade" id="demo-1" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title caps"><strong>Demo Modal #1</strong></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Input Placeholder..." />
            <span class="input-group-btn"><button class="btn btn-default" type="button">Action</button></span>
          </div>
        </div>
      </div>
       <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#demo-2" data-dismiss="modal">Close current, Launch Modal #2</button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demo-3" data-dismiss="modal">Close current, Launch Modal #3</button>
        </div>
     </div>
    </div>
  </div>

  <!-- [ Modal #2 ] -->
  <div class="modal fade" id="demo-2" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title caps"><strong>Demo Modal #2</strong></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Input Placeholder..." />
            <span class="input-group-btn"><button class="btn btn-default" type="button">Action</button></span>
          </div>
        </div>
      </div>
       <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demo-1" data-dismiss="modal">Close current, Launch Modal #1</button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#demo-3" data-dismiss="modal">Close current, Launch Modal #3</button>
        </div>
     </div>
    </div>
  </div>

  <!-- [ Modal #3 ] -->
  <div class="modal fade" id="demo-3" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title caps"><strong>Demo Modal #3</strong></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Input Placeholder..." />
            <span class="input-group-btn"><button class="btn btn-default" type="button">Action</button></span>
          </div>
        </div>
      </div>
       <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#demo-1" data-dismiss="modal">Close current, Launch Modal #1</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demo-2" data-dismiss="modal">Close current, Launch Modal #2</button>
        </div>
     </div>
    </div>
  </div>

  <hr />
  <h3 class="caps">Usage:</h3>
<pre class="prettyprint">&lt;!-- Button trigger modal --&gt;
&lt;ANY data-toggle="modal" data-target="TARGET"&gt;...&lt;/ANY&gt;

&lt;div class="modal fade" id="SELECTOR" tabindex="-1"&gt;
  &lt;div class="modal-dialog"&gt;
   &lt;div class="modal-content"&gt;
    &lt;div class="modal-body"&gt; ... &lt;/div&gt;
     &lt;div class="modal-footer"&gt;           &lt;!-- ↓ --&gt;  &lt;!--      ↓      --&gt;
      &lt;ANY data-toggle="modal" data-target="TARGET-2" data-dismiss="modal"&gt;...&lt;/ANY&gt;
     &lt;/div&gt;
   &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
</div> <!-- end .container -->




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>