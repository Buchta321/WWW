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
    <div class="section-header">
        <h2>Chystané akce & Pozvánky</h2>
    </div>
   <section class="section" id="akce">
        <div class="section-header">
            <h2>Nadcházející akce</h2> 
        </div>

        <div class="grid">
            <?php 
            $dnes = date('Y-m-d');
            $mame_akci = false;

            foreach ($novinky as $clanek): 
                // Zobrazí pouze akce, jejichž datum je DNEŠNÍ nebo BUDOUCÍ
                if ($clanek['kategorie'] === 'akce' && isset($clanek['datum_akce']) && $clanek['datum_akce'] >= $dnes): 
                    $mame_akci = true;
            ?>
                <article class="card card-event">
                    <div class="event-badge-date">
                        📅 <?php echo htmlspecialchars($clanek['datum_akce_formatovane']); ?>
                    </div>
                    <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" alt="Plakát k akci" class="card-img">
                    <div class="card-content">
                        <span class="card-meta"><?php echo htmlspecialchars($clanek['kategorie_nazev']); ?></span>
                        <h3 class="card-title"><?php echo htmlspecialchars($clanek['nadpis']); ?></h3>
                        <p class="card-desc"><?php echo htmlspecialchars($clanek['popis']); ?></p>
                        <a href="clanek.php?id=<?php echo (int)$clanek['id']; ?>" class="card-link">Program & detaily &rarr;</a>
                    </div>
                </article>
            <?php 
                endif; 
            endforeach; 

            // Pokud aktuálně není naplánovaná žádná nová akce
            if (!$mame_akci): 
            ?>
                <p style="color: var(--gray); font-style: italic;">V nejbližší době neumísťujeme žádné plánované akce. Sledujte náš web pro nové informace!</p>
            <?php endif; ?>
        </div>
    </section>
    
</section>

    <section class="section" id="novinky">
        <div class="section-header">
            <h2>Nejnovější zprávy</h2> 
        </div>

        <div class="grid">
            <?php foreach ($novinky as $clanek): ?>
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