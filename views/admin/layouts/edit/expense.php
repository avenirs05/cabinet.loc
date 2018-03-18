<div id="expense-modal-edit" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Редактирование строки расхода <small>№</small> <span></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="fields-content">
          <div class="form-group select-realties-content">
            <label>Объект недвижимости</label>
            <select class="custom-select select-realties">
              <option class="current-realty" value="">все</option>
              <?php foreach ($realties as $realty): ?>
                  <option value="<?php echo $realty['id']; ?>">
                    <?php echo $realty['name']; ?>
                  </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Дата</label>
            <input id="expense-edit-date" type="text" class="date-field form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Товар (услуга)</label>
            <input id="expense-edit-good" type="text" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Количество</label>
            <input id="expense-edit-quantity" type="number" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Цена, €</label>
            <input id="expense-edit-price" type="number" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Сумма, €</label>
            <input id="expense-edit-sum" type="number" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Источник</label>
            <input id="expense-edit-source" type="text" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Отчет</label>
            <input id="expense-edit-report" type="text" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label>Комментарий</label>
            <input id="expense-edit-comment" type="text" class="form-control" placeholder="" required>
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