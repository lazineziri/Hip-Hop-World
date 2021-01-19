<?php
include './headers/contactheader.php'?>
<div class="main">
    <div id="title">
    <h1>Leave a message</h1>
    </div>
    <form>
      <label>Name:</label>
      <input id="name" type="text" name="firstname" class="text-field" placeholder="Name...">
  
      <label>Last Name:</label>
      <input id="lName" type="text" name="lastname" class="text-field" placeholder="Last name...">

      <label>Username:</label>
      <input id="username" type="text" name="lastname" class="text-field" placeholder="Username...">
  
      <label>Message:</label>
      <textarea id="subject" name="subject" placeholder="Write your honest review..." class="text-field" ></textarea>
  
      <input type="submit" value="Submit" id="submit" onclick="validate()">
    </form>
  </div>
</div>
<?php
include 'footer.php'?>