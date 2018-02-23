<?php include 'header.php';?>


<div class="row">
  <div class="col-xs-12" >
    <center>
      <h1>Share with text or email</h1>
    </center>
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
    <center>
      <button class="js-textareacopybtn" style="border: 0px; background-color: white;">
        <p class="signin share"> Click to Copy URL - Then paste into a text or email</p>
      </button>
    </center>
    <center>
      <textarea class="js-copytextarea share" style="width:270px;">https://www.phoenixmarketing.biz/shogide/</textarea>
    </center>
  </div>

  <script>
  var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

  copyTextareaBtn.addEventListener('click', function(event) {
    var copyTextarea = document.querySelector('.js-copytextarea');
    copyTextarea.select();

    try {
      var successful = document.execCommand('copy');
      var msg = successful ? 'successful' : 'unsuccessful';
      console.log('Copying text command was ' + msg);
    } catch (err) {
      console.log('Oops, unable to copy');
    }
  });

  </script>
</div>

<br>
<hr>
<br>


<div class="row">
  <div class="col-xs-12">
    <center>
    <h1>Scan with QR Code Reader</h1>
    </center>
    <center>
      <img class="img-responsive center-block" src="images/qr/shogideplus.png" alt="shogide.com">
    </center>
  </div>
</div>






<?php include 'footer.php';?>
