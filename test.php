<?php
  $SCRIPT = 'js.js';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form id="frm">
    <div>
      <label for="">First Name:</label><br/>
      <input type="text" id="firstName" name="firstName" />
    </div>
    <div>
      <label for="">Last Name:</label><br/>
      <input type="text" id="lastName" name="lastName" />
    </div>
    <div>
      <label for="">Age:</label><br/>
      <input type="number" id="age" name="age" />
    </div>
    <button type="submit">Submit</button>
  </form>
  <div id="response"></div>
  <script src="<?php echo $SCRIPT ?>"></script>
</body>
</html>
