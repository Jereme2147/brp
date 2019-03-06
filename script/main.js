let tablet = window.matchMedia("(min-width: 600px)");
let desktop = window.matchMedia("(min-width: 950px)");

// for scrolling and fixing sizing
function scrollNum() {
    let z = fixWindow();
    let menu = document
        .getElementById("menuBar")
        .getAttribute("style", "height");
    let reg = /[0-9]/g;
    //menu shrink
    if (z.y > 200) {
        if (menu) {
            let height = parseInt(menu.match(reg).join(""));
            if (height >= 175) {
                document
                    .getElementById("sign")
                    .setAttribute("style", "display:none");
                document
                    .getElementById("map")
                    .setAttribute("style", "display:none");
                myMove(height);
            }
        }
    } else {   //window grow
        myGrow(75);

    }
}
function fixWindow() {
    var doc = document,
        w = window;
    var x, y, docEl;

    if (typeof w.pageYOffset === "number") {
        x = w.pageXOffset;
        y = w.pageYOffset;
    } else {
        docEl =
            doc.compatMode && doc.compatMode === "CSS1Compat"
                ? doc.documentElement
                : doc.body;
        x = docEl.scrollLeft;
        y = docEl.scrollTop;
    }
    return { x: x, y: y };
}

//function that shrinks menu
function myMove(height) {
    let id = setInterval(frame, 2);
    function frame() {
        if (height <= 95) {
            clearInterval(id);
        } else {
            height = height - 2;
            let num = `height:${height}px`;
            document.getElementById("menuBar").setAttribute("style", num);
        }
    }
}

function myGrow(height) {
    document.getElementById("sign").setAttribute("style", "display:block");
    if (desktop.matches) {
        document
            .getElementById("map")
            .setAttribute("style", "display:block");
    }
    document.getElementById("menuBar").setAttribute("style", "height:175px");

}
//expands divs for safety page.  code -jquery works, but only toggles once?
function expand(id) {
    let select = document.getElementById(id);
    if (!select.getAttribute("style", "display") || 
        select.getAttribute("style", "display") == "display:none"){
        select.setAttribute("style", "display:flex; justify-content: center;");
    } else {
        if (event.target.tagName.toLowerCase() !== 'a') {
            select.setAttribute("style", "display:none");
        }
        
    }
}