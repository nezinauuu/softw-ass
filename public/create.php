

    <?php include "templates/header.php"; ?><h2>Add a user</h2> 
    <style>
      <?php include "css/style.css" ?>
      </style>

    <form method="post">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname" required>
      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" required>
      <label for="email">Email Address</label>
      <input type="email" name="email" id="email" required>
      <label for="age">Age</label>
      <input type="text" name="age" id="age">
      <label for="location">Location</label>
      <input type="text" name="location" id="location">
      <input type="submit" name="submit" value="Submit">
    </form>
    <a href="index.php">Back to home</a>

    <?php include "templates/footer.php"; ?>