
    const clippy = document.getElementById("clippy_image");
    const bubble = document.getElementById("clippy_bubble");

    const tempo = {
        base: 1000,
        toctoc: 2000,
        olhadinha: 100,
        pensante: 3000
    };

    function animar(nome) {
        clippy.src = "";
        clippy.src = "img-clippy/clippy_" + nome + ".gif";

        return tempo[nome] || 2000;
    }

    // quando entra na pag
    window.onload = () => {
        animar("toctoc");
        falar("Oi! Eu sou o Clippy 😄");
    };

    function falar(texto, animacao = "pensante") {
        bubble.innerText = texto;
        bubble.style.display = "block";

        const duracao = animar(animacao);

        setTimeout(() => {
            bubble.style.display = "none";
        }, duracao);
    }

    // quando clica
    document.addEventListener("click", () => {
        falar("Você clicou! O que posso ajudar?", "olhadinha");
    });