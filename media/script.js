$(function(){

    var field = new Array("message", "username", "email", "password", "password_confirm");

    $("form").submit(function() {
        var error=0;
        var pas1 = $("#pas1").val();
        var pas2 = $("#pas2").val();
        $("form").find(":input").each(function() {
            for(var i=0;i<field.length;i++){
                if($(this).attr("name")==field[i]){

                    if(!$(this).val().trim()){
                        $(this).css('border', 'red 1px solid');
                        error=1;
                        if($(this).attr("name")=="message") error=2;
                    }
                    else{
                        $(this).css('border', 'gray 1px solid');
                    }

                    if($(this).attr("name")=="email")
                        if(!isValidEmailAddress($(this).val())){
                            error=3;
                        }
                    if($(this).attr("name")=="password_confirm")
                    if (pas1.length < 10) error=5;

                }
            }

        })

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }

        if(pas1!=pas2){
            error=4;
            $("#pas1").css('border', 'red 1px solid');
            $("#pas2").css('border', 'red 1px solid');
        }

        if(error==0){
            return true;
        }
        else{
            if(error==5) var err_text = "Длинна пароля меньше 10 символов";
            if(error==4) var err_text = "Пароли не совпадают";
            if(error==3) var err_text = "Проверьте email";
            if(error==2) var err_text = "Введи верные данные: Сообщение не может быть пустым";
            if(error==1) var err_text = "Проверьте введенные данные";
            $(".messenger").html(err_text);
            $(".messenger").fadeIn("slow");
            return false;
        }



    })
});

