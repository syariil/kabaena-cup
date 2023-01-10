function toggles(){
    const togglee = document.getElementById('navbar-admin');
    if (togglee.classList[0] === 'hidden'){
        return togglee.classList.replace('hidden', 'block')
    }
    if (togglee.classList[0] === 'block'){
        return togglee.classList.replace('block', 'hidden')
    }
}
