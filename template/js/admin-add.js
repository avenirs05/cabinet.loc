function ifAddBtnsClicked () {

    // Запись в бд
    // Добавление собственника (пользователя)
    $('#add-owner-send').click(function(e) {    
            e.preventDefault();         

            $.ajax({
                  url: '/add-owner',
                  data: 'name=' + $('#user-name').val().trim() + '&' +
                            'email=' + $('#user-email').val().trim() +  '&' +
                            'pass=' + $('#user-pass').val().trim() + '&' +
                            'phone=' + $('#user-phone').val().trim(),
                  type: 'post',
                  success: function(data) {
                        $('#user-name').val('');
                        $('#user-email').val('');
                        $('#user-pass').val('');
                        $('#user-phone').val('');
                        $('#owners-admin').click();
                  }
            });
    });

    // Добавление объекта
    $('#add-realty-send').click(function(e) {   
            e.preventDefault();         

            $.ajax({
                  url: '/add-realty',
                  data: 'name=' + $('#realty-name').val().trim() + '&' +
                            'userName=' + $('#add-realty-wrap .select-user option:selected').text().trim(),
                  type: 'post',
                  success: function(data) {
                        $('#realty-name').val('');
                        $('#realties-admin').click();
                  }
            });
    });

    // Добавление баланса
    $('#add-balance-send').click(function(e) {  
            e.preventDefault();         

            $.ajax({
                  url: '/add-balance',
                  data: 'date=' + $('#date-trans-admin').val().trim() + '&' +
                            'gotMoneyAdmin=' + $('#got-money-admin').val().trim() + '&' +
                            'gaveMoneyAdmin=' + $('#gave-money-admin').val().trim() + '&' +
                            'userName=' + $('#add-balance-wrap .select-user option:selected').text().trim() + '&' +
                            'comment=' + $('#comment-money-admin').val().trim(),
                  type: 'post',
                  success: function(data) {
                        //console.log(data);
                        $('#got-money-admin').val('');
                        $('#gave-money-admin').val('');
                        $('#comment-money-admin').val('');
                        $('#balance-admin').click();
                  }
            });
    });

    // Добавление общего расхода
    $('#add-expense-gen-send').click(function(e) {  
            e.preventDefault();         

            $.ajax({
                  url: '/add-expense-gen',
                  data: 'date=' + $('#date-exp-gen').val().trim() + '&' +
                            'good=' + $('#good-exp-gen').val().trim() + '&' +
                            'quantity=' + $('#quantity-exp-gen').val().trim() + '&' +
                            'price=' + $('#price-exp-gen').val().trim() + '&' +
                            'sum=' + $('#sum-exp-gen').val().trim() + '&' +
                            'source=' + $('#source-exp-gen').val().trim() + '&' +
                            'repEmail=' + $('#rep-email-exp-gen').val().trim() + '&' +
                            'comment=' + $('#comment-exp-gen').val().trim() + '&' +
                            'realtyName=' + $('#add-expense-gen-wrap .select-realties option:selected').text().trim(),
                  type: 'post',
                  success: function(data) {
                        $('#good-exp-gen').val('');
                        $('#price-exp-gen').val('');
                        $('#sum-exp-gen').val('');
                        $('#source-exp-gen').val('');
                        $('#rep-email-exp-gen').val('');
                        $('#comment-exp-gen').val('');
                        $('#expenses-gen-admin').click();
                  }
            });
    });


    // Добавление расхода собственника
    $('#add-expense-owner-send').click(function(e) {    
            e.preventDefault();         

            $.ajax({
                  url: '/add-expense-owner',
                  data: 'date=' + $('#date-exp-owner').val().trim() + '&' +
                            'good=' + $('#good-exp-owner').val().trim() + '&' +
                            'quantity=' + $('#quantity-exp-owner').val().trim() + '&' +
                            'price=' + $('#price-exp-owner').val().trim() + '&' +
                            'sum=' + $('#sum-exp-owner').val().trim() + '&' +
                            'source=' + $('#source-exp-owner').val().trim() + '&' +
                            'repEmail=' + $('#rep-email-exp-owner').val().trim() + '&' +
                            'comment=' + $('#comment-exp-owner').val().trim() + '&' +
                            'realtyName=' + $('#add-expense-owner-wrap .select-realties option:selected').text().trim(),
                  type: 'post',
                  success: function(data) {
                        $('#good-exp-owner').val('');
                        $('#price-exp-owner').val('');
                        $('#sum-exp-owner').val('');
                        $('#source-exp-owner').val('');
                        $('#rep-email-exp-owner').val('');
                        $('#comment-exp-owner').val('');
                        $('#expenses-owner-admin').click();
                  }
            });
    });


    // Добавление дохода
    $('#add-income-send').click(function(e) {   
            e.preventDefault();         

            $.ajax({
                  url: '/add-income',
                  data: 'date-arr=' + $('#date-arr-income').val().trim() + '&' +
                            'date-dep=' + $('#date-dep-income').val().trim() + '&' +
                            'price=' + $('#price-income').val().trim() + '&' +
                            'sum=' + $('#sum-income').val().trim() + '&' +
                            'comment=' + $('#comment-income').val().trim() + '&' +
                            'realtyName=' + $('#add-income-wrap .select-realties option:selected').text().trim(),
                  type: 'post',
                  success: function(data) {
                        console.log(data);
                        $('#price-income').val('');
                        $('#sum-income').val('');
                        $('#comment-income').val('');
                        $('#incomes-admin').click();
                  }
            });
    });

    $('#add-income').click(function() {
        $('#add-income-wrap').show();
        $('#add-income-wrap .select-realties-content').remove();

        $('#add-expense-owner-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-balance-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();

        $.ajax({
            url: '/get-realties-for-select',
            type: 'post',
            success: function(data) {
                $('#add-income-wrap form').prepend(data);
            }
        });

    });

    $('#add-expense-owner').click(function() {        
        $('#add-expense-owner-wrap').show();
        $('#add-expense-owner-wrap .select-realties-content').remove();

        $('#add-income-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-balance-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();

        $.ajax({
            url: '/get-realties-for-select',
            type: 'post',
            success: function(data) {
                $('#add-expense-owner-wrap form').prepend(data);
            }
        });
    });

    $('#add-expense-gen').click(function() {
        $('#add-expense-gen-wrap').show();
        $('#add-expense-gen-wrap .select-realties-content').remove();

        $('#add-expense-owner-wrap').hide();
        $('#add-income-wrap').hide();       
        $('#add-balance-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();

        $.ajax({
            url: '/get-realties-for-select',
            type: 'post',
            success: function(data) {
                $('#add-expense-gen-wrap form').prepend(data);
            }
        });
    });

    $('#add-balance').click(function() {
        $('#add-balance-wrap').show();
        $('#add-balance-wrap .select-user-content').remove();

        $('#add-expense-owner-wrap').hide();
        $('#add-income-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();

        $.ajax({
            url: '/get-users-for-select',
            type: 'post',
            success: function(data) {
                $('#add-balance-wrap .comment-content').before(data);
            }
        });
    });

    $('#add-realty').click(function() {

        $('#add-realty-wrap').show();
        $('#add-realty-wrap .select-user-content').remove();

        $('#add-expense-owner-wrap').hide();
        $('#add-income-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-balance-wrap').hide();
        $('#add-owner-wrap').hide();

        $.ajax({
            url: '/get-users-for-select',
            type: 'post',
            success: function(data) {
                $('#add-realty-wrap #add-realty-send').before(data);
            }
        });

    });

    $('#add-owner').click(function() {
        $('#add-owner-wrap').show();
        $('#add-expense-owner-wrap').hide();
        $('#add-income-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-balance-wrap').hide();
        $('#add-realty-wrap').hide();
    });

    $('.btn-cancel').click(function() {
        $(this).parent().parent().parent().parent().hide()
    });
}