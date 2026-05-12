<?php include 'includes/header.php'; ?>

<form action="collecting-form-data.php" 
method="POST" 
enctype="mutipart/from-date">
  <p>Name:     <input type="text" name="name"></p>
  <p>Age:      <input type="text" name="age"></p>
  <p>Email:    <input type="text" name="email"></p>
  <p>Password: <input type="password" name="pwd"></p>
  <p>Bio:      <textarea name="bio"></textarea></p>
  <p>File: <input type="file" name="image"></p>
  <p>Contact preference:
    <select name="preferences">
      <option value="email">Email</option>
      <option value="phone">Phone</option>
    </select></p>
  <p>Rating: 
    1 <input type="radio" name="rating" value="1">
    2 <input type="radio" name="rating" value="2">
    3 <input type="radio" name="rating" value="3"></p>
  <p><input type="checkbox" name="terms" value="true"> 
  I agree to the terms and conditions.</p>
  <p><input type="submit" value="Save"></p>
</form>
<h3>Post</h3>
<pre><?php var_dump($_POST); ?></pre>
<h3>Files</h3>
<pre><?php var_dump($_FILES); ?></pre>
<h3>Server</h3>
<pre><?php var_dump($_SERVER); ?></pre>
<?php include 'includes/footer.php'; ?>