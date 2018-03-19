jQuery(document).ready(function () {  

		// Маска ввода
		$(".date-field").mask("99.99.2018");

		// Добавление записей
		ifAddBtnsClicked();

		// Удаление записей
		ifDelBtnsClicked();

		// Чтение записей
		ifReadBtnsClicked();

		// Редактирование записей
		ifEditBtnsClicked();

		// Нужные цвета у ссылок (кнопок) в навигационном меню
		colorClickedHoverEl('.navbar-brand', 'rgb(255, 255, 255)', 'rgb(204, 255, 204)', 'rgb(255, 255, 0)', '#incomes-admin');

});