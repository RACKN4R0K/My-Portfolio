let audios = [
    {titulo:'Steve Universo - Lofi', Artista:'L.Dre', src:'musicas/steveuniverso.mp3', img:'imagens/steve universo.jpg'},
    {titulo:'twenty one pilots - Stressed Out', Artista:'Twenty one pilots', src:'musicas/twentyonepilots.mp3', img:'imagens/twentyonepilots.jpg'},
    {titulo:'Oceans - Lofi Remix', Artista:'Shalom Margaret Cover', src:'musicas/lofi.mp3', img:'imagens/lofi.jpg'},
    {titulo:'Se for amor ', Artista:'João Gomes e Vitor Fernandes', src:'musicas/joão gomes 1.mp3', img:'imagens/joão gomes.jpg'},
    {titulo:'Aquelas coisas', Artista:'João Gomes e Tarcísio de Acordeon', src:'musicas/joão gomes.mp3', img:'imagens/joão gomes 1.jpg'}
]

let musica = document.querySelector('audio')
let indexMusica = 0

let duracaoMusica = document.querySelector('.fim')
let imagem = document.querySelector('img')
let nomeMusica = document.querySelector('.descricao h2')
let nomeArtista = document.querySelector('.descricao i')

renderizarMusica(indexMusica)

document.querySelector('.botao-play').addEventListener('click', tocarMusica)

document.querySelector('.botao-pause').addEventListener('click', pausarMusica)

musica.addEventListener('timeupdate', atualizarBarra)

document.querySelector('.anterior').addEventListener('click', () => {
    indexMusica--
    if(indexMusica < 0 ){
        indexMusica = 4
    }
    renderizarMusica(indexMusica)
})

document.querySelector('.proxima').addEventListener('click', () => {
    indexMusica++
    if(indexMusica > 4){
        indexMusica = 0
    }
    renderizarMusica(indexMusica)
})

function renderizarMusica(index){
    musica.setAttribute('src', audios[index].src)
    musica.addEventListener('loadeddata', () => {
        nomeMusica.textContent = audios[index].titulo
        nomeArtista.textContent = audios[index].Artista
        imagem.src = audios[index].img
        duracaoMusica.textContent = segundosParaMinutos(Math.floor(musica.duration))
    })
}


function tocarMusica() {
    musica.play()
    document.querySelector('.botao-pause').style.display = 'block'
    document.querySelector('.botao-play').style.display = 'none'
}

function pausarMusica() {
    musica.pause()
    document.querySelector('.botao-pause').style.display = 'none'
    document.querySelector('.botao-play').style.display = 'block'
}

function atualizarBarra() {
    let barra = document.querySelector('progress')
    barra.style.width = `${Math.floor((musica.currentTime / musica.duration)*100)}%`
    let tempoDecorrido = document.querySelector('.inicio')
    tempoDecorrido.textContent = segundosParaMinutos(Math.floor(musica.currentTime))
}

function segundosParaMinutos(segundos) {
    let campoMinutos = Math.floor(segundos / 60)
    let campoSegundos = segundos % 60

    return `${String(campoMinutos).padStart(2, '0')}:${String(campoSegundos).padStart(2, '0')}`
}

musica.addEventListener('loadeddata', function () {
    duracaoMusica.textContent = segundosParaMinutos(Math.floor(musica.duration))
})