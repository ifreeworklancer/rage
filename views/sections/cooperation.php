<!-- Cooperation -->
<section id="cooperation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <?= $cooperation['title']; ?>
                </h2>
                <div class="cooperation-slider">
                    <?php
                    foreach ($cooperation['item'] as $item) :
                        ?>
                        <div class="cooperation-item">
                            <a href="<?= $item['link']; ?>">
                                <img src="<?= $item['image']; ?>" alt="cooperation">
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="slider-arrow slider-arrow--cooperation">
                        <div class="slider-arrow-item slider-arrow-item--prev">
                            <svg width="10" height="15">
                                <use xlink:href="#arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next">
                            <svg width="10" height="15">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>