<?php
require "header.php";
require "data.php";
?>
<section class="section">
    <div class="section-header">
        <h2>Kulturní akce</h2>
    </div>

    <div class="grid">
        <?php 
        $nalezeno = false;
        foreach ($novinky as $clanek): 
            if ($clanek['kategorie'] === 'kulturniAkce'): 
                $nalezeno = true;
        ?>
            <article class="card">
                <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" alt="<?php echo htmlspecialchars($clanek['nadpis']); ?>" class="card-img">
                <div class="card-content">
                    <span class="card-meta"><?php echo htmlspecialchars($clanek['kategorie_nazev']); ?> / <?php echo htmlspecialchars($clanek['datum']); ?></span>
                    <h3 class="card-title"><?php echo htmlspecialchars($clanek['nadpis']); ?></h3>
                    <p class="card-desc"><?php echo htmlspecialchars($clanek['popis']); ?></p>
                    <a href="clanek.php?id=<?php echo (int)$clanek['id']; ?>" class="card-link">Číst dál &rarr;</a>
                </div>
            </article>
        <?php 
            endif;
        endforeach; 

        if (!$nalezeno): 
        ?>
            <p>V této kategorii zatím nejsou žádné články.</p>
        <?php endif; ?>
    </div>
</section>



<?php
require "footer.php";
?>