<?php
require "header.php";
require "data.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!isset($novinky[$id])) {
    echo '<section class="section"><h2>Článek nebyl nalezen!</h2><p><a href="index.php">Zpět na hlavní stránku</a></p></section>';
    require "footer.php";
    exit;
}

$clanek = $novinky[$id];
?>

<section class="section">
    <a href="javascript:history.back()" style="display: inline-block; margin-bottom: 1.5rem; font-weight: 600; color: var(--gray);">&larr; Zpět</a>
    
    <article class="article-detail" style="background: var(--white); padding: 2rem; border-radius: var(--radius); box-shadow: var(--shadow);">
        <span class="card-meta"><?php echo htmlspecialchars($clanek['kategorie_nazev']); ?> / <?php echo htmlspecialchars($clanek['datum']); ?></span>
        <h1 style="font-size: 2.5rem; margin: 0.5rem 0 1.5rem; color: var(--dark);"><?php echo htmlspecialchars($clanek['nadpis']); ?></h1>
        
        <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" 
     alt="<?php echo htmlspecialchars($clanek['nadpis']); ?>" 
     style="width: 100%; max-height: 450px; object-fit: cover; border-radius: var(--radius); margin-bottom: 2rem; <?php echo isset($clanek['obrazek_style']) ? $clanek['obrazek_style'] : ''; ?>">
        
        <div class="article-body" style="font-size: 1.1rem; line-height: 1.8; color: #333;">
            <?php echo $clanek['obsah']; ?>
        </div>
    </article>
</section>

<?php
require "footer.php";
?>