<!-- Intro -->
<section id="intro">
    <div class="video-container" data-src="/video/intro-video.mp4"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-sm-10 col-lg-7 col-xl-6">
                <div class="intro-item">
                    <h1 class="title">
                        <?= $intro['title']; ?>
                    </h1>
                    <div class="description">
                        <p>
                            <?= $intro['description']; ?>
                        </p>
                    </div>

                    <a href="#" class="btn btn-primary open-feedback">
                        связаться
                    </a>
                </div>
            </div>
        </div>
    </div>
    <ul class="social-list">
        <li>
            Мы в соц.сетях
        </li>
        <li>
            <a href="<?= $facebook; ?>">
                <svg width="15" height="15">
                    <use xlink:href="#facebook-icon"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="<?= $instagram; ?>">
                <svg width="15" height="15">
                    <use xlink:href="#instagram-icon"></use>
                </svg>
            </a>
        </li>
    </ul>
    <a href="#about" class="scroll-down scroll-link d-none d-sm-block">
        <div class="scroll-down__text">
            скролл вниз
        </div>
        <div class="scroll-down__icon"></div>
    </a>
</section>
