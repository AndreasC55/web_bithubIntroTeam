
<form action="/redirect.php" method="post">
   <label for="first-name">First Name:</label><br>
   <input type="text" id="first-name" name="first-name"><br>

   <label for="last-name">Last Name:</label><br>
   <input type="text" id="last-name" name="last-name"><br>

   <label for="email">Email:</label><br>
   <input type="email" id="email" name="email"><br>

   <label for="phone-number">Phone Number:</label><br>
   <input type="tel" id="phone-number" name="phone-number"><br>

   <label for="relationship-status">Relationship Status:</label><br>
   <select id="relationship-status" name="relationship-status">
      <option value="single">Friend</option>
      <option value="dating">Family</option>
      <option value="engaged">Coworker</option>
   </select><br>
<input type="submit" value="Submit">
</form>