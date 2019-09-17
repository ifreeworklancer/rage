<!-- About -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-6 order-2 order-lg-1">
                <div class="about-item">
                    <h2 class="title">
                        <?= $about['title']; ?>
                    </h2>
                    <div class="description">
                        <p>
                            <?= $about['description']; ?>
                        </p>
                    </div>
                    <a href="#"
                       data-youtube="<?= getVideoLinkAttribute($about['video_link']); ?>"
                       class="btn btn-outline-primary btn-watch">
                        смотреть видео
                    </a>
                </div>
            </div>
            <div class="col-sm-10 col-lg-6 order-1 order-lg-2">
                <figure class="about-image" style="background-image: url('<?= $about['image']; ?>');"></figure>
            </div>
        </div>
    </div>
</section>