<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Landon Hotel App</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="pickadate/lib/themes/default.css">
  <link rel="stylesheet" href="pickadate/lib/themes/default.date.css">
  <meta class="foundation-mq">
</head>

<body>

  <!-- Start Top Bar -->
  <div class="top-bar">
    <div class="row">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
          <li role="menuitem"><a href="{{ route('home') }}">Home</a></li>
          <li role="menuitem"><a href="{{ route('clients_index') }}">Klanten</a></li>
          <li role="menuitem"><a href="{{ route('reservations_index') }}">Reservaties</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Top Bar -->

  <br>


  <div class="row">
    <div class="medium-12 large-12 columns">
      <h4>Klanten/Boeking</h4>
      <div class="medium-2  columns">Boeking voor:</div>
      <div class="medium-2  columns"><b>Mr. Herr Seele</b></div>
      <form action="" method="post">
        <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
        <div class="medium-1  columns">Van:</div>
        <div class="medium-2  columns"><input name="dateFrom" value="" type="text" class="datepicker" /></div>
        <div class="medium-1  columns">Tot:</div>
        <div class="medium-2  columns"><input name="dateTo" value="" type="text" class="datepicker" /></div>
        <div class="medium-2  columns"><input class="button" type="submit" value="ZOEK" /></div>
      </form>

      <table class="stack">
        <thead>
          <tr>
            <th width="200">Kamer</th>
            <th width="200">Beschikbaarheid</th>
            <th width="200">Actie</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>101</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>102</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>201</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>202</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



  <div class="row column">
    <hr>
    <ul class="menu">
      <li class="float-right">Copyright 2019</li>
    </ul>
  </div>

  <script>
    $(document).foundation();
  </script>

  <script>
    $(document).foundation();
  </script>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
  <script src="pickadate/lib/picker.js"></script>
  <script src="pickadate/lib/picker.date.js"></script>
  <script>
    $('.datepicker').pickadate({
      format: 'dd-mm-yyyy',
      formatSubmit: 'yyyy-mm-dd'
    });
  </script>
</body>

</html>