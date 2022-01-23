//Created by @AntoniaGeschke



//checks whether the heading has been entered correctly
function validateHeadline(headline)
{

//checks whether the heading is set
if(headline.length==0)
{
   alert("Die Überschrift muss gesetzt werden!");
    return false;
}

//checks the length of the heading
if(headline.length<=30)
{
    return true;
}

else
{
    alert("Die Überschrift darf nicht länger als 30 Zeichen sein!");
    return false;
}
}

//checks whether the hashtags had been entered correctly
function validateHashtagsLength(hashtags)
{
    //checks whether the hashtags are set
    if(hashtags.length===0)
    {
        alert("Hashtags müssen gesetzt werden!");
        return false;
    }

    //Checks the length of the hashtags
    if (hashtags.length<=20)
    {
        return true;
    }
    else
    {
        alert("Hashtags dürfen nicht länger als 20 Zeichen sein!");
        return false;
    }
}

//checks if the hashtags start with '#'
function validateHashtagsForm(hashtags)
{
if (hashtags.startsWith("\#"))
{
    return true;
}
else
{
    alert("Hashtags müssen mit '#' beginnen!");
    return false;
}
}

//checks whether the uploaded picture had been entered correctly
function validatePictureFileForm(picturefile)
{
    //Checks if there is an uploaded image
    if(picturefile.length === 0)
    {
        alert("Es muss eine Bilddatei angegeben werden!");
        return false;
    }

    else
    {
        //Checks if the uploaded image has the right format
        if(picturefile.endsWith(".jpg") || picturefile.endsWith(".png") || picturefile.endsWith(".jpeg"))
        {
            return true;
        }
        else
        {
            alert("Falsches Dateiformat! Bilder müssen 'jpg' oder 'png' Dateien sein!");
            return false;
        }

        return true;
    }
}

//checks whether the textfile had been entered correctly
function validateTextfile(Textfile)
{
    //Checks if the textfile is set
    if(Textfile.length==0)
    {
        alert("Das Erlebnis muss beschrieben werden!");
        return false;
    }

    //Checks the length od the textfile
    if(Textfile.length<=1024)
    {
        return true;
    }
    else
    {
        alert("Das Erlebnis darf nur 1024 Zeichen haben!");
        return false;
    }
}

