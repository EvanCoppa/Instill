var menuOpen=False;

function expandMenu() {
    // if (menuOpen==False) {
    document.getElementById("sidenav").style.display="inline";
        // menuOpen=True;
    // }
    // else {
    //     refoldMenu();
    //     menuOpen=False;
    // }
}

function refoldMenu() {
    let width = screen.width;
    if (width < 600) {
        document.getElementById("sidenav").style.display="none";
    } 
}