<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Landon Hotel App</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" href="../css/foundation.css">
  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="../pickadate/lib/themes/default.css">
  <link rel="stylesheet" href="../pickadate/lib/themes/default.date.css">
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
      <h4>Nieuwe klant</h4>
      <form action="/clients/new" method="post">
        <div class="medium-4  columns">
          <label>Titel</label>
          <select name="form[title]">
            <option value="mr" selected="selected">Mr.</option>
            <option value="ms">Mw.</option>
            <option value="mrs">Juf.</option>
            <option value="dr">Dr.</option>
          </select>
        </div>
        <div class="medium-4  columns">
          <label>Voornaam</label>
          <input name="form[name]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Achternaam</label>
          <input name="form[lastName]" type="text">
        </div>
        <div class="medium-8  columns">
          <label>Adres</label>
          <input name="form[address]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Postcode</label>
          <input name="form[zipCode]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Stad</label>
          <input name="form[city]" type="text">
        </div>
        <div class="medium-4  columns">
          <label>Provincie</label>
          <input name="form[provincie]" type="text">
        </div>
        <div class="medium-12  columns">
          <label>E-mail</label>
          <input name="form[email]" type="text">
        </div>
        <div class="medium-12  columns">
          <input value="BEWAAR" class="button success hollow" type="submit">
        </div>
      </form>
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