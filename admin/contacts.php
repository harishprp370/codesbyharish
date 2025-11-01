<?php
$pageTitle = 'Contact Messages';
include 'includes/header.php';

// Handle status updates
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $messageId = $_POST['message_id'];
    $newStatus = $_POST['status'];
    
    try {
        $stmt = $pdo->prepare("UPDATE contact_messages SET status = ? WHERE id = ?");
        $stmt->execute([$newStatus, $messageId]);
        $successMessage = "Message status updated successfully!";
    } catch (PDOException $e) {
        $errorMessage = "Error updating status: " . $e->getMessage();
    }
}

// Fetch all contacts
try {
    $contacts = $pdo->query("SELECT * FROM contact_messages ORDER BY created_at DESC")->fetchAll();
} catch (PDOException $e) {
    error_log("Contacts page error: " . $e->getMessage());
    $contacts = [];
}
?>

<div class="page-header">
    <h1 class="page-title">Contact Messages</h1>
    <p class="page-subtitle">Manage and respond to contact inquiries</p>
</div>

<?php if (isset($successMessage)): ?>
<div class="alert alert-success"><?php echo $successMessage; ?></div>
<?php endif; ?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">All Messages (<?php echo count($contacts); ?>)</h2>
    </div>
    <div class="card-body">
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?php echo $contact['id']; ?></td>
                        <td><?php echo date('M d, Y', strtotime($contact['created_at'])); ?></td>
                        <td><?php echo htmlspecialchars($contact['name']); ?></td>
                        <td><?php echo htmlspecialchars($contact['email']); ?></td>
                        <td><?php echo htmlspecialchars($contact['subject'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars(substr($contact['message'], 0, 50)); ?>...</td>
                        <td>
                            <span class="badge <?php 
                                echo $contact['status'] === 'new' ? 'warning' : 
                                     ($contact['status'] === 'read' ? 'info' : 
                                     ($contact['status'] === 'replied' ? 'success' : 'danger')); 
                            ?>">
                                <?php echo ucfirst($contact['status']); ?>
                            </span>
                        </td>
                        <td>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="message_id" value="<?php echo $contact['id']; ?>">
                                <select name="status" onchange="this.form.submit()" class="btn btn-sm">
                                    <option value="new" <?php echo $contact['status'] === 'new' ? 'selected' : ''; ?>>New</option>
                                    <option value="read" <?php echo $contact['status'] === 'read' ? 'selected' : ''; ?>>Read</option>
                                    <option value="replied" <?php echo $contact['status'] === 'replied' ? 'selected' : ''; ?>>Replied</option>
                                    <option value="archived" <?php echo $contact['status'] === 'archived' ? 'selected' : ''; ?>>Archived</option>
                                </select>
                                <input type="hidden" name="update_status" value="1">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
