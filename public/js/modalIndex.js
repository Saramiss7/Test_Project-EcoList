document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("custom-modal");
    const closeBtn = document.querySelector(".close");
    
    closeBtn.onclick = () => modal.style.display = "none";
});