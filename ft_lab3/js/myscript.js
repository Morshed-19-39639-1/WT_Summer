function Fname(){
    var Fname=document.getElementById("fname").value;
    var letters = /^[A-Za-z]+$/
    if(Fname.match(letters)){
        document.getElementById("Fname").innerHTML="good";
        return true;
    }else if(Fname.length<1){
        document.getElementById("Fname").innerHTML="enter name";

    }else{
        document.getElementById("Fname").innerHTML="only character";
        return false;
    }

}

function Lname(){
    var Lname=document.getElementById("lname").value;
    var letters = /^[A-Za-z]+$/
    if(Lname.match(letters)){
        document.getElementById("Lname").innerHTML="good";
        return true;
    }else if(Lname.length<1){
        document.getElementById("Lname").innerHTML="enter name";

    }else{
        document.getElementById("Lname").innerHTML="only character";
        return false;
    }

}
function Age(){
    var Age=document.getElementById("age").value;
    var pattern= /^[0-9]+$/;
    if(Age.match(pattern)){
        document.getElementById("Age").innerHTML="";
        return true;
    }else if(Age.length<1){
        document.getElementById("Age").innerHTML="enter age";
    }else{
        document.getElementById("Age").innerHTML="numbers only";
        return false;
    }
}

function Email(){
    var Email=document.getElementById("email").value;
    var pattern= "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"
    if(Email.match(pattern)){
        document.getElementById("Email").innerHTML="must contain '@' and '.com'";
        return true;
    }else if(Email.length<1){
        document.getElementById("Email").innerHTML="enter email";
    }else{
        document.getElementById("Email").innerHTML="must contain '@' and '.com'";
        return false;
    }
}
function Password(){
    var Password=document.getElementById("pass").value;
    var pattern= "/^[ A-Za-z0-9_@./#&+-]*$/";
    if(Password.match(pattern)){
        document.getElementById("Pass").innerHTML="good";
        return true;
    }else if(Password.length<1){
        document.getElementById("Pass").innerHTML="enter password";
    }else{
        document.getElementById("Pass").innerHTML="Password must have at least one alphabet and one number and should not be less than 8 characters";
        return false;
    }
}
function formcheck(){
    if(Password() && Email() && Age() && Lname() && Fname() && document.getElementById("file").files.length>0 && document.getElementById("des").checked && (document.getElementById("check").checked ) ){
        ddocument.getElementById("write").innerHTML="all good";
        return true;
    }
    else{
        document.getElementById("write").innerHTML="fill up everthing";
        return false;
    }
}