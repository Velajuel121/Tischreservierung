window.onclick = function (event) {
    if (!event.target.matches('.navbutton')) {
        
        var navbarItems = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < navbarItems.length; i++) {
            var openDropdown = navbarItems[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
    
    
    
    
    
    
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