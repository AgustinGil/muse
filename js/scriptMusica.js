
const botonPlay = document.getElementById('play')
const botonRepeat = document.getElementById('repeat')
const cancion = document.getElementById('reproductor-de-audio')
const timeline = document.getElementById('barra-cancion')
const volumen = document.getElementById('barra-sonido')
const speaker = document.getElementById('speaker-img')

const imagenPlay = '/assets/img/icons/boton-play.svg'
const imagenPausa = '/assets/img/icons/boton-pausa.svg'
const imagenNoRepeat = '/assets/img/icons/boton-repeat.svg'
const imagenRepeat = '/assets/img/icons/boton-repeat-1-activo.svg'
const imagenNoVolume = '/assets/img/icons/Speaker_Icon.svg'
const imagenVolume = '/assets/img/icons/Speaker_Icon-on.svg'

volumen.style.backgroundSize = `100% 100%`;

cancion.ontimeupdate = actualizar;

function convertir(segundos){
    minutos = Math.floor(segundos/60)
    segundos = Math.floor(segundos % 60)  

    if(segundos<10){
        tiempo = minutos + ':0'  +segundos
    }else{
        tiempo = minutos + ':'  +segundos
    }
    
    return tiempo;
}

function actualizar(){
    document.getElementById('tiempo-total').innerHTML =convertir(cancion.duration)
    document.getElementById('tiempo-actual').innerHTML =convertir(cancion.currentTime)

    const pos = (cancion.currentTime * 100) / cancion.duration
    timeline.style.backgroundSize = `${pos}% 100%`;
    timeline.value = pos
}    

function cambiarBarra(){
    tiempo = (timeline.value * cancion.duration) /100
    cancion.currentTime = tiempo
}

function cambiarBarraSonido(){
    const posVol = (volumen.value)/100
    cancion.volume= posVol
    volumen.style.backgroundSize = `${posVol*100}% 100%`;

    if (cancion.volume == 0){
        speaker.src = imagenNoVolume
    }else{
        speaker.src = imagenVolume
    }
}

function repetirAudio(){
    if(cancion.loop){
        cancion.loop = false
        botonRepeat.src = imagenNoRepeat
    }else{
        cancion.loop = true
        botonRepeat.src = imagenRepeat;
    }

    
}

function toggleAudio(){
    if(cancion.paused){
        cancion.play()
        botonPlay.src = imagenPausa
    }else{
        cancion.pause()
        botonPlay.src = imagenPlay
    }
}
