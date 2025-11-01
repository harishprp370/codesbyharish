<?php
$pageTitle = 'Dashboard';
include 'includes/header.php';

// Fetch statistics
try {
    // Total visitors
    $totalVisitors = $pdo->query("SELECT COUNT(*) FROM visitor_logs")->fetchColumn();
    $todayVisitors = $pdo->query("SELECT COUNT(*) FROM visitor_logs WHERE DATE(visit_timestamp) = CURDATE()")->fetchColumn();
    
    // Total contacts
    $totalContacts = $pdo->query("SELECT COUNT(*) FROM contact_messages")->fetchColumn();
    $newContacts = $pdo->query("SELECT COUNT(*) FROM contact_messages WHERE status = 'new'")->fetchColumn();
    
    // Newsletter subscribers
    $totalSubscribers = $pdo->query("SELECT COUNT(*) FROM newsletter_subscriptions WHERE status = 'active'")->fetchColumn();
    
    // Recent visitors
    $recentVisitors = $pdo->query("SELECT * FROM visitor_logs ORDER BY visit_timestamp DESC LIMIT 10")->fetchAll();
    
    // Visitor stats for chart (last 7 days)
    $visitorStats = $pdo->query("
        SELECT DATE(visit_timestamp) as date, COUNT(*) as count 
        FROM visitor_logs 
        WHERE visit_timestamp >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
        GROUP BY DATE(visit_timestamp)
        ORDER BY date ASC
    ")->fetchAll();
    
} catch (PDOException $e) {
    error_log("Dashboard error: " . $e->getMessage());
}
?>

<div class="page-header">
    <h1 class="page-title">Dashboard</h1>
    <p class="page-subtitle">Welcome back, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</p>
</div>

<!-- Stats Grid -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon primary">
            <i class="fas fa-users"></i>
        </div>
        <div class="stat-details">
            <h3>Total Visitors</h3>
            <div class="stat-value"><?php echo number_format($totalVisitors); ?></div>
            <div class="stat-change up">
                <i class="fas fa-arrow-up"></i> <?php echo $todayVisitors; ?> today
            </div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon success">
            <i class="fas fa-envelope"></i>
        </div>
        <div class="stat-details">
            <h3>Contact Messages</h3>
            <div class="stat-value"><?php echo number_format($totalContacts); ?></div>
            <div class="stat-change <?php echo $newContacts > 0 ? 'up' : ''; ?>">
                <i class="fas fa-circle"></i> <?php echo $newContacts; ?> new
            </div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon warning">
            <i class="fas fa-newspaper"></i>
        </div>
        <div class="stat-details">
            <h3>Newsletter Subscribers</h3>
            <div class="stat-value"><?php echo number_format($totalSubscribers); ?></div>
            <div class="stat-change">Active subscriptions</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon danger">
            <i class="fas fa-chart-line"></i>
        </div>
        <div class="stat-details">
            <h3>Avg. Daily Visitors</h3>
            <div class="stat-value"><?php echo number_format($totalVisitors / max(1, 30)); ?></div>
            <div class="stat-change">Last 30 days</div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Visitor Analytics (Last 7 Days)</h2>
    </div>
    <div class="card-body">
        <div class="chart-container">
            <canvas id="visitorChart"></canvas>
        </div>
    </div>
</div>

<!-- Recent Visitors -->
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Recent Visitors</h2>
        <a href="visitors.php" class="btn btn-primary btn-sm">View All</a>
    </div>
    <div class="card-body">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Timestamp</th>
                        <th>IP Address</th>
                        <th>Page</th>
                        <th>Referrer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recentVisitors as $visitor): ?>
                    <tr>
                        <td><?php echo date('M d, Y H:i', strtotime($visitor['visit_timestamp'])); ?></td>
                        <td><?php echo htmlspecialchars($visitor['ip_address']); ?></td>
                        <td><?php echo htmlspecialchars($visitor['visited_page']); ?></td>
                        <td><?php echo htmlspecialchars(substr($visitor['referrer_url'], 0, 50)); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
// Visitor Chart
const ctx = document.getElementById('visitorChart').getContext('2d');
const visitorChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode(array_map(function($row) { return date('M d', strtotime($row['date'])); }, $visitorStats)); ?>,
        datasets: [{
            label: 'Visitors',
            data: <?php echo json_encode(array_column($visitorStats, 'count')); ?>,
            borderColor: '#2563eb',
            backgroundColor: 'rgba(37, 99, 235, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>

<?php include 'includes/footer.php'; ?>
