function getAccountID()
{
    let FirstName   = document.getElementById('FirstName').value;
    let LastName    = document.getElementById('LastName').value;
    let UserName    = document.getElementById('UserName').value;
    let Email       = document.getElementById('Email').value;

    let xhttp;

    if ((FirstName === "" || LastName === "") && (UserName === "" || Email === ""))
    {
        document.getElementById('OutPutAccountID').innerHTML = "undefined";

    }

    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById("OutPutAccountID").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../Backend/CSearchingUserID.php?FirstName="+ FirstName + "&LastName=" + LastName + "&UserName=" + UserName + "&Email=" + Email, true);
        xhttp.send();

    }
}

function getUserDataSet()
{
    let Input = document.getElementById('IDInputfield').value;

    let xhttp;

    if (Input === "")
    {
        document.getElementById('middle-container-output-box').innerHTML = "undefined";

    }

    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById("middle-container-output-box").innerHTML = this.responseText;
                //hier wird die Ausgabe in HMTL angezeigt
            }
        };
        xhttp.open("GET", "../Backend/CLoadingEmployee.php?Input=" + Input, true);
        xhttp.send();

    }

}

function editUserData()
{
    let Gender       = document.getElementById('InputGender').value;
    let FirstName    = document.getElementById('InputFirstName').value;
    let MidName      = document.getElementById('InputMidName').value;
    let LastName     = document.getElementById('InputLastName').value;
    let BirthDate    = document.getElementById('InputBirthDate').value;
    let Tel          = document.getElementById('InputTel').value;
    let StandardUser = document.getElementById('InputStandardUser').value;


    let Address    = document.getElementById('InputAddress').value;
    let Plz        = document.getElementById('InputPlz').value;
    let Country    = document.getElementById('InputCountry').value;
    let UserName   = document.getElementById('InputUserName').value;
    let Email      = document.getElementById('InputEmail').value;
    let Password   = document.getElementById('InputPassword').value;
    let SuperUser  = document.getElementById('InputSuperUser').value;

    let AccountKey  = document.getElementById('IDInputfield').value;

    let xhttp;
    //checkAge(BirthDate) &&
    //checkPhoneNumber(Tel)
    //&& checkAge(BirthDate)
    if (true)
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function ()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                alert("Die Daten wurden erfolreich geändert!")
                //document.getElementById("result-bottom-container-box").innerHTML = this.responseText;
            }
        };
        xhttp.open("Post", "../Backend/CUserEditByEmployee.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("InputGender=" + Gender + "&InputAccountKey=" + AccountKey + "&InputFirstName=" +FirstName
            + "&InputMidName=" + MidName + "&InputLastName=" + LastName  + "&InputBirthDate=" + BirthDate
            + "&InputTel=" + Tel + "&InputStandardUser=" + StandardUser +  "&InputAddress=" + Address
            + "&InputPlz=" + Plz + "&InputCountry=" + Country + "&InputUserName=" +UserName + "&InputEmail=" +Email
            + "&InputPassword=" + Password + "&InputSuperUser=" + SuperUser );
    }

    else
    {
        alert("Falsche Daten wurden eingegeben. Überprüfe die Telefonnummer, das Alter oder die Email Adresse!")
    }
}


function checkPhoneNumber(Phonenumber)
{
    if(Phonenumber === "")
    {
        return true
    }
    else
    {
        let Phoneformat = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        let CheckPhoneValue =((Phonenumber.match(Phoneformat)) ? true : false);
        alert(Phonenumber);
        return CheckValue;
    }

}


function checkEmail(Email)
{
    if(Email === "")
    {
        return true
    }
    else
    {
        let Mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        let CheckEmailValue =((Email.match(Mailformat)) ? true : false);
        alert(Email);
        return CheckEmailValue;
    }
}



function checkAge(BirthDate)
{
    //alert(BirthDate);
    let today               = new Date();
    //let ISOBirthdateFormat  = birthDate.toISOString().split('T')[0];
    let birthDate           = new Date(BirthDate);
    let UserAge = today.getFullYear() - birthDate.getFullYear();



    let UserBirthMonth = today.getMonth() - birthDate.getMonth();


    if (UserBirthMonth < 0 || (UserBirthMonth === 0 && today.getDate() < birthDate.getDate()))
    {
        UserAge--;
    }

    //alert(UserAge)
    if (UserAge < 16)
    {
        //alert(UserAge);
        alert("Das Alter stimmt den AGBs nicht über ein. Bitte überprüfen!")
        return false;
    }
    else
    {
        return true;
    }
}

function deletePost()
{
    let PostKey = document.getElementById('PostID').value;

    if (PostKey === "")
    {
        alert("Gib eine PostKey ein um einen Post löschen zu können! ");
    }
    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function ()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                alert("Der Post " + PostKey + "wurde erfolreich gelöscht!" )
            }
        };
        xhttp.open("Post", "../Backend/CEmployeeDeletePost.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("PostKey=" + PostKey);
    }

}

function getEmployeeData()
{
    let EmployeeKey = document.getElementById("EmployeeOption").value;
    let xmlHttpRequest = new XMLHttpRequest();


    xmlHttpRequest.onreadystatechange = function ()
    {
        if (this.readyState === 4 && xmlHttpRequest.status === 200)
        {
            alert(EmployeeKey);
            document.getElementById("middle-container-output-box").innerHTML = this.responseText;
        }
    };

    //alert(entry);
    xmlHttpRequest.open("POST", "../Backend/CEmployeeData.php" , true);
    xmlHttpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttpRequest.send("EmployeeKey=" + EmployeeKey);
}