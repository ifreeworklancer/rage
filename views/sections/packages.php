<!-- Packages -->
<section id="packages" style="background-image: url('<?= $packages['image_bg']; ?>');">
    <div class="decor-bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    <?= $packages['title']; ?>
                </h2>
            </div>
            <?php
            $count = 0;
            foreach ($packages['item'] as $item) :
                $count++;
                ?>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="package-item<?php if ($count % 2 === 0) echo ' package-item--secondary' ?> ">
                        <div class="content">
                            <div class="content-row">
                                <div class="decor-left"></div>
                                <div class="decor-right"></div>
                                <h3 class="title">
                                    <?= $item['title']; ?>
                                </h3>
                            </div>
                            <div class="content-row content-row--data">
                                <div class="decor-left"></div>
                                <div class="decor-right"></div>
                                <?php
                                foreach ($item['data'] as $data) :
                                    ?>
                                    <div class="data-wrapper">
                                        <?php
                                        foreach ($data as $val) :
                                            ?>
                                            <div class="data-item">
                                                <div>
                                                    <div class="data-item-title">
                                                        <?= $val['title']; ?>
                                                    </div>
                                                    <div class="data-item-description">
                                                        <?= $val['description']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="content-row">
                                <div class="decor-left"></div>
                                <div class="decor-right"></div>
                                <div class="description">
                                    <p>
                                        <?= $item['description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12 mt-5">
                <div class="package-description text-center">
                    <p>
                        <?= $packages['description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>