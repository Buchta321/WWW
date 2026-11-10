<?php
require "header-traktoriada.php";
require "data.php";
?>

<section class="section" id="kategorie">
    <div class="section-header">
        <h2>Informace a soutěžní kategorie</h2>
    </div>

    <div class="grid">
    <?php 
    $mame_clanek = false;

    foreach (array_reverse($novinky) as $clanek): 
        if (isset($clanek['kategorie']) && $clanek['kategorie'] === 'traktoriada'): 
            $mame_clanek = true;
    ?>
        <article class="card">
            <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" alt="<?php echo htmlspecialchars($clanek['nadpis']); ?>" class="card-img">
            <div class="card-content">
                <span class="card-meta"><?php echo htmlspecialchars($clanek['kategorie_nazev']); ?></span>
                <h3 class="card-title"><?php echo htmlspecialchars($clanek['nadpis']); ?></h3>
                <p class="card-desc"><?php echo htmlspecialchars($clanek['popis']); ?></p>
                <a href="clanek.php?id=<?php echo (int)$clanek['id']; ?>&z=traktoriada" class="card-link">Číst dál &rarr;</a>
            </div>
        </article>
    <?php 
        endif; 
    endforeach; 

    if (!$mame_clanek): 
    ?>
        <p style="color: var(--gray); font-style: italic; text-align: center; grid-column: 1 / -1;">Zatím zde nejsou žádné články k Traktoriádě.</p>
    <?php endif; ?>
    </div>
</section>

<?php
require "footer-traktoriada.php";
?>