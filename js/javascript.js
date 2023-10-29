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

