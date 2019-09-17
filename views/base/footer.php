<!-- Contacts -->
<section id="contacts">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-xl-4 order-2 order-lg-1">
                <div class="contacts-wrapper">
                    <h2 class="section-title">
                        Контактная
                        информациия
                    </h2>
                    <ul class="contacts-list">
                        <li class="contacts-item">
                            <div class="title">
                                телефон
                            </div>
                            <a href="tel:+<?= phone_link($phone); ?>">
                                <?= $phone; ?>
                            </a>
                        </li>
                        <li class="contacts-item">
                            <div class="title">
                                адресс
                            </div>
                            <a href="<?= $address_link; ?>">
                                <?= $address; ?>
                            </a>
                        </li>
                        <li class="contacts-item">
                            <div class="title">
                                email
                            </div>
                            <a href="mailto:<?= $email; ?>">
                                <?= $email; ?>
                            </a>
                        </li>
                        <li class="contacts-item">
                            <div class="title">
                                Соц.сети
                            </div>
                            <div class="d-flex">
                                <a href="#">
                                    <svg width="15" height="15">
                                        <use xlink:href="#facebook-icon"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="15" height="15">
                                        <use xlink:href="#instagram-icon"></use>
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 order-1 order-lg-2">
                <div class="map-contacts">
                    <div class="map-mask">
                        Нажмите для использования карты
                    </div>
                    <div id="contacts-map" data-long="<?= $mapLong ?>" data-lang="<?= $mapLang; ?>"
                         data-icon="<?= $mapIcon; ?>"></div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="footer-copyright">
                    Copyright © <?= date('Y'); ?> All Right Reserve
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>