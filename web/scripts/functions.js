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
