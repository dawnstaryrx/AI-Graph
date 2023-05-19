<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="JavaScript image cropper.">
  <meta name="author" content="Chen Fengyuan">
  <title>Cropper.js</title>
  <link rel="stylesheet" href="/addons/xz_tn/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@4/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="/addons/xz_tn/css/cropper.css">
  <link rel="stylesheet" href="/addons/xz_tn/css/main.css">
</head>
<body>
  <!--[if lt IE 9]>
  <div class="alert alert-warning alert-dismissible fade show m-0 rounded-0" role="alert">
    You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <![endif]-->

  <!-- Header -->
  

  <!-- Jumbotron -->
  

  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <!-- <h3>Demo:</h3> -->
        <div class="docs-demo">
          <div class="img-container">
            <img src="<?php  echo $base64Data;?>" alt="Picture">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <!-- <h3>Preview:</h3> -->
        <div class="docs-preview clearfix">
          <div class="img-preview preview-lg"></div>
          <div class="img-preview preview-md"></div>
          <div class="img-preview preview-sm"></div>
          <div class="img-preview preview-xs"></div>
        </div>

        <!-- <h3>Data:</h3> -->
        <div class="docs-data">
          <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataX">X</label>
            </span>
            <input type="text" class="form-control" id="dataX" placeholder="x">
            <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataY">Y</label>
            </span>
            <input type="text" class="form-control" id="dataY" placeholder="y">
            <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataWidth">Width</label>
            </span>
            <input type="text" class="form-control" id="dataWidth" placeholder="width">
            <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-prepend">
              <label class="input-group-text" for="dataHeight">Height</label>
            </span>
            <input type="text" class="form-control" id="dataHeight" placeholder="height">
            <span class="input-group-append">
              <span class="input-group-text">px</span>
            </span>
          </div>
         
   
        </div>
      </div>
    </div>
    <div class="row" id="actions">
      <div class="col-md-9 docs-buttons">
      
    

      </div><!-- /.docs-buttons -->

      <div class="col-md-3 docs-toggles">
        <!-- <h3>Toggles:</h3> -->
        <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
         
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN" onClick="closepos()">
              取消
            </span>
          </label>

		    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN" onClick="setpos()">
              确认
            </span>
          </label>
        </div>

     
      

      </div><!-- /.docs-toggles -->
    </div>
  </div>
<textarea class="form-control" id="putData" placeholder="Get data to here or set data with this value">{"x":1.9922229999996,"y":71.99999999999997,"width":1024.0000000000002,"height":576.0000000000001,"rotate":0,"scaleX":1,"scaleY":1}</textarea>
  <!-- Footer -->
  
  <!-- Scripts -->
  <script src="/addons/xz_tn/js/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="/addons/xz_tn/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="/addons/xz_tn/js/google-analytics.js" crossorigin="anonymous"></script>
  <script src="/addons/xz_tn/js/cropper.js"></script>
  <script src="/addons/xz_tn/js/main.js"></script>
  <script>
	function setpos(){

		window.parent.setposnum(document.getElementById("dataX").value,document.getElementById("dataY").value,document.getElementById("dataWidth").value,document.getElementById("dataHeight").value);

	}

function getQueryVariable(variable)
{
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable){return pair[1];}
    }
    return(false);
}

	function closepos(){
		
window.parent.closepos();
	}

	setTimeout(function(){
	var b={"x":parseInt(getQueryVariable('xx')),"y":parseInt(getQueryVariable('yy')),"width":parseInt(getQueryVariable('ww')),"height":parseInt(getQueryVariable('hh')),"rotate":0,"scaleX":1,"scaleY":1}
	console.log(b)
	cropper.setData(b);

},1000)

	
  </script>
<script>$(function(){$('img').attr('onerror', '').on('error', function(){if (!$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('') == -1 ? this.src.replace('', '') : this.src.replace('', '');$(this).data('check-src', true);}});});</script></body>
</html>
