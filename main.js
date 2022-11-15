var menuOpen= new Boolean(false);

function expandMenu() {
    // if (menuOpen==False) {
    document.getElementById("sidenav").style.display="inline";
    document.getElementById("sidenav2").style.display="inline";
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
        document.getElementById("sidenav2").style.display="none";

    } 
}

function route(url) {
//change page to the url

document.location.href = url;



}



// const mediaQuery = window.matchMedia('(max-width: 600px)');
// if (mediaQuery.matches) {
//     // if (menuOpen==false) {
//     expandMenu();
//     // }
// }
