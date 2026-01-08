//productors es un array que conté tots els noms de productoras que hi han en la recerca
console.log(productors);
const lotteryButton = document.getElementById("sorteig");

function extreureNomRandom() {
    const posicio = Math.floor(Math.random() * productors.length);
    const nom = productors[posicio];
    productors.splice(posicio, 1);
    return nom;
}

function showNotification(name, position) {
    return new Promise((resolve) => {
        const noti = document.getElementById("notification");
        const box = document.getElementById("notification-box");
        const text = document.getElementById("notification-text");

        if (!noti || !box || !text) {
            resolve();
            return;
        }

        if(position == 0){
            text.textContent = "3r premi: " + name;
        }else if(position == 1){
            text.textContent = "2n premi: " + name;
        }else if(position == 2){
            text.textContent = "1r premi: " + name;
        }else{
            text.textContent = name;
        }

        // Show notification
        noti.style.display = "flex";
        box.style.opacity = "1";

        setTimeout(() => {
            box.style.opacity = "0";
            setTimeout(() => {
                noti.style.display = "none";
                resolve();
            }, 1000);
        }, 10000);
    });
}

async function showWinner(count=3) {
    lotteryButton.disabled = true;

    for (let i = 0; i < count; i++) {
        const name = extreureNomRandom();
        await showNotification(name, i); // Wait for each notification to finish
    }

    lotteryButton.disabled = false;
}

document.addEventListener("DOMContentLoaded", () => {
    lotteryButton.addEventListener("click", ()=> {
        if (productors.length < 3){
            showNotification("Hi han massa pocs productes", -1);
            return;
        }
        showWinner(3);
    });
});