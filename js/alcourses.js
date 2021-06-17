function myfuntion() {
    var navbar = document.getElementById('nav');
    navbar.classList.toggle('show');
}

//for first carousel
var left1 = 1;
var right1 = 4;
var left2 = 1;
var right2 = 4;
var left3 = 1;
var right3 = 4;
var left4 = 1;
var right4 = 4;

function show() {
    for (i = left1; i <= right1; i++) {
        document.getElementById("c" + i).style.display = "inline-block";
    }
    for (i = left2; i <= right2; i++) {
        document.getElementById("d" + i).style.display = "inline-block";
    }
    for (i = left3; i <= right3; i++) {
        document.getElementById("e" + i).style.display = "inline-block";
    }

    for (i = left4; i <= right4; i++) {
        document.getElementById("f" + i).style.display = "inline-block";
    }
}



function moveleft1() {
    if (left1 <= 2 && right1 <= 6) {
        document.getElementById("c" + left1).style.display = "none";
        left1 += 1;
        right1 += 1;

        for (i = left1; i <= right1; i++) {
            document.getElementById("c" + i).style.display = "inline-block";
        }
    }
    else
        return;
}

function moveright1() {
    if (left1 >= 2 && right1 >= 5) {
        document.getElementById("c" + right1).style.display = "none";
        left1 -= 1;
        right1 -= 1;

        for (i = left1; i <= right1; i++) {
            document.getElementById("c" + i).style.display = "inline-block";
        }
    }
    else
        return;
}

// for second carousel

function moveleft2() {
    if (left2 <= 2 && right2 <= 6) {
        document.getElementById("d" + left2).style.display = "none";
        left2 += 1;
        right2 += 1;

        for (i = left2; i <= right2; i++) {
            document.getElementById("d" + i).style.display = "inline-block";
        }
    }
    else
        return;
}

function moveright2() {
    if (left2 >= 2 && right2 >= 5) {
        document.getElementById("d" + right2).style.display = "none";
        left2 -= 1;
        right2 -= 1;

        for (i = left2; i <= right2; i++) {
            document.getElementById("d" + i).style.display = "inline-block";
        }
    }
    else
        return;
}

// for 3rd carousel

function moveleft3() {
    if (left3 <= 2 && right3 <= 6) {
        document.getElementById("e" + left3).style.display = "none";
        left3 += 1;
        right3 += 1;

        for (i = left3; i <= right3; i++) {
            document.getElementById("e" + i).style.display = "inline-block";
        }
    }
    else
        return;
}

function moveright3() {
    if (left3 >= 2 && right3 >= 5) {
        document.getElementById("e" + right3).style.display = "none";
        left3 -= 1;
        right3 -= 1;

        for (i = left3; i <= right3; i++) {
            document.getElementById("e" + i).style.display = "inline-block";
        }
    }
    else
        return;
}

//for 4th carousel

function moveleft4() {
    if (left4 <= 2 && right4 <= 6) {
        document.getElementById("f" + left4).style.display = "none";
        left4 += 1;
        right4 += 1;

        for (i = left4; i <= right4; i++) {
            document.getElementById("f" + i).style.display = "inline-block";
        }
    }
    else
        return;
}

function moveright4() {
    if (left4 >= 2 && right4 >= 5) {
        document.getElementById("f" + right).style.display = "none";
        left -= 1;
        right -= 1;

        for (i = left4; i <= right4; i++) {
            document.getElementById("f" + i).style.display = "inline-block";
        }
    }
    else
        return;
}





var mq = window.matchMedia("(max-width: 480px)");
if (mq.matches) {

    var left1 = 1;
    var right1 = 2;
    var left2 = 1;
    var right2 = 2;
    var left3 = 1;
    var right3 = 2;
    var left4 = 1;
    var right4 = 2;

    function show() {
        for (i = left1; i <= right1; i++) {
            document.getElementById("c" + i).style.display = "inline-block";
        }
        for (i = left2; i <= right2; i++) {
            document.getElementById("d" + i).style.display = "inline-block";
        }
        for (i = left3; i <= right3; i++) {
            document.getElementById("e" + i).style.display = "inline-block";
        }

        for (i = left4; i <= right4; i++) {
            document.getElementById("f" + i).style.display = "inline-block";
        }
    }



    function moveleft1() {
        if (left1 <= 4 && right1 <= 6) {
            document.getElementById("c" + left1).style.display = "none";
            left1 += 1;
            right1 += 1;

            for (i = left1; i <= right1; i++) {
                document.getElementById("c" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

    function moveright1() {
        if (left1 >= 1 && right1 >= 3) {
            document.getElementById("c" + right1).style.display = "none";
            left1 -= 1;
            right1 -= 1;

            for (i = left1; i <= right1; i++) {
                document.getElementById("c" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

    // for second carousel

    function moveleft2() {
        if (left2 <= 4 && right2 <= 6) {
            document.getElementById("d" + left2).style.display = "none";
            left2 += 1;
            right2 += 1;

            for (i = left2; i <= right2; i++) {
                document.getElementById("d" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

    function moveright2() {
        if (left2 >= 1 && right2 >= 3) {
            document.getElementById("d" + right2).style.display = "none";
            left2 -= 1;
            right2 -= 1;

            for (i = left2; i <= right2; i++) {
                document.getElementById("d" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

    // for 3rd carousel

    function moveleft3() {
        if (left3 <= 4 && right3 <= 6) {
            document.getElementById("e" + left3).style.display = "none";
            left3 += 1;
            right3 += 1;

            for (i = left3; i <= right3; i++) {
                document.getElementById("e" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

    function moveright3() {
        if (left3 >= 1 && right3 >= 3) {
            document.getElementById("e" + right3).style.display = "none";
            left3 -= 1;
            right3 -= 1;

            for (i = left3; i <= right3; i++) {
                document.getElementById("e" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

    //for 4th carousel

    function moveleft4() {
        if (left4 <= 4 && right4 <= 6) {
            document.getElementById("f" + left4).style.display = "none";
            left4 += 1;
            right4 += 1;

            for (i = left4; i <= right4; i++) {
                document.getElementById("f" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

    function moveright4() {
        if (left4 >= 1 && right4 >= 3) {
            document.getElementById("f" + right).style.display = "none";
            left -= 1;
            right -= 1;

            for (i = left4; i <= right4; i++) {
                document.getElementById("f" + i).style.display = "inline-block";
            }
        }
        else
            return;
    }

}
else {

}
