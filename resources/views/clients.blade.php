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
      <h4>KLANTEN</h4>
      <div class="medium-2  columns"><a class="button hollow success" href="{{ route('clients_create')}}">VOEG KLANT TOE</a></div>



      <table class="stack">
        <thead>
          <tr>
            <th width="200">Name</th>
            <th width="200">Email</th>
            <th width="200">Action</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>Mr. Herr Seele</td>
            <td>herr.seele@humo.be</td>
            <td>
              <a class="hollow button" href="{{ route('clients_create')}}">BEWERK</a>
              <a class="hollow button warning" href="{{ route('room_get')}}">BOEK EEN KAMER</a>
            </td>
          </tr>

          <tr>
            <td>Mr. Luc Charles Zeebroek</td>
            <td>kamagurka@humo.be</td>
            <td>
              <a class="hollow button" href="{{ route('clients_create')}}">BEWERK</a>
              <a class="hollow button warning" href="{{ route('room_get')}}">BOEK EEN KAMER</a>
            </td>
          </tr>
          <tr>
            <td>Ms. Eva Moutin</td>
            <td>eva.mouton@flair.be</td>
            <td>
              <a class="hollow button" href="{{ route('clients_create')}}">BEWERK</a>
              <a class="hollow button warning" href="{{ route('room_get')}}">BOEK EEN KAMER</a>
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