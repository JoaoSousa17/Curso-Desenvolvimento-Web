var altura = window.innerHeight
var largura = window.innerWidth
var vidas = 1;
var tempo = 100;
var criaMosquitoTempo = 1500

var nivel = window.location.search.replace('?','')

if(nivel === "normal"){
    criaMosquitoTempo = 1500
} else if (nivel === "dificil"){
    criaMosquitoTempo = 1000
} else{
    criaMosquitoTempo = 750
}
function ajustaTamanhoPalcoJogo(){
    altura = window.innerHeight;
    largura = window.innerWidth;
}

var cronometro = setInterval( function(){
    tempo -= 1;
    if (tempo < 0){
        clearInterval(cronometro);
        clearInterval(criaMosca);
        window.location.href = "vitoria.html"
    } else{
        document.getElementById("cronometro").innerHTML = tempo;
    }
}, 1000)

function desenhaMosquito(){
    // Remover o mosquito anterior, caso exista - Remoção automática
    if (document.getElementById("mosquito")){
        document.getElementById("mosquito").remove()

        if (vidas > 3){
            window.location.href = "fim_de_jogo.html"
        } else{
            document.getElementById("v" + vidas).src="img/coracao_vazio.png"
            vidas++;
        }
        
    }

    // Gestão das posições aleatórias
    var posX = Math.floor(Math.random() * largura) - 90
    var posY = Math.floor(Math.random() * altura) - 90

    posX = posX <0 ? 0 : posX
    posY = posY <0 ? 0 : posY

    // Cria o elemento HTML
    var mosquito = document.createElement('img');
    mosquito.src="img/mosca.png"
    mosquito.className = "mosquito" + tamanhoALeatorio() + " lado" + ladoAleatorio();
    mosquito.style.left = posX + "px"
    mosquito.style.top = posY + "px"
    mosquito.style.position = "absolute"
    mosquito.id = 'mosquito'

    // Remover o mosquito por click
    mosquito.onclick = function(){
        this.remove()
    }

    // console.log("X: " + posX + " | Y: " + posY + " | Classes: " + mosquito.className)

    // Adiciona o mosquito à tela
    document.body.appendChild(mosquito);
}

function tamanhoALeatorio(){
    var classe = Math.floor(Math.random() * 3) + 1
    return classe
}

function ladoAleatorio(){
    var classe = Math.floor(Math.random() * 2) + 1
    return classe;
}