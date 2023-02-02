<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Insert</title>
</head>
<body>

<h2>Welcome to Announcement</h2><br>

<form action="index.php" method="post">
<input type = "text" name="title" id="title" placeholder ="Announcement Title" required><br><br>
<textarea rows="4" cols="50" type = "text" name="title" id="title" required>Announcement Description</textarea>


    <table>

    <tr>
    <th><h3>Date :</h3></th>
    </tr>
<td>Start Date : <input type = "date" name="date" id="date" required></td>
<td>End Date : <input type = "date" name="date" id="date" required></td> 

</table>

<button type="submit">Submit</button>
<button type="reset">Reset</button>
</form>


</body>
</html>