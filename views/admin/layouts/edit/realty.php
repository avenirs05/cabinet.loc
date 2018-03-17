<div id="realty-modal-edit" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактирование данных объекта <span></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="fields-content">
          <div class="form-group">
            <label>Название объекта</label>
            <input id="realty-name-edit" type="text" class="form-control" placeholder="Введите название объекта недвижимости" required>
          </div>
          <div class="form-group select-user-content">
            <label>Собственник</label>
            <select class="custom-select select-user">
              <option class="current-user" value="">Выберите собственника</option>
              <?php foreach ($users as $user): ?>
                <option value="<?php echo $user['id']; ?>">
                  <?php echo $user['name']; ?>
                </option>
              <?php endforeach; ?>
            </select>
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