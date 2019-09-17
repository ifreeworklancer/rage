<!-- Trainer -->
<section id="trainer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <div class="trainer-item">
                    <h4 class="subtitle">
                        <?= $trainer['subtitle']; ?>
                    </h4>
                    <h2 class="title">
                        <?= $trainer['title']; ?>
                    </h2>
                    <div class="trainer-advantages">
                        <?php
                        foreach ($trainer['advantages'] as $advantages_item) :
                            ?>
                            <div class="trainer-advantages-item">
                                <h5 class="trainer-advantages-item__title">
                                    <?= $advantages_item['title']; ?>
                                </h5>
                                <div class="trainer-advantages-item__description">
                                    <p>
                                        <?= $advantages_item['description']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="description">
                        <?= $trainer['description']; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-6 order-1 order-md-2">
                <figure class="trainer-image" style="background-image: url('<?= $trainer['image']; ?>');"></figure>
            </div>
        </div>
    </div>
</section>