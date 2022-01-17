function generateCommentSection(headlineID)
{
    let Headline   = document.getElementById(headlineID).innerHTML
    alert(json_encode(Headline))


    let xhttp;

    if (Headline === "")
    {
        document.getElementById('RightSide').innerHTML = "undefined";
    }

    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById("RightSide").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../Backend/CCommentSection.php?Headline="+ Headline);
        xhttp.send();

    }
}



function UpdateLikes(LikeButtonlID, LikeLabelID ,HeadlineID)
{
    let Headline        = document.getElementById(HeadlineID).innerHTML;
    alert(LikeButtonlID);

    let xhttp;


    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if (this.readyState === 4 && this.status === 200)
        {
            document.getElementById(LikeButtonID).style.color = "skyblue";
            document.getElementById(LikeLabelID).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../Backend/CUpdatingLikes.php?Headline="+ Headline);
    xhttp.send();

}




function UploadComments()
{
    let like   = document.getElementById(headlineID).innerHTML;
    alert(like);

    let xhttp;

    if (Headline === "")
    {
        document.getElementById('RightSide').innerHTML = "undefined";
    }

    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById(LikeID).style.color = "skyblue";
            }
        };
        xhttp.open("GET", "../Backend/CCommentSection.php=Headline"+ Headline);
        xhttp.send();

    }
}


