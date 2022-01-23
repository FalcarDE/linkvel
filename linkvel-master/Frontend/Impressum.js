/* Created by @AntoniaGeschke*/

let index = "0";
let images = [];
let time = 5000;

//Image List
images[0]='../image/city.jpg';
images[1]='../image/island.jpg';
images[2]='../image/mountain.jpg';
images[3]='../image/ocean.jpg';
images[4]='../image/sea.jpg';




function ChangeImage() {
    document.slide.src = images[index];

    if (index < images.length -1) {
        index++;
    }
    else{
        index = 0;
    }

    setTimeout("ChangeImage()",time);
}

