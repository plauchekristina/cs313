function clickMe() {
    alert("Clicked");
}

function changeColor() {
    var inputbox_id = "colorInput";
    var inputbox = document.getElementById(inputbox_id);

    var div_id = "colorChanger"
    var div = document.getElementById(div_id);

    // We should verify values here before we use them...
    var color = inputbox.value;
    div.style.backgroundColor = color;

}

function newQuote() {
    var quotes = [
        'Be Happy',
        'People are more important than things.',
        'You got this!',
        'You learn more from children than you did from your parents'
    ]

    var randomNumber = Math.floor(Math.random() * (quotes.length));
    document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
}
