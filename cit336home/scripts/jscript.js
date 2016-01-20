
function Trivia_Candy(CandyAns) {
    var msgOut = Trivia_CandyAnswer(CandyAns);
    document.getElementById("candyanswer").innerHTML = msgOut;
}

function Trivia_CandyAnswer(CandyAns) {
    var msgOut = "";
    switch (CandyAns) {
        case "Reeses":
            msgOut = "I love Reese's peanut butter cups, but that's not the world's most popular candy!";
            break;
        case "Dove":
            msgOut = "Dove/Galaxy bars are not the world's most popular candy!";
            break;
        case "Skittles":
            msgOut = "Skittles are not the most popular candy in the world!";
            break;
        case "M&Ms":
            msgOut = "Correct! M&M's outsell every other candy in the world!";
            break;
        case "ThreeMusketeers":
            msgOut = "Love those chocolate bars, but 3Musketeers is not the world's most popular candy!";
            break;
        case "Snickers":
            msgOut = "Snickers candy bars are not the world's most popular candy, but they are the world's most popular candy bar!  Did you know Snickers candy bars were named after a horse?";
            break;
    }
    return msgOut;
}

function Trivia_Paper(PaperAns) {
    var msgOut = Trivia_PaperAnswer(PaperAns);
    document.getElementById("paperanswer").innerHTML = msgOut;
}

function Trivia_PaperAnswer(PaperAns) {
    var msgOut = "";
    switch (PaperAns) {
        case "3feet":
            msgOut = "It's bigger than 3 feet!";
            break;
        case "20feet":
            msgOut = "It's bigger than 20 feet!";
            break;
        case "500miles":
            msgOut = "It's bigger than 500 miles!";
            break;
        case "6inches":
            msgOut = "It's bigger than 6 inches!";
            break;
        case "70million":
            msgOut = "Correct! It's about 70 million miles. While there's no way it's possible, it shows the power of exponentital growth!";
            break;
        case "11centimeters":
            msgOut = "It's bigger than 11 centimeters!";
            break;
    }
    return msgOut;
}