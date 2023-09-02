<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Number Form</title>
  <x-bootstrap.styles/>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-mid-8">
        @yield('number-output')
        <x-number-form/>
      </div>
    </div>
  </div>
  
  <x-bootstrap.scripts/>
</body>
</html>