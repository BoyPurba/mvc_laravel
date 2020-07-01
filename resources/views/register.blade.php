<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<h2>Buat Account Baru!</h2>
    <form action ="/welcome" method="post">
    @csrf
      <fieldset>
        <legend>Sign Up Form</legend>
        <label for="first_name">First Name </label>
        <input type="text" name="first_name" value="" id="first_name">
        <br><br>
        <label for="last_name">Last Name </label>
        <input type="text" name="last_name" value="" id="last_name">
        <br><br>

        <label>Gender:</label> <br>
        <input type="radio" name="Gender" value="m">Male <br>
        <input type="radio" name="Gender" value="f">Female <br>
        <input type="radio" name="Gender" value="o">Other
        <br><br>

        <label>Nationality:</label><br>
        <select class="" name="nationality">
          <option value="id">Indonesian</option>
          <option value="sg">Singapore</option>
          <option value="my">Malaisyan</option>
          <option value="ot">Other</option>
        </select>

        <br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="Language" value="0">Bahasa Indonesia <br>
        <input type="checkbox" name="Language" value="1">English <br>
        <input type="checkbox" name="Language" value="2">Other
        <br><br>

        <label>Bio:</label><br>
        <textarea name="Bio" rows="8" cols="30"></textarea>
        <br>
        <input type="submit" name="submit" value="Sign Up">
      </fieldset>
    </form>
</body>
</html>