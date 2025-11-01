<?php
$pageTitle = 'Visitor Logs';
include 'includes/header.php';

// Fetch all visitors
try {
    $visitors = $pdo->query("SELECT * FROM visitor_logs ORDER BY visit_timestamp DESC")->fetchAll();
} catch (PDOException $e) {
    error_log("Visitors page error: " . $e->getMessage());
    $visitors = [];
}
?>

<div class="page-header">
    <h1 class="page-title">Visitor Logs</h1>
    <p class="page-subtitle">Track and analyze website visitors</p>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">All Visitors (<?php echo count($visitors); ?>)</h2>
    </div>
    <div class="card-body">
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Timestamp</th>
                        <th>IP Address</th>
                        <th>Page Visited</th>
                        <th>Referrer</th>
                        <th>Browser</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($visitors as $visitor): ?>
                    <tr>
                        <td><?php echo $visitor['id']; ?></td>
                        <td><?php echo date('Y-m-d H:i:s', strtotime($visitor['visit_timestamp'])); ?></td>
                        <td><?php echo htmlspecialchars($visitor['ip_address']); ?></td>
                        <td><?php echo htmlspecialchars($visitor['visited_page']); ?></td>
                        <td><?php echo htmlspecialchars(substr($visitor['referrer_url'], 0, 40)); ?>...</td>
                        <td><?php echo htmlspecialchars(substr($visitor['user_agent'], 0, 40)); ?>...</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
