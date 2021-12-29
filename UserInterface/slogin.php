
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="/OurProject1/CSS/BootStrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/OurProject1/CSS/mycss.css" rel="stylesheet">

  <title>StudentLogIn</title>
</head>

<body>

  <div class="mainDiv">

    <div class="innerdiv " id="myInnerDiv">

      <div class="container">
        <div class="row" style="margin: 2%;">
          <div class="col-lg-2 ">

          </div>

          <div class="col-lg-8 ">

            <label class="text-info " style="font-size:24px" id="lblRollNo">ROLL NO</label>
          </div>

          <div class="col-lg-2 ">

          </div>

        </div>

        <div class="row" style="margin: 2%;">
          <div class="col-lg-2 ">

          </div>

          <div class="col-lg-8 ">

            <input class="loginTextBox" id="txtRollNo" type="text">
          </div>

          <div class="col-lg-2 ">

          </div>

        </div>


        <div class="row" style="margin: 2%;">
          <div class="col-lg-2 ">

          </div>

          <div class="col-lg-8 ">

            <label class="text-info" style="font-size:24px">PASSWORD</label>
          </div>

          <div class="col-lg-2 ">

          </div>

        </div>

        <div class="row" style="margin: 2%;">
          <div class="col-lg-2 ">

          </div>

          <div class="col-lg-8 ">

            <input class="loginTextBox" id="txtPassword" type="password">
          </div>

          <div class="col-lg-2 ">

          </div>

        </div>

        <div class="row" style="margin: 2%;">
          <div class="col-lg-2 ">

          </div>

          <div class="col-lg-8 ">
            <div style="width:100%; display:flex; justify-content:space-between;align-items:center">
            <label id="lblErrorMessage"></label>
              <button class="btn btn-success" id="btnLogin">LOGIN</button>
            </div>

          </div>

          <div class="col-lg-2 ">

          </div>

        </div>




      </div>
      <div id="dynamicDiv" style="background: red;">
      
      </div>
    </div>

  </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="/OurProject1/CSS/BootStrap/js/bootstrap.bundle.min.js"></script>
  <script src="/Ourproject1/jquery/jquery.js"></script>
  <script src="/Ourproject1/userinterface/slogin.js"></script>
</body>

</html>