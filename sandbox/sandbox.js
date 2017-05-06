var buttonUsed = false;


function newEl() {
    if (buttonUsed == false) {

        buttonUsed = true;
        mainDiv = document.getElementById("main");

        // Create h2
        var elementH = document.createElement("h2");
        mainDiv.appendChild(elementH);
        var textH = document.createTextNode("A fancy-ass header");
        elementH.appendChild(textH);

        // Create p
        var element = document.createElement("p");
        mainDiv.appendChild(element);
        var text = document.createTextNode("Texxxxt");
        element.appendChild(text);
    }
}

function removeEl() {
    if (buttonUsed == true) {

        buttonUsed = false;

        // Delete h2
        mainDiv.removeChild(mainDiv.getElementsByTagName("h2")[0]);

        // Delete p
        mainDiv.removeChild(mainDiv.getElementsByTagName("p")[0]);
    }
}

function toggleEl() {
    if (buttonUsed == true) {
        removeEl();
    } else {
        newEl();
    }
}

// var image = 1
//
// function changeImage() {
//     if (image == 1) {
//         document.getElementById("img").src = "/resources/avatar.png";
//         image = 2
//     } else if (image == 2) {
//         document.getElementById("img").src = "/resources/kh.png";
//         image = 1
//     }
// }
