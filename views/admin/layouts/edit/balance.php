<div id="balance-modal-edit" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактирование транзакции <small>№</small> <span></span>?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="fields-content">
          <div class="form-group">
            <label>Дата</label>
            <input id="balance-date-edit" type="text" class="date-field form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Получил, €</label>
            <input id="balance-got-edit" type="number" class="form-control" placeholder="" value="0" required>
          </div>
          <div class="form-group">
            <label>Отдал, €</label>
            <input id="balance-gave-edit" type="number" class="form-control" placeholder="" value="0" required>
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
          <div class="form-group">
            <label>Комментарий</label>
            <input id="balance-comment-edit" type="text" class="form-control" placeholder="" required>
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