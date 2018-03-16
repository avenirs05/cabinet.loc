function ifAddBtnsClicked () {

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