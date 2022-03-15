var text = document.getElementById("keylogger");

document.addEventListener("keydown", function (i) {
    text.value += i.key;
}
)