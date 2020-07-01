<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Html</title>
</head>
<body>
  <h1>Buat Account Baru!</h1>
  <h3>Sign up Form</h3>
  
  <form action="/welcome" method="POST">

    @csrf

    <label for="name">First name:</label>
    <br><br>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="last">Last name:</label>
    <br><br>
    <input type="text" id="last" name="last">
    <br><br>
    <label>Gender:</label>
    <br><br>
    <input type="radio" id="male" name="jk" value="male">
    <label for="male">Male</label>
    <br>
    <input type="radio" id="female" name="jk" value="female" >
    <label for="female">Female</label>
    <br>
    <input type="radio" id="other" name="jk" value="other">
    <label for="other">Other</label>
    <br><br>
    <p>Nationality:</p>
    <select name="negara" id="">
      <option value="indo">Indonesia</option>
      <option value="usa">Ameria</option>
      <option value="china">China</option>
    </select>
    <br>
    <p>Language Spoken:</p>
    <input type="checkbox">Bahasa Indonesia
    <br>
    <input type="checkbox">English
    <br>
    <input type="checkbox">Other
    <br>
    <p>Bio:</p>
    <textarea name="textarea" id="" cols="30" rows="10"></textarea>
    <br> 
    <button>Sign Up</button>
  </form>
</body>
</html>