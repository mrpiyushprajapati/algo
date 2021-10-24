<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="jsproj.js"></script>
   </head>
<body>
<h2>HTML Forms</h2>
<link rel="stylesheet" href="cssproj.css">


<title>Event Registration Form.</title>
<div id="event-registration">
  <h1>EVENT REGISTRATION</h1>
  <form id="event-registration-form" method="POST" action="">
   
    <fieldset>
      <h3>Personal Information</h3>
      <label for="first-name">First Name</label>
      <input type="text" id="first-name" name="first-name" />
      <label for="last-name">Last Name</label>
      <input type="text" id="last-name" name="last-name" />
      <label for="email">Email</label>
      <input type="email" id="email" name="email" />
      <label for="street">Street Address</label>
      <input type="text" id="street" name="street" />
      <label for="Area">Area</label>
      <input type="text" id="Area" name="Area" />
      <label for="city">City</label>
      <input type="text" id="city" name="city" />
      <label for="state">State</label>
      <select id="states">
          <option>-- Choose your state --</option>
        </select>
      <label for="pin-code">Pin Code</label>
      <input type="text" id="pin-code" name="pin-code" />
    </fieldset>
    <fieldset>
      <h3>Additional Information</h3>
      <label for="Address">Venue Address</label>
      <div>
        <input type="text" id="Address" name="Address"/>
        <br/>
        <label for="Date">Date</label>
        <input type="text" name="Date"/>

      </div>
    </fieldset>
    <button type="button">Submit Form</button>
</div>
</head>

<body>
</body>

</html>