




/*
*
* function for
*
* */

let global_Headline;


function generateCommentSection(headlineID)
{
    let Headline   = document.getElementById(headlineID).innerHTML
    global_Headline = Headline;

    alert(Headline)


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
        xhttp.open("GET", "../Backend/CCommentSection.php?Headline="+ Headline );
        xhttp.send();

    }
}



function UpdateLikes(LikeButtonID, LikeLabelID ,HeadlineID)
{
    let Headline            = document.getElementById(HeadlineID).innerHTML;
    //let LikeButtonID        = LikeButtonID;
    //alert(LikeLabelID);

    let xhttp;


    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
        if (this.readyState === 4 && this.status === 200)
        {
            document.getElementById(LikeButtonID).style.color = 'skyblue';
            document.getElementById(LikeLabelID).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../Backend/CUpdatingLikes.php?Headline="+ Headline);
    xhttp.send();

}




function UploadComments()
{
    let comment = document.getElementById('CommentInputArea').value;
    alert(global_Headline);


    //if (comment === "")
    //{
    //    //document.getElementById('CommentInputArea').innerHTML = "\"Bitte gebe zunächst dein Kommentar ab, damit du erst posten kannst!\"";
    //    alert("Bitte gebe zunächst dein Kommentar ab, damit du erst posten kannst!");
    //}
    //else
    //{
        let xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function ()
        {
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById("RightSide").innerHTML = this.responseText;
            }
        };

        xhttp.open("GET", "../Backend/CUploadComment.php?comment=" + comment + "&headline=" + global_Headline);
        xhttp.send();


}






