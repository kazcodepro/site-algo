const seasons = {
    "s2": 4,
    "s3": 6,
    "s4": 8,
    "s5": 11,
    "s6": 17,
    "s7": 7,
    "s8": 7
}

function seasonButton() {
    const seasonButtons = document.querySelectorAll(".season-button")

    for (let i=0; i < seasonButtons.length; i++) {
        let button = seasonButtons[i]
        button.addEventListener("click", function(){
            const epButtons = document.querySelectorAll(".ep-button")
            for (let j=0; j < epButtons.length; j++) {
                let epbutton = epButtons[j]
                document.querySelector(".ep-container").removeChild(epbutton)
            }

            for (let k=1; k <= seasons[button.id]; k++) {
                    let newEpButton = document.createElement("a")
                    newEpButton.href = `../${button.id}/exo${k}.php`
                    newEpButton.className = "ep-button"
                    newEpButton.textContent = k

                    document.querySelector(".ep-container").appendChild(newEpButton)
                }
        })
    }
}

function codeButtons() {
    const buttons = document.querySelectorAll(".code-btn")
    
    for (let i=0; i < buttons.length; i++) {
        let button = buttons[i]
        button.addEventListener("click", function(){
            const textAreas = document.querySelectorAll("#text-area")

            for (let j=0; j < textAreas.length; j++) {
                let textarea = textAreas[j]
                textarea.style.display = "none"
            }

            const textArea = document.querySelector(`.${button.id}`)
            textArea.style.display = "flex"
        })
    }
}

seasonButton()
codeButtons()