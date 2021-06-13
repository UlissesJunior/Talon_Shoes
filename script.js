const html = document.querySelector('html')
// Light Mode, Dark Mode, by Lallier e Ulisses
const initialColors = {
    colorText: "#000",
    bg: "#F7F8FD",
    bgTenis: "#C4C4C4",
    bgEmail: "#1C1C1E"
}

const darkMode = {
    bg: "#1C1C1E",
    colorText: "#F7F8FD",
    bgTenis: "#242530",
    bgEmail: "#242530"
}

const transformKey = key => 
"--" + key.replace(/([A-Z])/,"-$1").toLowerCase()


const changeColors = (colors) => {
    Object.keys(colors).map(key => 
        html.style.setProperty(transformKey(key), colors[key]))
    }
    
const tiraRestoServer = (caminhoImg) => {
    const numPos = caminhoImg.indexOf('assets/')
    return caminhoImg.slice(numPos)
}
function mudaTheme() {
    const SubString = tiraRestoServer(document.getElementById('SunOrMoon').src)
    if (SubString == "assets/img/Sun.svg") {
        document.getElementById('SunOrMoon').src = "assets/img/Moon.svg"
        document.getElementById('Store').src = "assets/img/Store_D.svg"
        document.querySelectorAll('#logo')[0].src = document.querySelectorAll('#logo')[0].src.replace('L', 'D')
        changeColors(darkMode)
    } else {
        document.getElementById('SunOrMoon').src = "assets/img/Sun.svg"
        document.getElementById('Store').src = "assets/img/Store_L.svg"
        document.querySelectorAll('#logo')[0].src = document.querySelectorAll('#logo')[0].src.replace('D', 'L')
        changeColors(initialColors)
    }

}
// Slide-show Buttons 
function mudaNike() {
    // const SubString = tiraRestoServer(document.querySelectorAll(".button1 img").src)
    console.log(tiraRestoServer(document.getElementById("Tenis1").src))
    const SubString = tiraRestoServer(document.getElementById("Tenis1").src)
    if (!(SubString == "assets/img/Nike_1.png")) {
        document.getElementById("TenisBig").src = "assets/img/Nike_Big.png"
        document.getElementById("TituloText").innerHTML = "Nike Air Max 90"
        document.getElementById("Corpo").innerHTML = 
        `O Air Max 90 é um dos principais sneakers da família Max Air. 
        Hoje, o Nike 90 é encontrado em várias
        versões e cores para atender aos mais diferentes gostos.`
        document.getElementById("Preco").innerHTML = "R$520,00"
        document.getElementById("Tenis1").src = "assets/img/Nike_1.png"
        document.getElementById("Tenis2").src = "assets/img/Nike_2.png"
        document.getElementById("Tenis3").src = "assets/img/Nike_3.png"
        document.getElementById("Tenis4").src = "assets/img/Nike_4.png"
    }
    
    
}
function mudaAdidas() {
    console.log(tiraRestoServer(document.getElementById("Tenis1").src))
    const SubString = tiraRestoServer(document.getElementById("Tenis1").src)
    if (!(SubString == "assets/img/Adidas_1.png")) {
        document.getElementById("TenisBig").src = "assets/img/Adidas_Big.png"
        document.getElementById("TituloText").innerHTML = "Adidas Galaxar"
        document.getElementById("Corpo").innerHTML = 
        `O Tênis adidas Galaxar Run Supera é perfeito para tornar os looks ainda 
        mais estilosos. Sinta a qualidade Adidas e desfrute do aconchego nas 
        atividades físicas.`
        document.getElementById("Preco").innerHTML = "R$325,00"
        document.getElementById("Tenis1").src = "assets/img/Adidas_1.png"
        document.getElementById("Tenis2").src = "assets/img/Adidas_2.png"
        document.getElementById("Tenis3").src = "assets/img/Adidas_3.png"
        document.getElementById("Tenis4").src = "assets/img/Adidas_4.png"
    }
}
function mudaPuma() {
    console.log(tiraRestoServer(document.getElementById("Tenis1").src))
    const SubString = tiraRestoServer(document.getElementById("Tenis1").src)
    if (!(SubString == "assets/img/Pume_1.png")) {
        document.getElementById("TenisBig").src = "assets/img/Puma_Big.png"
        document.getElementById("TituloText").innerHTML = "Puma RS-Fast"
        document.getElementById("Corpo").innerHTML = 
        `A clássica linha RS recebe uma silhueta com um visual mais 
        contemporâneo, combinando um design do começo dos anos 
        2000 com detalhes futurísticos.`
        document.getElementById("Preco").innerHTML = "R$600,00"
        document.getElementById("Tenis1").src = "assets/img/Puma_1.png"
        document.getElementById("Tenis2").src = "assets/img/Puma_2.png"
        document.getElementById("Tenis3").src = "assets/img/Puma_3.png"
        document.getElementById("Tenis4").src = "assets/img/Puma_4.png"
    }
}
// Enviar Message
function EnviarMessage() {
    const name = document.getElementById("nome"),
            email = document.getElementById("email"),
            mensagem = document.getElementById("mensagem")
    if ((name.value.length > 0) && (email.value.length > 0) && (mensagem.value.length > 0)) {
        window.alert("Email Enviado com sucesso!")
        name.value = email.value = mensagem.value = "";

    } else
        window.alert("Atenção! Todos campos devem estar preenchido")
}