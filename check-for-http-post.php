<?php include 'includes/header.php'; ?>

<?php
//check-for-http-post_TODO.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $term = $_POST['term'] ?? '';
    echo 'You searched for ' . htmlspecialchars($term);
} else { ?>
    <form action="check-for-http-post.php" method="POST">
        Search for: <input type="search" name="term" />
        <input type="submit" value="search" placeholder="검색..." />
    </form> 
    <?php } ?>

<?php include 'includes/footer.php'; ?>