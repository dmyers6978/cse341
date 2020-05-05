<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Week3 | Checkout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/checkout.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/cs313/week3/common/header.php';?>
    <main>
        <form method="post" action="./">
        <label for="fName">First Name: </label><input type="text" name="fName" id="fName">
        <label for="lName">Last Name: </label><input type="text" name="lName" id="lName">
        <label for="email">Email: </label><input type="text" name="email" id="email">
        <label for="address1">Address Line 1: </label><input type="text" name="address1" id="address1">
        <label for="address2">Address Line 2: </label><input type="text" name="address2" id="address2">
        <label for="city">City: </label><input type="text" name="city" id="city">
        <label for="state">State: </label><select name="state" id="state">
	        <option value="AL">Alabama</option>
	        <option value="AK">Alaska</option>
	        <option value="AZ">Arizona</option>
	        <option value="AR">Arkansas</option>
	        <option value="CA">California</option>
	        <option value="CO">Colorado</option>
	        <option value="CT">Connecticut</option>
	        <option value="DE">Delaware</option>
	        <option value="DC">District Of Columbia</option>
	        <option value="FL">Florida</option>
	        <option value="GA">Georgia</option>
	        <option value="HI">Hawaii</option>
	        <option value="ID">Idaho</option>
	        <option value="IL">Illinois</option>
	        <option value="IN">Indiana</option>
	        <option value="IA">Iowa</option>
	        <option value="KS">Kansas</option>
	        <option value="KY">Kentucky</option>
	        <option value="LA">Louisiana</option>
	        <option value="ME">Maine</option>
	        <option value="MD">Maryland</option>
	        <option value="MA">Massachusetts</option>
	        <option value="MI">Michigan</option>
	        <option value="MN">Minnesota</option>
	        <option value="MS">Mississippi</option>
	        <option value="MO">Missouri</option>
	        <option value="MT">Montana</option>
	        <option value="NE">Nebraska</option>
	        <option value="NV">Nevada</option>
	        <option value="NH">New Hampshire</option>
	        <option value="NJ">New Jersey</option>
	        <option value="NM">New Mexico</option>
	        <option value="NY">New York</option>
	        <option value="NC">North Carolina</option>
	        <option value="ND">North Dakota</option>
	        <option value="OH">Ohio</option>
	        <option value="OK">Oklahoma</option>
	        <option value="OR">Oregon</option>
	        <option value="PA">Pennsylvania</option>
	        <option value="RI">Rhode Island</option>
	        <option value="SC">South Carolina</option>
	        <option value="SD">South Dakota</option>
	        <option value="TN">Tennessee</option>
	        <option value="TX">Texas</option>
	        <option value="UT">Utah</option>
	        <option value="VT">Vermont</option>
	        <option value="VA">Virginia</option>
	        <option value="WA">Washington</option>
	        <option value="WV">West Virginia</option>
	        <option value="WI">Wisconsin</option>
	        <option value="WY">Wyoming</option>
        </select>				
        <label for="zip">Zip Code: </label><input type="text" name="zip" id="zip">
        <input type="hidden" name="action" value="confirmation">
        <input type="submit" value="Check Out">
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>