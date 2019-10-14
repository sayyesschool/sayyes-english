jQuery(function() {
    'use strict';

    window.crm = {
        addStudyRequest: function(data) {
            return $.ajax({
                type: 'GET',
                url: 'https://sayes.t8s.ru/StudyRequest/Add',
                data: {
                    type: data.type || 'Заявка на обучение',
                    fullName: data.name,
                    phone: data.phone,
                    eMail: data.email,
                    description: data.description
                },
                crossDomain: true,
                dataType: 'jsonp'
            }).done(function(result) {
                console.log('Result', result)
                if (result.errorType) {
                    console.error('Ошибка. Тип: ' + result.errorType + ' Сообщение: ' + result.errorMessage);
                } else  {
                    console.log('Успешно: ' + result.id);
                }
            }).fail(function(error) {
                console.error('Ошибка: ' + error.statusText + ' (' + error.readyState + ', ' + error.status + ', ' + error.responseText + ')');
            }).always(function() {

            });
        }
    };
});