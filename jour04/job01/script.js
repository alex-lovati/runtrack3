document.addEventListener("DOMContentLoaded", (event) => {
    const url = "expression.txt";
    
    let button = document.getElementById("button")
    let p = document.createElement("p");
    let main = document.querySelector("html")

    button.addEventListener("click", function () { 
        fetch(url)
        .then((response) => response.text())
        .then((textString) => {
            main.append(p);
            p.append(textString);
        });
    });
});