const messages = [
    "apakah kamu serius?",
    "benar benar serius??",
    "apakah kamu yakin?",
    "ayolah...",
    "coba pikir kembali tentang ini!",
    "jika kamu bilang tida aku akan sedih...",
    "aku benar benar sedih...",
    "aku benar benar benar benar benar sedih...",
    "ok baiklah , aku akan berhenti bertanya ...",
    "hanyaa bercanda, katakan iya please! ❤️"
];

let messageIndex = 0;

function handleNoClick() {
    const noButton = document.querySelector('.no-button');
    const yesButton = document.querySelector('.yes-button');
    noButton.textContent = messages[messageIndex];
    messageIndex = (messageIndex + 1) % messages.length;
    const currentSize = parseFloat(window.getComputedStyle(yesButton).fontSize);
    yesButton.style.fontSize = `${currentSize * 1.5}px`;
}

function handleYesClick() {
    window.location.href = "yes_page.html";
}