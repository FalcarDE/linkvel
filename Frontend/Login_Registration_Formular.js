<!-- Created by @Doung, Extended by @Hoang-->
<!-- Created by @Doung, extended and improved by @Hoang-->

let login = document.getElementById("login");
let register = document.getElementById("register");
let buttom = document.getElementById("button");

function registered()
{
    login.style.left        = "-400px";
    register.style.left     = "50px";
    buttom.style.left       = "110px";
}
function logined()
{
    login.style.left        = "50px";
    register.style.left     = "450px";
    buttom.style.left       = "0";
}

function validateEmail(Email)
{
    let Mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(Email.value.match(Mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        document.RegiForm.Email.focus();
        return false;
    }

}

function validatePhoneNumber(Phonenumber)
{
    let Phoneformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    if(Phonenumber.value.match(Phoneformat))
    {
        return false;
    }
    else
    {
        alert("You have entered an invalid Phonenumber!");
        document.RegiForm.Phonenumber.focus();
        return false;
    }
}