<?php
if (!file_exists(__DIR__ . '/../config/installed.flag')) {
    include __DIR__ . '/../config/setup.php';
    file_put_contents(__DIR__ . '/../config/installed.flag', 'ok');
}

header("Location: login.php");
exit();
?>

<?php include '../includes/header.php'; ?>

<div class="sub-bar">
  <div class="container-fluid d-flex align-items-center gap-2">
    <i class="bi bi-clipboard-check"></i>
    <span class="fw-semibold" id="dashboard">Dashboard</span>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>