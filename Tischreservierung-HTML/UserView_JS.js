 
function openContent(contentName, element) {
    var i, content, tablinks;
    content = document.getElementsByClassName("mainContent");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
        content[i].style.visibility = "hidden";
    }
    document.getElementById(contentName).style.display = "block";
    document.getElementById(contentName).style.visibility = "visible";
}


document.getElementById("default").click();

function chooseNumbers(){
    
}