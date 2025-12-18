import "./style.css";

let count = 0;

const countEl = document.getElementById("count");
const incBtn = document.getElementById("inc");
const decBtn = document.getElementById("dec");

function render() {
    countEl.textContent = count;
}

incBtn.addEventListener("click", () => {
    count++;
    render();
});

decBtn.addEventListener("click", () => {
    count--;
    render();
});

render();
