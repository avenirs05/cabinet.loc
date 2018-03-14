function hideAddFields () {
    $('#add-owner-wrap').hide();
    $('#add-expense-owner-wrap').hide();
    $('#add-income-wrap').hide();
    $('#add-expense-gen-wrap').hide();
    $('#add-balance-wrap').hide();
    $('#add-realty-wrap').hide();
}

function IfAddBtnsClicked () {

    $('#add-income').click(function() {
        $('#add-income-wrap').show();
        $('#add-expense-owner-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-balance-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();
    });

    $('#add-expense-owner').click(function() {        
        $('#add-expense-owner-wrap').show();
        $('#add-income-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-balance-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();
    });

    $('#add-expense-gen').click(function() {
        $('#add-expense-gen-wrap').show();
        $('#add-expense-owner-wrap').hide();
        $('#add-income-wrap').hide();       
        $('#add-balance-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();
    });

    $('#add-balance').click(function() {
        $('#add-balance-wrap').show();
        $('#add-expense-owner-wrap').hide();
        $('#add-income-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-realty-wrap').hide();
        $('#add-owner-wrap').hide();
    });

    $('#add-realty').click(function() {
        $('#add-realty-wrap').show();
        $('#add-expense-owner-wrap').hide();
        $('#add-income-wrap').hide();
        $('#add-expense-gen-wrap').hide();
        $('#add-balance-wrap').hide();
        $('#add-owner-wrap').hide();
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

function hideElemsIfRealtiesOrOwnersClicked () {
    $('.select-realty-content').hide();
    $('.select-owner-content').hide();
    $('#ob-nedv-text').hide();
    $('#zapyataya').hide();
    $('#sobstv-text').hide();
    $('#which-owner').hide();
    $('#which-realty').text('');
}


function hideElemsIfBalanceClicked() {
    $('.select-realty-content').hide();
    $('#ob-nedv-text').hide();
    $('#zapyataya').hide();             
    $('#which-realty').text('');
}


// Когда нажат отчет, появляются некоторые элементы
function showElemsIfReportClicked() {
    $('.select-realty-content, .select-owner-content').show();
    $('#ob-nedv-text').show();
    $('#zapyataya').show();
    $('#sobstv-text').show();
    $('#which-owner').show();
}


// Формирует заголовок в зависмимотси от выбранного объекта недвижимости
function getHeaderOfRepIfSelectRealties() {
    $('.select-realty-wrap #select-realties').children().each(function(indx, el) {
        var realty = null;            

        if ( $(el).prop('selected') ) { 
              realty = $(el).text().trim();   
              $('#which-realty').text(realty);        
              return false;
        }   
    }); 
}


// Формирует заголовок в зависмимотси от выбранного собственника
function getHeaderOfRepIfSelectOwners() {
  $('.select-realty-wrap #select-owners').children().each(function(indx, el) {
      var owner = null;           

      if ( $(el).prop('selected') ) {
            owner = $(el).text().trim();

            $('#which-owner').text(owner);                     
            return false;
      }
  });  
}


// Подсвечивает нужным цветом кликнутую (ховерную) ссылку
function colorClickedHoverEl (selector, colorDefault, colorClicked, colorHover, clickedElDefault) {
    var clickedLink = $(clickedElDefault).text();

    $(selector).click(function(e) {
        e.preventDefault();
        clickedLink = $(this).text();

        $(this).css('color', colorClicked);
        var textOfThis = $(this).text();

        $(selector).each(function(indx, el) {
            if ( $(el).text() !== textOfThis ) {
                  $(el).css('color', colorDefault);
            }
        });

    });


    $(selector).mouseover(function(e) {
        e.preventDefault();
        $(this).css('color', colorHover);
    });


    $(selector).mouseout(function(e) {
        e.preventDefault();
        
        if ( $(this).text() == clickedLink ) {
              $(this).css('color', colorClicked);
        } else $(this).css('color', colorDefault);
    });
}


// Подсвечивание суммы "Баланс"
function whichColorForBalance () {
    var sum = Number( $('#balance-sum-text').text() );

    if (sum < 0) {
        $('#balance-sum-text, #sign-evro-text').addClass('text-danger');
    } 
    
    if (sum > 0) {
        $('#balance-sum-text, #sign-evro-text').addClass('text-success');
    } 
}


// Удаляет -0 и 0 в таблице взаиморасчетов (баланс)
function delZeroInTable () {
    $('.gave-money').each(function(indx, el) {
        if ( $(el).text() === '-0' ) {
                $(el).text('');
        }
    });

    $('.got-money').each(function(indx, el) {
        if ( $(el).text() === '0' ) {
                $(el).text('');
        }
    });

    $('.report-email').each(function(indx, el) {
        if ( $(el).text() === '0000-00-00' ) {
                $(el).text('');
        }
    });

    // console.log($('.report-email').text())
    // //console.log('ddd');
    // if ( $('.report-email').text().trim() == '0000-00-00') {
    //       $('.report-email').text('');
    // }
    
}


// Возвращает случайное число
function random () {  
    return Math.floor(Math.random() * 10000000000000);
}


// Разделяет группы разрядов числа
function separateThousands (num) {
    num = String(num);
    num = unSeparateThousands(num); 

    if (num.length == 3) {
        return num;
    }

    switch(num.length) {
      case 4:
        num = num[0] + ' ' + num[1] + num[2] + num[3]; 
      break;  
      
      case 5:
        num = num[0] + num[1] + ' ' + num[2] + num[3] + num[4]; 
      break; 
      
      case 6:
        num = num[0] + num[1] + num[2] + ' ' + num[3] + num[4] + num[5]; 
      break; 
      
      case 7:
        num = num[0] + ' ' + 
              num[1] + num[2] + num[3] + ' ' +
              num[4] + num[5] + num[6];
      break; 
      
      case 8:
        num = num[0] + num[1] + ' ' + 
              num[2] + num[3] + num[4] + ' ' +
              num[5] + num[6] + num[7];
      break; 
      
      case 9:
        num = num[0] + num[1] + num[2] + ' ' + 
              num[3] + num[4] + num[5] + ' ' +
              num[6] + num[7] + num[8];
      break; 
      
      case 10:
        num = num[0] + ' ' + 
              num[1] + num[2] + num[3] + ' ' +
              num[4] + num[5] + num[6] + ' ' +
              num[7] + num[8] + num[9];
      break; 
      
      case 11:
        num = num[0] + num[1] + ' ' + 
              num[2] + num[3] + num[4] + ' ' +
              num[5] + num[6] + num[7] + ' ' +
              num[8] + num[9] + num[10];
      break; 
    }

    return num;
}


// Убирает группы разрядов, оставляет (возвращает) строку
function unSeparateThousands (str) {
    var res = '';
    
    for (var i = 0; i < str.length; i++) {
          if (str[i] === ' ') {
                continue;
          }
          
          res += str[i];
    }
    
    return res;
}


// Убирает группы разрядов, оставляет возвращает число
function unSeparateThousandsAndToNum (str) {
    str = str.replace(/\s+/g,'');     
    return Number(str);
}


// Удаляет " руб.", затем удаляет пробелы и к числу
function delRubTextAndToNum (str) {
    str = str.replace(' руб.','');     
    str = unSeparateThousandsAndToNum(str)
    return Number(str);
}










