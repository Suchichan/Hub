<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Insert</title>
</head>
<body>

<h2>Welcome to Bill Updater</h2><br>

<form action="index.php" method="post" enctype="multipart/form-data">
<input type = "text" name="name" id="name" placeholder ="Company Name" required>
<input type = "number" min="1" name="billno" id="billno" placeholder ="Bill Number" required>
<input type="text" name = "items" id="items" placeholder="Items" required>
<input type="number" step="0.01" name ="amount" id="amount" placeholder="Amount" required>
<input type="text" name="payment" id="payment" placeholder="Payment Method" required>
<input type = "date" name="date" id="date" required> 
<input  type="file" name="file" required><br><br>
<button type="submit">Submit</button>
<button type="reset">Reset</button>
</form>

</body>
</html>