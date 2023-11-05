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
        let $input = $(this).siblings("input");
        let value = parseInt($input.val(), 10);
        
        if ($(this).attr("id") === "increment" && value < 99) {
            $input.val(value + 1);
        } else if ($(this).attr("id") === "decrement" && value > 1) {
            $input.val(value - 1);
        }
    });
});