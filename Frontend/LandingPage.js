/*
*
* function for
*
* */

let global_Headline;


function generateCommentSection(headlineID , Session , CommentLabelID)
{
    let Headline   = document.getElementById(headlineID).innerHTML
    global_Headline = Headline;

    //alert(Headline)


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
        xhttp.open("GET", "../Backend/CCommentSection.php?Headline="+ Headline + "&Session=" + Session + "&CommentLabelID=" + CommentLabelID, true);
        xhttp.send();

    }
}



function UpdateLikes(LikeButtonID, LikeLabelID ,HeadlineID , Session )
{
    let Headline            = document.getElementById(HeadlineID).innerHTML;
    //let LikeButtonID        = LikeButtonID;
    //alert(LikeLabelID);

    let xhttp;

    if ( Session === "")
    {
       alert("Bitte einloggen um liken zu können!")
    }
    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById(LikeButtonID).style.color = 'skyblue';
                document.getElementById(LikeLabelID).innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../Backend/CUpdatingLikes.php?Headline="+ Headline, true);
        xhttp.send();
    }


}


function UploadComments(Session, CommentLabelID )
{
    let comment = document.getElementById('CommentInputArea').value;

    if ( Session === "")
    {
        alert("Bitte logge dich ein deine Meinung mit der Community teilen zu können!")
    }

    else if (comment === "")
    {
        alert("Bitte gebe zunächst dein Kommentar ab, damit du erst posten kannst!");
    }

    else
    {
        let xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function ()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                //document.getElementById("RightSide").innerHTML = this.responseText;
                let NumberOfCommentNew = parseInt(document.getElementById(CommentLabelID).innerHTML) + 1;
                document.getElementById(CommentLabelID).innerHTML = NumberOfCommentNew;
                alert("Du hast erfolgreich dein Kommentar abgeben!");
            }
        };

        xhttp.open("GET", "../Backend/CUploadComment.php?comment=" + comment + "&headline=" + global_Headline, true);
        xhttp.send();
    }

}

function showLocation(HeadlineID)
{
    let Headline = document.getElementById(HeadlineID).innerHTML;
    //alert(Headline);
    if ( Headline === "")
    {
        alert("Konnten keine Location gefunden werden!")
    }
    else
    {
        let xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function ()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                let url = this.responseText;
                window.open(url);

            }
        };

        xhttp.open("GET", "../Backend/CMapLocation.php?Headline=" + Headline, true);
        xhttp.send();
    }
}




