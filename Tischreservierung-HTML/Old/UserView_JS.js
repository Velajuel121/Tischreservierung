 
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

function chooseNumbers(number){
    for(i = 1; i < 6;i++){
            btn = document.getElementById(i);
            btn.style.backgroundColor = "black";
        }
    switch(number){
            case 5:
                document.getElementById(5).style.backgroundColor = "#33cc03";
                break;
            case 4:
                document.getElementById(4).style.backgroundColor = "#cece03";
                break;
            case 3:
                document.getElementById(3).style.backgroundColor = "#ce9b03";
                break;
            case 2:
                document.getElementById(2).style.backgroundColor = "#ce6903";
                break;
            case 1:
                document.getElementById(1).style.backgroundColor = "#ce0303";
                break;
            default:
                break;
            
        }
        
}

var alreadyClicked = false;
function colorIt(number){
    if(alreadyClicked == false){
        

        for(i = 1; i < 6;i++){
            btn = document.getElementById(i);
            btn.style.backgroundColor = "black";
        }
        switch(number){
            case 5:
                document.getElementById(5).style.backgroundColor = "#33cc03";
                break;
            case 4:
                document.getElementById(4).style.backgroundColor = "#cece03";
                break;
            case 3:
                document.getElementById(3).style.backgroundColor = "#ce9b03";
                break;
            case 2:
                document.getElementById(2).style.backgroundColor = "#ce6903";
                break;
            case 1:
                document.getElementById(1).style.backgroundColor = "#ce0303";
                break;
            default:
                break;
        }
    }
    
}
    

