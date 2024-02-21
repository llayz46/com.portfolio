// Récupérer le bouton 'style'
const styleBtn = document.querySelector('.js-style')

// Récupérer le background donc le 'body'
const background = document.querySelector('.js-body')

// Récupérer la bordure des checkbox
const checkboxBdr = document.querySelector('.checkbox')

// Fonction pour générer une couleur aléatoire
const randomColor = () => {
    let color = '#'

    // Générer des valeurs RGB aléatoires
    for (let i = 0; i < 6; i++) {
        color += Math.floor(Math.random() * 16).toString(16) // Génère une valeur hexadécimale entre 0 et F
    }

    return `linear-gradient(45deg, ${color} 0%, ${darkenColor(color, 50)} 100%)`
}

// Fonction pour assombrir une couleur
function darkenColor(color, percentage) {

    // Convertir la couleur hexadécimale en valeurs RGB
    let r = parseInt(color.substring(1, 3), 16)
    let g = parseInt(color.substring(3, 5), 16)
    let b = parseInt(color.substring(5, 7), 16)

    // Calculer le pourcentage d'assombrissement
    const facteur = 1 - (percentage / 100)

    // Assombrir chaque composante RGB
    r = Math.floor(r * facteur)
    g = Math.floor(g * facteur)
    b = Math.floor(b * facteur)

    // Convertir les valeurs RGB en couleur hexadécimale
    return "#" + ("0" + r.toString(16)).slice(-2) + ("0" + g.toString(16)).slice(-2) + ("0" + b.toString(16)).slice(-2)
}

const randomStyle = () => {
    styleBtn.addEventListener('click', () => {
        background.style.background = randomColor()
    })
}
randomStyle()