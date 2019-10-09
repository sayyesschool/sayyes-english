jQuery(function() {
    'use strict';

    window.crm = {
        addStudyRequest(name, phone, type, firstCommunicationType) {
            return $.ajax({
                type: 'GET',
                
                crossDomain: true,

                url: 'https://sayes.t8s.ru/Api/V1/AddStudyRequest',

                dataType: 'jsonp',
                
                data: {
                    id: null, // Идентификатор заявки (используется только для обновления существующей заявки)
                    type: type || 'Заявка на обучение', // Тип заявки
                    firstCommunicationType: firstCommunicationType || 'Заявка с сайта', // Тип обращения
                    fullName: name,
                    phone: phone,
                    deleted: false // Если true, заявка создаётся сразу как удалённая и помещается в архив заявок
                },
                
                success: function(result) {
                    if (result.errorType) {
                        console.error('Ошибка. Тип: ' + result.errorType + ' Сообщение: ' + result.errorMessage);
                    } else  {
                        console.log('Успешно: ' + result.id);
                    }
                },

                error: function(jqXhr) {
                    console.error('Ошибка: ' + jqXhr.statusText + ' (' + jqXhr.readyState + ', ' + jqXhr.status + ', ' + jqXhr.responseText + ')');
                }
            });
        }
    };
});