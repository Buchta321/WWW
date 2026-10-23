<?php
require "header.php";
require "data.php";
?>

    <section class="hero">
        <h1>Sbor dobrovolných hasičů</h1>
        <p>Vítejte na oficiálních stránkách hasičů ze Suchého Dolu. Sledujte naše soutěže a kulturní dění v naší obci.</p>
    
    </section>

    <div class="events-banner">
        <div class="event-item">
            <h3>Dospělí</h3>
            <p>Rok 2025 uzavřen!</p>
        </div>
        <div class="event-item">
            <h3>Mládež</h3>
            <p>24.1.2026 - Hasičský pětiboj</p>
        </div>
        <div class="event-item">
            <h3>Nepřehlédněte</h3>
            <p style="color: var(--primary);">TRAKTORIÁDA 2026 !!!!</p>
        </div>
    </div>
    <section class="section" id="pozvanky">
        
   <section class="section" id="akce">
        <div class="section-header">
            <h2>Nadcházející akce</h2> 
        </div>

        <div class="akce-container">
            <?php 
            $dnes = date('Y-m-d');
            $mame_akci = false;

            foreach (array_reverse($novinky) as $clanek): 
                if ($clanek['kategorie'] === 'akce' && isset($clanek['datum_akce']) && $clanek['datum_akce'] >= $dnes): 
                    $mame_akci = true;
            ?>
                <article class="poster-card">
                    <div class="poster-img-wrapper">
                        <span class="poster-badge">📅 <?php echo htmlspecialchars($clanek['datum_akce_formatovane']); ?></span>
                        <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" alt="Plakát k akci">
                    </div>
                    <div class="poster-content">
                        <span class="card-meta"><?php echo htmlspecialchars($clanek['kategorie_nazev']); ?></span>
                        <h3 class="poster-title"><?php echo htmlspecialchars($clanek['nadpis']); ?></h3>
                        <p class="poster-desc"><?php echo htmlspecialchars($clanek['popis']); ?></p>
                        <a href="clanek.php?id=<?php echo (int)$clanek['id']; ?>" class="btn">Více informací & program &rarr;</a>
                    </div>
                </article>
            <?php 
                endif; 
            endforeach; 

            if (!$mame_akci): 
            ?>
                <p style="color: var(--gray); font-style: italic; text-align: center;">V nejbližší době neplánujeme žádnou akci. Sledujte náš web pro nové informace!</p>
            <?php endif; ?>
        </div>
    </section>
    
</section>

    <section class="section" id="novinky">
        <div class="section-header">
            <h2>Nejnovější zprávy</h2> 
        </div>

        <div class="grid">
            <?php foreach (array_reverse($novinky) as $clanek): ?>
                <!-- POKUD ČLÁNEK NENÍ KATEGORIE HISTORIE, ZOBRAZ HO -->
                <?php if ($clanek['kategorie'] !== 'historie'): ?>
                <article class="card">
                    <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" alt="Obrázek k článku" class="card-img">
                    <div class="card-content">
                        <span class="card-meta"><?php echo htmlspecialchars($clanek['kategorie_nazev']); ?> / <?php echo htmlspecialchars($clanek['datum']); ?></span>
                        <h3 class="card-title"><?php echo htmlspecialchars($clanek['nadpis']); ?></h3>
                        <p class="card-desc"><?php echo htmlspecialchars($clanek['popis']); ?></p>
                        <a href="clanek.php?id=<?php echo (int)$clanek['id']; ?>" class="card-link">Číst dál &rarr;</a>
                    </div>
                </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

<?php
require "footer.php";
?>