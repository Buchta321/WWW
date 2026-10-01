<?php
require "header.php"
?>

    <section class="hero">
        <h1>Sbor dobrovolných hasičů</h1>
        <p>Vítejte na oficiálních stránkách hasičů ze Suchého Dolu. Sledujte naše zásahy, soutěže a kulturní dění v naší obci.</p>
        <a href="#novinky" class="btn">Poslední novinky</a>
        
        
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

    <section class="section" id="novinky">
        <div class="section-header">
            <h2>Nejnovější zprávy</h2>
            <a href="#" style="font-weight: 600; color: var(--gray);">Zobrazit vše &rarr;</a>
        </div>

        <div class="grid">
            <article class="card">
                <img src="obrazky/uvod.jpg" alt="Soutěž" class="card-img">
                <div class="card-content">
                    <span class="card-meta">Soutěže / 19. prosince 2025</span>
                    <h3 class="card-title">Soutěžní shrnutí roku 2025</h3>
                    <p class="card-desc">Rok 2025 se nám blíží ke konci. Dospěláci i děti odsoutěžili co mohli. V článku naleznete seznam soutěží, kterých jsme se zúčastnili...</p>
                    <a href="#" class="card-link">Číst dál &rarr;</a>
                </div>
            </article>

            <article class="card">
                <img src="https://images.unsplash.com/photo-1549451371-64aa98a6f660?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Ples" class="card-img">
                <div class="card-content">
                    <span class="card-meta">Kulturní akce / 18. listopadu 2025</span>
                    <h3 class="card-title">Hasičský ples 2025</h3>
                    <p class="card-desc">V sobotu 22. listopadu jsme pořádali tradiční hasičský ples. K tanci a poslechu hrála už třetím rokem oblíbená kapela...</p>
                    <a href="#" class="card-link">Číst dál &rarr;</a>
                </div>
            </article>

            <article class="card">
                <img src="https://images.unsplash.com/photo-1588665671190-72120e8a705b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Zásah" class="card-img">
                <div class="card-content">
                    <span class="card-meta">Okrsek Ostaš / 22. září 2025</span>
                    <h3 class="card-title">Imitace zásahu při požáru – Hlavňov</h3>
                    <p class="card-desc">V sobotu 4.10. 2025 jsme se zúčastnili speciální soutěže v Hlavňově, kde družstva imitují opravdový zásah při požáru...</p>
                    <a href="#" class="card-link">Číst dál &rarr;</a>
                </div>
            </article>
        </div>
    </section>

    <?php
require "footer.php"
?>