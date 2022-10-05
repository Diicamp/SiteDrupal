// Evento de botões
document.querySelectorAll(".menu-publicacao").forEach(element => {
    element.addEventListener('click', function(event){
        document.querySelectorAll(".menu-publicacao").forEach(item => item.classList.remove("active")) // remover active do botão
        event.preventDefault()
        const moveToAttr = event.target.getAttribute("data-move-to");
        document.querySelector(".main-content").setAttribute("data-content", moveToAttr) 
    element.classList.add("active"); // adcionar active ao botão
    })
});






