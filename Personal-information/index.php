<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Personal Information Form</title>
</head>
<body>
    <div class="information-box">
        <h1>Personal Information</h1>
        <form action="insert.php" method="post">
          <div class="id-number">
            <label id="title" for="id-number-information">ID Number :</label>
            <input type="text" name="id-number" id="id-number">
          </div>
          <div class="name-information">
            <label id="title" for="first-name">First Name :</label>
            <input type="text" name="first-name" id="first-name">
          </div>
          <div class="name-information">
            <label id="title" for="middle-name">Middle Name :</label>
            <input type="text" name="middle-name" id="middle-name">
          </div>
          <div  class="name-information">
            <label id="title" for="last-name">Last Name :</label>
            <input type="text" name="last-name" id="last-name">
          </div>
          
          <div class="age-information">
            <label id="title" for="age">Age :</label>
            <input type="number" min="1" max="99" maxlength="2" name="age" id="age">
          </div>
          <div class="gender-information">
            <label id="title" for="gender">Gender :</label>
            <div class="gender">
              <label for="male">Male</label>
              <input type="radio" name="gender" value="Male">
              <label for="female">Female</label>
            <input type="radio" name="gender" value="Female">
              </div>
            </div>
          <div class="status-information">
            <label id="title" for="status">Status :</label>  
              <select name="status">
                <option value="" selected disabled>Select Gender</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
              </select>
          </div>
          <div class="address-information">
            <label id="title" for="address">Address :</label>
            <input type="text" name="address" id="address">
          </div>
          <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>