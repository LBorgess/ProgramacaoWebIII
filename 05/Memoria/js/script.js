const moves = document.getElementById("movesCount");
const timeValue = document.getElementById("time");
const startButton = document.getElementById("start");
const stopButton = document.getElementById("stop");
const gameContainer = document.querySelector(".game-container");
const result = document.getElementById("result");
const controls = document.querySelector(".controls-container");
let cards;
let interval;
let firstCard = false;
let secondCard = false;

// Items array

const items = [
    {name: "venusaur",   image: "003.png"},
    {name: "charizard",  image: "006.png"},
    {name: "blastoise",  image: "009.png"},
    {name: "butterfree", image: "012.png"},
    {name: "pikachu",    image: "025.png"},
    {name: "nidoqueen",  image: "031.png"},
    {name: "nidoking",   image: "034.png"},
    {name: "alakazam",   image: "065.png"},
    {name: "farfetch",   image: "083.png"},
    {name: "electrode",  image: "101.png"},
    {name: "snorlax",    image: "143.png"},
    {name: "articuno",   image: "143.png"},
    {name: "mewtwo",     image: "150.png"},
    {name: "feraligatr", image: "160.png"},
    {name: "noctowl",    image: "164.png"},
    {name: "suicune",    image: "245.png"},    
];

// Initial Time
let seconds = 0, minutes = 0;

// Initial moves and win count
let movesCount = 0, winCount = 0;

// For Timer
const timeGenerator = () => {
    seconds += 1;
    // Minutes logic
    if (seconds >= 60) {
        minutes += 1;
        seconds = 0;
    }
    // Format time before displaying
    let secondsValue = seconds < 10 ? `0${seconds}` : seconds;
    let minutesValue = minutes < 10 ? `0${minutes}` : minutes;
    timeValue.innerHTML = `<span>Time:</span>${minutesValue}:${secondsValue}`;
};

// For calculating moves
const movesCounter = () => {
    movesCount += 1;
    moves.innerHTML = `<span>Moves:</span>${movesCount}`;
};

// pick random objects from the items array
