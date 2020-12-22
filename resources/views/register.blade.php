<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign UP</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign UP Form</h3>

<form action="/welcome" method="POST">
    <!--bagian security token-->
    @csrf

    <!--bagian text input-->
    <label for="first">First Name:</label> 
    <br><br>
    <input type="text" id="first" name="namaAwal">
    <br><br>
    <label for="last">Last Name:</label> 
    <br><br>
    <input type="text" id="last" name="namaAkhir">
    <br><br>



    <!--bagian tombol radio-->
    <label>Gender:</label>
    <br><br>
    <input type="radio" name="gender"> Male 
    <br>
    <input type="radio" name="gender"> Female
    <br>
    <input type="radio" name="gender"> Other
    <br><br><br>
    


    <!--bagian select option-->

    <label>Nationality :</label>
    <br><br>
    <select>
        <option>Sunda Empire</option>
        <option>Indonesia</option>
        <option>Belanda</option>
        <option>Portugis</option>
        <option>Jepang</option>
    </select>
    <br><br><br>
    
<!--bagian checkbox-->
    <label>Language Spoken :</label>
    <br>
    <br>
    <input type="checkbox">Bahasa Indonesia 
    <br>
    <input type="checkbox">English/ Bahasa Inggris 
    <br>
    <input type="checkbox">Other/ Yang lain 
    <br>
    <br>
    <br>

    <!--bagian textarea-->
    <label>Bio :</label>
    <br>
    <br>
    <textarea rows="10" cols="20"></textarea>

    <!--submit button-->
    <br>
    <input type="submit" value="Sign Up">
</form>
<br>
<a href="/">back to home</a>
</body>
</html>