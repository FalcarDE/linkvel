<!-- Created by @Doung -->


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

/* Created by @Hoang */

function validateEmail()
{
    let Email       = document.getElementById("Email").value;


    let Mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(Email.match(Mailformat))
    {
        alert(Email);

        return true;
    }
    else
    {
        alert("Du hast leider eine ungültige Email angegeben!");
        document.RegiForm.Email.focus();
        return false;
    }

}

function validatePhoneNumber()
{
    let Phonenumber = document.getElementById("Phonenumber").value;



    let Phoneformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    if(Phonenumber.match(Phoneformat))
    {
        return true;
    }
    else
    {
        alert("Du hast leider eine ungültige Telefonnummer angegeben! ");
        document.RegiForm.Phonenumber.focus();
        return false;
    }
}

function validateAge()
{
    //let birthday = document.getElementById("Birthdate").value; // Don't get Date yet...
    //let regexVar = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/; // add anchors; use literal
    //alert(birthday);

    let today               = new Date();
    let birthDate           = new Date(document.getElementById("Birthdate").value);
    let ISOBirthdateFormat  = birthDate.toISOString().split('T')[0];


    let UserAge = today.getFullYear() - birthDate.getFullYear();


    let UserBirthMonth = today.getMonth() - birthDate.getMonth();


    if (UserBirthMonth < 0 || (UserBirthMonth === 0 && today.getDate() < birthDate.getDate()))
    {
        UserAge--;
    }

    if (UserAge < 16)
    {
        //alert(UserAge);
        alert("Das Alter stimmt den AGBs nicht über ein. Bitte überprüfen!")
        return false;
    }

}