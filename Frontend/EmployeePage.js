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
        document.getElementById('bottom-container-box').innerHTML = "undefined";

    }

    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById("bottom-container-box").innerHTML = this.responseText;
                //hier wird die Ausgabe in HMTL angezeigt
            }
        };
        xhttp.open("GET", "../Backend/CLoadingEmployee.php?Input=" + Input, true);
        xhttp.send();

    }

}


