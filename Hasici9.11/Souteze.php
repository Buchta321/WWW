<?php
require "header.php";
require "data.php";
?>

<section class="section">
    <div class="souteze-layout">
        
        <!-- Levý sloupec: DOSPĚLÍ -->
        <div class="souteze-col">
            <div class="section-header">
                <h2>Soutěže – Dospělí</h2>
            </div>
            <div class="souteze-cards">
                <?php 
                $nalezeno_dospeli = false;
                foreach ($novinky as $clanek): 
                    if ($clanek['kategorie'] === 'souteze-dospeli'): 
                        $nalezeno_dospeli = true;
                ?>
                    <article class="card">
                        <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" alt="<?php echo htmlspecialchars($clanek['nadpis']); ?>" class="card-img">
                        <div class="card-content">
                            <span class="card-meta"><?php echo htmlspecialchars($clanek['datum']); ?></span>
                            <h3 class="card-title"><?php echo htmlspecialchars($clanek['nadpis']); ?></h3>
                            <p class="card-desc"><?php echo htmlspecialchars($clanek['popis']); ?></p>
                            <a href="clanek.php?id=<?php echo (int)$clanek['id']; ?>" class="card-link">Číst dál &rarr;</a>
                        </div>
                    </article>
                <?php 
                    endif;
                endforeach; 

                if (!$nalezeno_dospeli): 
                ?>
                    <p style="color: var(--gray); italic;">V kategorii dospělých zatím nejsou žádné články.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Pravý sloupec: MLÁDEŽ -->
        <div class="souteze-col">
            <div class="section-header">
                <h2>Soutěže – Mládež</h2>
            </div>
            <div class="souteze-cards">
                <?php 
                $nalezeno_mladez = false;
                foreach ($novinky as $clanek): 
                    if ($clanek['kategorie'] === 'souteze-mladez'): 
                        $nalezeno_mladez = true;
                ?>
                    <article class="card">
                        <img src="<?php echo htmlspecialchars($clanek['obrazek']); ?>" alt="<?php echo htmlspecialchars($clanek['nadpis']); ?>" class="card-img">
                        <div class="card-content">
                            <span class="card-meta"><?php echo htmlspecialchars($clanek['datum']); ?></span>
                            <h3 class="card-title"><?php echo htmlspecialchars($clanek['nadpis']); ?></h3>
                            <p class="card-desc"><?php echo htmlspecialchars($clanek['popis']); ?></p>
                            <a href="clanek.php?id=<?php echo (int)$clanek['id']; ?>" class="card-link">Číst dál &rarr;</a>
                        </div>
                    </article>
                <?php 
                    endif;
                endforeach; 

                if (!$nalezeno_mladez): 
                ?>
                    <p style="color: var(--gray); italic;">V kategorii mládeže zatím nejsou žádné články.</p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>

<?php
require "footer.php";
?>