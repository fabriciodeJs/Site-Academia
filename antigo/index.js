let time = 2000,
    imagemDoMomento = 0,
    imagens = document.querySelectorAll("img#carrossel");
    max = imagens.length;

    function proximaImagem(){
        imagemDoMomento++
        imagens[imagemDoMomento].classList.remove("seletor")
        if(imagemDoMomento >= max){
            imagemDoMomento = 0
        }
        imagens[imagemDoMomento].classList.add("seletor")
    }

    function start(){
        }

    


    window.addEventListener("load", start)