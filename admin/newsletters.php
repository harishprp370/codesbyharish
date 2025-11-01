<?php
$pageTitle = 'Newsletter Subscribers';
include 'includes/header.php';

// Fetch all subscribers
try {
    $subscribers = $pdo->query("SELECT * FROM newsletter_subscriptions ORDER BY subscribed_at DESC")->fetchAll();
} catch (PDOException $e) {
    error_log("Newsletter page error: " . $e->getMessage());
    $subscribers = [];
}
?>

<div class="page-header">
    <h1 class="page-title">Newsletter Subscribers</h1>
    <p class="page-subtitle">Manage your email subscribers</p>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">All Subscribers (<?php echo count($subscribers); ?>)</h2>
    </div>
    <div class="card-body">
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Subscribed</th>
                        <th>Status</th>
                        <th>IP Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subscribers as $subscriber): ?>
                    <tr>
                        <td><?php echo $subscriber['id']; ?></td>
                        <td><?php echo htmlspecialchars($subscriber['email']); ?></td>
                        <td><?php echo htmlspecialchars($subscriber['name'] ?? 'N/A'); ?></td>
                        <td><?php echo date('M d, Y', strtotime($subscriber['subscribed_at'])); ?></td>
                        <td>
                            <span class="badge <?php echo $subscriber['status'] === 'active' ? 'success' : 'danger'; ?>">
                                <?php echo ucfirst($subscriber['status']); ?>
                            </span>
                        </td>
                        <td><?php echo htmlspecialchars($subscriber['ip_address'] ?? 'N/A'); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
