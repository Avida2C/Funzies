function buttonSwitch(btnClicked){
    if(btnClicked == "login"){
        $(".btnLogin").css("display","none"); 
       $(".btnRegister").css("display","");   
    }
    else{
       $(".btnLogin").css("display",""); 
       $(".btnRegister").css("display","none");
    }
}

$(document).ready(function() {
    $(".quantity-button").click(function() {
        let $input = $(this).siblings(".quantity-input");
        let value = parseInt($input.val(), 10);
        
        if ($(this).hasClass("increment-btn") && value < 99) {
            $input.val(value + 1);
        } else if ($(this).hasClass("decrement-btn") && value > 1) {
            $input.val(value - 1);
        }
    });
});