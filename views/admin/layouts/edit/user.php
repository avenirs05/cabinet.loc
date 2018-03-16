<div id="user-modal-edit" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактирование данных собственника <span></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="fields-content">
          <div class="form-group">
            <label>Имя</label>
            <input id="user-name-edit" type="text" class="form-control" placeholder="Имя собственника" required>
          </div>
          <div class="form-group">
            <label>Email (логин)</label>
            <input id="user-email-edit" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email - логин от личного кабинета собственника" required>
          </div>
          <div class="form-group">
            <label>Пароль</label>
            <input id="user-pass-edit" type="text" class="form-control" placeholder="Пароль от личного кабинета собственника" required>
          </div>
          <div class="form-group">
            <label>Телефон</label>
            <input id="user-phone-edit" type="text" class="form-control" placeholder="Телефон собственника" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-edit-final">Сохранить</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
      </div>
    </div>
  </div>
</div>