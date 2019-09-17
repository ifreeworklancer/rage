<div class="custom-modal custom-modal--feedback">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h3 class="title">
            Свяжитесь с нами
        </h3>
    </div>
    <div class="custom-modal-body">
        <form action="../../mail-send.php" method="post">
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name" class="label-placeholder">
                        Ваше имя
                    </label>
                    <input type="text" name="user_name" id="user-name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-phone" class="label-placeholder">
                        Телеофн
                    </label>
                    <input type="tel" name="user_phone" id="user-phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-email" class="label-placeholder">
                        Email
                    </label>
                    <input type="email" name="user_email" id="user-email" class="form-control">
                </div>
                <button class="btn btn-primary">
                    Отправить
                </button>
            </div>
        </form>
    </div>
</div>

<div class="modal-mask"></div>