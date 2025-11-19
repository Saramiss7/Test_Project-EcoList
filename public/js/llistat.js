// --- DOM Elements ---
const b_startGame = document.getElementById("sorteig");
const bombo = [];
const num_productor = null;
const num = null;

function getNom(){
    const nomsProductors = new Set();
    productors.forEach(p => {
        const name = p.nom_productor;
    })
    return Array.from(nomsProductors);
}

// Get a random number
function Bombo() {
    for (let i = 1; i <= numProductes; i++) bombo.push(i);
    console.log(bombo);
}

function extreureNum() {
    const posicio = Math.floor(Math.random() * bombo.length);
    const num = bombo[posicio];
    bombo.splice(posicio, 1);
    return num;
}

document.addEventListener("DOMContentLoaded", async () => {
    echo = num;
    b_startGame.addEventListener("click", () => {
        if(numProductes < 3){
            showNotification("Hi han massa pocs productes");
            return;
        }else if(numProductes >= 3){
            Bombo();
            extreureNum();
            for(let i=0;i<=numProductes;i++){
                if(productors[id_productor] == num){
                    showNotification("Es tercer:" + productors);
                }
            }
            showNotification(num + "Hi han varis");
        }
    });
});

function showNotification(message) {
    pausaNotificacion = true;
    const noti = document.getElementById("notification");
    const box = document.getElementById("notification-box");
    const text = document.getElementById("notification-text");

    if (!noti ||!box || !text) return;

    text.textContent = message;

    noti.style.display = "flex";
    box.style.opacity = "1";

    setTimeout(() => {
        box.style.opacity = "0";
        setTimeout(() => {
            noti.style.display = "none";
        }, 300);
        pausaNotificacion = false;
    }, 2000);
}
