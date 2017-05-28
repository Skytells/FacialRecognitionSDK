<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/ai/style.css">
    <title>Sign in via Facial Recognition</title>
</head>


<canvas id="demo-canvas" hidden></canvas>




<div class="container main-title">
    <div align="center">
        <h1>Login via <span class="thin">Your Face</span></h1>
    </div><br>
    <div class="app">

        <a href="#" id="start-camera" class="visible">Touch here to start the app.</a>
        <div class="alert alert-success success-alert" role="alert" id="StatusArea">
            <strong>Hello There!</strong>
            <p id="lblStatus"></p>
        </div>



        <div id="arWait" align="center" class="alert alert-warning alert-dismissible fade show wait-alert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
            <strong>Recognizing your Face</strong> Our AI is recognizing your Face at the moment.<br>Please allow up to 5 sec for this operation to complete...<br>Do not refresh or close your browser.
        </div>

        <video id="camera-stream"></video>
        <img id="snap" style="-webkit-filter: blur(10px); /* Safari 6.0 - 9.0 */
           filter: blur(10px);">
        <div id="placmentVid" style="height: 420px; display:none;"></div>
        <p id="error-message"></p>

        <div class="controls">
            <a href="#" id="delete-photo" title="Delete Photo" class="disabled"><i class="material-icons">delete</i></a>
            <a href="#" id="take-photo" title="Take Photo"><i class="material-icons">camera_alt</i></a>
            <a href="#" id="download-photo" download="selfie.png" title="Save Photo" class="disabled"><i class="material-icons">file_download</i></a>
        </div>

        <!-- Hidden canvas element. Used for taking snapshot of video. -->
        <canvas></canvas>

    </div>

</div>




<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="assets/ai/js/functions.js"></script>

</html>
