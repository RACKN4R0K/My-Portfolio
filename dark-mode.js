const html = document.querySelector("html")
const checkbox = document.querySelector("input[name=theme]")

const getStyle = (element, style) => 
    window
        .getComputedStyle(element)
        .getPropertyValue(style)


const initialColors = {
    bgHeader: getStyle(html, "--bg-header"),
    colorCurriculo: getStyle(html, "--color-curriculo"),
    colorText: getStyle(html, "--color-text"),
    bgConteudo: getStyle(html, "--bg-conteudo"),
    colorButon: getStyle(html, "--color-buton"),
    colorCard: getStyle(html, "--color-card"),
    colorCurriculoBefore: getStyle(html, "--color-curriculo-before"),
}

const darkMode = {
    bgHeader:"#333333",
    colorText: "#fff",
    colorButon: "fff",
    bgConteudo: "#111",
    colorCurriculoBefore: "#ddd",
    colorCard: "#fff"
}

const transformKey = key => 
    "--" + key.replace(/([A-Z])/, "-$1").toLowerCase()


const changeColors = (colors) => {
    Object.keys(colors).map(key => 
        html.style.setProperty(transformKey(key), colors[key]) 
    )
}

checkbox.addEventListener("change", ({target}) => {
    target.checked ? changeColors(darkMode) : changeColors(initialColors)
})