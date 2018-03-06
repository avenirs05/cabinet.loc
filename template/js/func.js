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










