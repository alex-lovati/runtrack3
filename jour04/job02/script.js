document.addEventListener("DOMContentLoaded", (event) => {
    const url = "text.json"
    function jsonValueKey(val) {
        fetch(url)
            .then((response) => response.json())
            .then((response) => {
                return console.log(response[val]);
            });
    }
    jsonValueKey("city")
})