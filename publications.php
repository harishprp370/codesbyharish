<?php
$pageTitle = "Publications";
$metaDescription = "Showcase of research papers and publications by Harish.";
include 'includes/header.php';
include 'includes/config.php';

// Fetch publications
try {
    $publications = $pdo->query("SELECT * FROM publications ORDER BY year DESC, created_at DESC")->fetchAll();
} catch (PDOException $e) {
    $publications = [];
    error_log("Publications fetch error: " . $e->getMessage());
}
?>

<style>
/* Publications Page Styles */
.publications-section {
    max-width: 1100px;
    margin: 120px auto 40px auto;
    padding: 0 1rem;
}
.publications-header {
    text-align: center;
    margin-bottom: 2.5rem;
}
.publications-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary-color, #2563eb);
    margin-bottom: 0.5rem;
}
.publications-subtitle {
    color: var(--text-secondary, #6b7280);
    font-size: 1.1rem;
}
.publications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 2rem;
}
.publication-card {
    background: var(--bg-primary, #fff);
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(37,99,235,0.07);
    padding: 2rem 1.5rem 1.5rem 1.5rem;
    position: relative;
    transition: box-shadow 0.2s, transform 0.2s;
    display: flex;
    flex-direction: column;
    min-height: 320px;
}
.publication-card:hover {
    box-shadow: 0 8px 32px rgba(37,99,235,0.13);
    transform: translateY(-4px) scale(1.02);
}
.publication-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--primary-color, #2563eb);
    margin-bottom: 0.5rem;
}
.publication-meta {
    font-size: 0.95rem;
    color: var(--text-secondary, #6b7280);
    margin-bottom: 0.5rem;
}
.publication-authors {
    font-size: 0.95rem;
    color: var(--secondary-color, #1e40af);
    margin-bottom: 0.5rem;
}
.publication-desc {
    font-size: 0.98rem;
    color: var(--text-primary, #1f2937);
    margin-bottom: 1rem;
    flex: 1;
}
.publication-link {
    display: inline-block;
    padding: 0.5rem 1.25rem;
    background: linear-gradient(90deg, #2563eb 60%, #1e40af 100%);
    color: #fff;
    border-radius: 8px;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.2s, box-shadow 0.2s;
    box-shadow: 0 2px 8px rgba(37,99,235,0.09);
}
.publication-link:hover {
    background: linear-gradient(90deg, #1e40af 60%, #2563eb 100%);
    box-shadow: 0 4px 16px rgba(37,99,235,0.15);
}
.publication-journal {
    font-size: 0.95rem;
    color: #374151;
    background: #f3f4f6;
    border-radius: 6px;
    padding: 0.2rem 0.7rem;
    display: inline-block;
    margin-bottom: 0.5rem;
}
.publication-year {
    font-size: 0.9rem;
    color: #6b7280;
    margin-left: 0.5rem;
}
@media (max-width: 600px) {
    .publications-title { font-size: 2rem; }
    .publications-grid { grid-template-columns: 1fr; }
    .publication-card { padding: 1.2rem; }
}
</style>

<section class="publications-section">
    <div class="publications-header">
        <h1 class="publications-title"><i class="fas fa-book-open"></i> Publications</h1>
        <div class="publications-subtitle">
            Explore my published research papers, journal articles, and conference works.
        </div>
    </div>
    <div class="publications-grid">
        <?php if (empty($publications)): ?>
            <div style="text-align:center; grid-column: 1/-1; color: #6b7280;">
                <i class="fas fa-info-circle"></i> No publications found.
            </div>
        <?php else: ?>
            <?php foreach ($publications as $pub): ?>
                <div class="publication-card">
                    <div class="publication-title"><?php echo htmlspecialchars($pub['title']); ?></div>
                    <div class="publication-meta">
                        <span class="publication-journal"><?php echo htmlspecialchars($pub['journal']); ?></span>
                        <?php if ($pub['volume']): ?>
                            <span>Vol. <?php echo htmlspecialchars($pub['volume']); ?></span>
                        <?php endif; ?>
                        <?php if ($pub['issue']): ?>
                            <span>Issue <?php echo htmlspecialchars($pub['issue']); ?></span>
                        <?php endif; ?>
                        <span class="publication-year"><?php echo htmlspecialchars($pub['year']); ?></span>
                    </div>
                    <div class="publication-authors">
                        <i class="fas fa-user-edit"></i>
                        <?php echo htmlspecialchars($pub['authors']); ?>
                    </div>
                    <?php if (!empty($pub['description'])): ?>
                        <div class="publication-desc"><?php echo htmlspecialchars($pub['description']); ?></div>
                    <?php endif; ?>
                    <?php if (!empty($pub['link'])): ?>
                        <a class="publication-link" href="<?php echo htmlspecialchars($pub['link']); ?>" target="_blank" rel="noopener">
                            <i class="fas fa-external-link-alt"></i> View Paper
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
