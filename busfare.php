<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP Fare of Bus</title>
</head>
<body>
	<form method="post" action="result.php">
		<label>Indulás:</label><br/>
		<select name="start">
			<option value="Budapest">Budapest</option>
			<option value="Veszprém">Veszprém</option>
			<option value="Székesfehérvár">Székesfehérvár</option>
			<option value="Győr">Győr</option>
		</select>
		<label>Érkezés:</label><br/>
		<select name="destination">
			<option value="Budapest">Budapest</option>
			<option value="Veszprém">Veszprém</option>
			<option value="Székesfehérvár">Székesfehérvár</option>
			<option value="Győr">Győr</option>
		</select>
		<label>Kedvezmények</label>
		<input type="radio" name="discount" value="1">Felnőtt<br/>
		<input type="radio" name="discount" value="0.5">Diák<br/>
		<input type="radio" name="discount" value="0">Nyugdíjas<br/>
		<button type="submit">Menetdíj-számítás</button>
		
		
	</form>
	
</body>
</html>