<!DOCTYPE html>
<html>
<head>
  <title>Contact Kami</title>
  <link rel="stylesheet" href="css/adit.css">
  <script type="text/javascript">
    function send() {
      alert('Terima Kasih Atas Masukan dan Sarannya');
    }
  </script>
</head>
<body  style="background-color: skyblue">
<div id="contact" class="container-fluid">
  <h2 class="text-center">Kontak Kami</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Untuk Info lebih detail silahkan menghubungi Kontak Kami  melalui alamat yang tertera atau menghubungi kami melalui kontak yang tertera</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Pondok Indah Mall Lt.2</p>
      <p><span class="glyphicon glyphicon-phone"></span> 021-2112-21</p>
      <p><span class="glyphicon glyphicon-envelope"></span> E-Apotek@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" onclick="send()">Send</button>
        </div>
      </div>
      <link rel="stylesheet" type="text/css" href="terimakasih.html">
    </div>
  </div>
</div>
</body>
</html>