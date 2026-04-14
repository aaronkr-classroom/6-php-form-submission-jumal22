<?php
// validate-form.php

declare(strict_types = 1);
require 'includes/validate.php';

$user = [
  'name'   => '',
  'age'    => '',
  'terms'  => ''
];

$errors = [
  'name'  => '',
  'age'   => '',
  'terms' => ''
];

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user['name'] = $_POST['name'] ?? '';
    $user['age'] = $_POST['age'] ?? '';
    $user['terms'] = (isset($_POST['terms']) && $_POST['terms'] == 'true') ? true : false;

    $errors['name'] = is_text($user['name'], 2, 20) ? '' : 
                      '2~20문자로 사용자 이름을 만드세요';

    $errors['age'] = is_number($user['age'], 16, 65) ? '' : 
                     '16~65살 사이에 입력하세요';                  

    $errors['terms'] = $user['terms'] ? '' : 
                       '동의해야 합니다!';         

    $invalid = implode($errors); 
    if ($invalid) {
      $message = '오류 해결하세요!!';
    } else {
      $message = '폼 잘 제출해서 감사합니다!';
    }
}
?>

<?php include 'includes/header.php'; ?>

<p><?= $message ?></p> <form action="validate-form.php" method="POST">
  Name: <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>">
  <span class="error"><?= $errors['name'] ?></span><br>
  
  Age: <input type="text" name="age" value="<?= htmlspecialchars($user['age']) ?>">
  <span class="error"><?= $errors['age'] ?></span><br>
  
  <input type="checkbox" name="terms" value="true" <?= $user['terms'] ? 'checked' : '' ?>>
  I agree to the terms and conditions
  <span class="error"><?= $errors['terms'] ?></span><br>
  
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>