const loadTheme = () => {
    if (localStorage.theme && localStorage.theme === 'dark') {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }
}

export {
    loadTheme,
}
