<?php
require 'includes/db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<?php require 'includes/header.php'; ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
        </div>
        <div class="card-body">
            <p>This is your dashboard. You are successfully logged in.</p>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>