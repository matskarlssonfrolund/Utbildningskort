<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Datum för körprov</title>
	<style>
	label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}
	</style>
</head>

<body>
	<form action="">
	<label for="meeting-time">Choose a time for your appointment:</label>

		<input type="datetime-local" id="meeting-time"
       	name="meeting-time" value="2021-04-08T19:30"
       	min="2020-01-01T00:00" max="2022-04-08T00:00">
		</form>
	</body>
</html>