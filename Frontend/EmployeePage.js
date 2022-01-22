function getAccountID()
{
    let FirstName   = document.getElementById('FirstName').value;
    let LastName    = document.getElementById('LastName').value;
    let UserName    = document.getElementById('UserName').value;
    let Email       = document.getElementById('Email').value;

    let xhttp;

    if ((FirstName === "" && LastName === "") || (UserName === "" && Email === ""))
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

    //if (typeof Gender ==='string' && typeof FirstName ==='string' && typeof MidName === 'string' && typeof LastName === 'string' )
    //{
    //    alert('Geht')
    //}
    //else {

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function ()
    {
        if (this.readyState === 4 && this.status === 200)
        {
            document.getElementById("result-bottom-container-box").innerHTML = this.responseText;
        }
        };
        xhttp.open("Post", "../Backend/CUserEditByEmployee.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("InputGender=" + Gender + "&InputAccountKey=" + AccountKey + "&InputFirstName=" +FirstName
            + "&InputMidName=" + MidName + "&InputLastName=" + LastName  + "&InputBirthDate=" + BirthDate
            + "&InputTel=" + Tel + "&&InputStandardUser=" + StandardUser +  "&InputAddress" + Address 
            + "&InputPlz" + Plz + "&InputCountry" + Country + "&InputUserName" +UserName + "&InputEmail" +Email 
            + "&InputPassword" + Password + "&InputSuperUser" + SuperUser );

}


function deletePost()
{
    let PostKey = document.getElementById('PostID').value;
    alert(PostKey);


    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function ()
    {
        if (this.readyState === 4 && this.status === 200)
        {
            document.getElementById("result-bottom-container-box").innerHTML = this.responseText;
        }
    };
    xhttp.open("Post", "../Backend/CEmployeeDeletePost.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("PostKey=" + PostKey);

}


