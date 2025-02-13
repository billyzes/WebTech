<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>

  <div class="card">
    <div class="card-body" style="width: 20rem;">

      <form class="row g-3">

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

        <div class="col-md-6">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>

        <div class="col-md-8">
          <label for="inputEmail4" class="form-label">Item Name:</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-8">
          <label for="inputEmail4" class="form-label">Price</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-8">
          <label for="inputEmail4" class="form-label">Qty</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>



    </div>
  </div>



</body>

</html>

<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;


  }
</style>