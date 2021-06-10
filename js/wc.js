const cwords = document.getElementById("inputMessages");
const word_display = document.getElementById("wcDisplay");

function countWord() {
    let text = cwords.value;
    // text = text.trim();
    const words = text;
    word_display.innerText = words.length;
}