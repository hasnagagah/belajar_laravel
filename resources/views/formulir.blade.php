<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
		crossorigin="anonymous">
    <title>Input Data Form</title>
  </head>
  <body>
    <h1>Input Data Form</h1>

	<form action=formulir/proses method=post>
	  <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	  <div class="form-row">
		<div class="col-md-4 mb-3">
		  <label for="validationServer01">First name</label>
		  <input type="text" class="form-control is-valid" id="validationServer01"
			placeholder="First name" value="Mark" name=nama required>
		  <div class="valid-feedback">
			Looks good!
		  </div>
		</div>
		<div class="col-md-4 mb-3">
		  <label for="validationServer02">Last name</label>
		  <input type="text" class="form-control is-valid" id="validationServer02"
			placeholder="Last name" value="Otto" required>
		  <div class="valid-feedback">
			Looks good!
		  </div>
		</div>
		<div class="col-md-4 mb-3">
		  <label for="validationServerUsername">Username</label>
		  <div class="input-group">
			<div class="input-group-prepend">
			  <span class="input-group-text" id="inputGroupPrepend3">@</span>
			</div>
			<input type="text" class="form-control is-invalid" id="validationServerUsername"
				placeholder="Username" aria-describedby="inputGroupPrepend3" required>
			<div class="invalid-feedback">
			  Please choose a username.
			</div>
		  </div>
		</div>
	  </div>
	  <div class="form-row">
		<div class="col-md-6 mb-3">
		  <label for="validationServer03">City</label>
		  <input type="text" class="form-control is-invalid" id="validationServer03"
			placeholder="City" required>
		  <div class="invalid-feedback">
			Please provide a valid city.
		  </div>
		</div>
		<div class="col-md-3 mb-3">
		  <label for="validationServer04">State</label>
		  <input type="text" class="form-control is-invalid" id="validationServer04"
			placeholder="State" required>
		  <div class="invalid-feedback">
			Please provide a valid state.
		  </div>
		</div>
		<div class="col-md-3 mb-3">
		  <label for="validationServer05">Zip</label>
		  <input type="text" class="form-control is-invalid" id="validationServer05"
			placeholder="Zip" required>
		  <div class="invalid-feedback">
			Please provide a valid zip.
		  </div>
		</div>
	  </div>
	  <div class="form-group">
		<div class="form-check">
		  <input class="form-check-input is-invalid" type="checkbox"
			value="" id="invalidCheck3" required>
		  <label class="form-check-label" for="invalidCheck3">
			Agree to terms and conditions
		  </label>
		  <div class="invalid-feedback">
			You must agree before submitting.
		  </div>
		</div>
	  </div>
	  <button class="btn btn-primary" type="submit">Submit form</button>
	</form>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
		integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
		crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
		integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
		crossorigin="anonymous"></script>
    -->
  </body>
</html>
