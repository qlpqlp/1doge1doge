<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>1 Doge = 1 Doge</title>
    <meta name="description" content="Calculate fiat prices in Doge">
    <meta name="author" content="All Dogecoin Community!">
    <meta name="generator" content="You!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="mobile-web-app-capable" content="yes" />
    
    <link rel="icon" type="image/png" href="https://what-is-dogecoin.com/1doge=1doge/dogecoin.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
    <link href="css/doge.css" rel="stylesheet" crossorigin="anonymous">

    <meta property="og:image" content="https://what-is-dogecoin.com/1doge=1doge/img/1doge=1doge_bg.png">
    <meta property="og:title" content="1 Doge = 1 Doge">
    <meta property="og:description" content="Calculate fiat prices in Doge">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://what-is-dogecoin.com/1doge=1doge/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="1 Doge = 1 Doge">
    <meta name="twitter:site" content="https://what-is-dogecoin.com/1doge=1doge/">
    <meta name="twitter:description" content="Calculate fiat prices in Doge">
    <meta name="twitter:image" content="https://what-is-dogecoin.com/1doge=1doge/img/1doge=1doge_bg.png">

<?php if (isset($_GET["value"]) and isset($_GET["fiat"])){ ?>    
<script type="text/javascript">
  $(document).ready(function() {
      function dogecoin(x) {
          return Number.parseFloat(x).toFixed(3);
      } 
        
      if (localStorage.getItem('dogecoinValue') <= 0 || localStorage.getItem('dogecoinFiat') != "<?php echo $_GET["fiat"]; ?>"){                
          $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=dogecoin&vs_currencies=<?php echo strtolower($_GET["fiat"]); ?>", function(data){

              $("#1doge1doge").html((<?php echo $_GET["value"]; ?> / dogecoin(data["dogecoin"]["<?php echo strtolower($_GET["fiat"]); ?>"])).toFixed(3));   
              localStorage.setItem('dogecoinValue', data["dogecoin"]["<?php echo strtolower($_GET["fiat"]); ?>"]); // we store the value in local storage                
              localStorage.setItem('dogecoinFiat', "<?php echo $_GET["fiat"]; ?>"); // we store the fiat in local storage                        
          }).fail(function( dat, textStatus, error ) {
              var err = textStatus + ", " + error;
          });
      }else{
          $("#1doge1doge").html((<?php echo $_GET["value"]; ?> / dogecoin(localStorage.getItem('dogecoinValue'))).toFixed(3));   
      }
  });
</script>
<?php }; ?>    
</head>

  <body>
<div style="position: absolute; z-index: 1; width: 100%; height: 100%; margin: 0px">
<?php
if ($_GET["value"] > 0){
?>
<div class="container" style="margin-top: 5%; text-align: center">
<div class="alert alert-warning" role="alert">
<h1><b>Ð <span id="1doge1doge"></span></b></h1>
</div>
</div>
<div class="container" style="margin-top: 7%; max-width: 500px">
<?php
}else{
?>
<div class="container" style="margin-top: 17%; max-width: 500px">
<?php
};
?>
<form>
<div class="input-group mb-3">
<select class="form-select" aria-label="fiat" name="fiat">
  <?php if (isset($_GET["fiat"])){ ?><option value="<?php echo $_GET["fiat"]; ?>" selected><?php echo $_GET["fiat"]; ?></option><?php };?>
  <option value="USD" >(USD) US Dollar</option>
  <option value="EUR">(EUR) Euro</option>
  <option value="GBP">(GBP) British Pound Sterling</option>
  <option value="AUD">(AUD) Australian Dollar</option>
</select>
  <span class="input-group-text">$</span>
  <input type="number" step="any" class="form-control" name="value" value="<?php echo $_GET["value"]; ?>" placeholder="0" aria-describedby="" required="required">
  <button type="submit" class="btn btn-warning">Much Ð</button>
</div>
</form>
</div>
<div style="text-align:center; padding:50px">
<h1><b>1 Ð = 1 Ð</b></h1>
</div>
</div>
<div class="containerx" style="position: absolute; z-index: 0; overflow: hidden">
  <div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
  </body>
</html>
