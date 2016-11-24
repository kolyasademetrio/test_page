$(document).ready(function(){

    /*------------------ функция для validate ------------------*/
    $('#form').validate({
        rules: {
            name: {
                required: true,
                maxlength: 100
            },
            email: {
                required: true,
                maxlength: 100,
                email: true
            },
            phone: {
                required: true,
                maxlength: 20
            },
            message: {
                required: false,
                maxlength: 1000
            }
        },
        messages: {
            name: {
                required: "Поле обязательное для заполнения",
                maxlength: "Имя не должно содержать больше 100 символов"
            },
            email: {
                required: "Поле обязательное для заполнения",
                maxlength: "E-mail не должен содержать больше 100 символов",
                email: "Введите корректный e-mail адрес"
            },
            phone: {
                required: "Поле обязательное для заполнения",
                maxlength: "Номер телефона не должен содержать больше 20 символов"
            },
            message: {
                required: "Поле обязательное для заполнения",
                maxlength: "Сообщение не должно содержать больше 1000 символов"
            }
        }
    });
    /*------------------ функция для validate Конец -------------------*/ 


    /*----------------------- функция для mask ------------------------*/
    $('input.popup__inputText[name="phone"]').mask("+380(99)999-99-99");
    /*----------------------- функция для mask End --------------------*/
}); 