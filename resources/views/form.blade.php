<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        body {
            background-color: rgb(0, 119, 255);
        }
    </style>
</head>
<body>
    
<h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>

    <form action="{{url ('welcome')}}" method="get">
        
      <label for="fname">First Name:</label><br>
      <input type="text" id="fname" name="fname" required /><br><br>
      <label for="lname">Last Name:</label><br>
      <input type="text" id="lname" name="lname" required /><br>

<p>Gender</p>
        
        <input type="radio" id="Male" name="Gender" value="Male">
        <label for="html">Male</label><br>
        <input type="radio" id="Female" name="Gender" value="Female">
        <label for="html">Female</label>

<p>Nationality</p>

        <select id="Nationality" name="Nationality">
            <option value="Portugis">portugis</option>
            <option value="Javanese">javanese</option>
            <option value="Sundanese">sundanese</option>
        </select>

<p>Language Spoken</p>
        
        
        <input type="checkbox" id="Bahasa Indonesia" name="language[]" value="Bahasa Indonesia">
        <label for="Bahasa Indnesia"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="inggris" name="language[]" value="inggris">
        <label for="inggris"> Inggris </label><br>
        <input type="checkbox" id="sunda" name="language[]" value="sunda">
        <label for="sunda"> Sunda </label><br>
    

<p>Bio</p>
    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea><br>

        <input type="submit" value="submit">
    </form>


</body>
</html>