export function useScroll() {
    const scrollTo = (selector) => {
        if (typeof selector !== 'string') {
            console.warn('Selector must be a string')
            return
        }
        const el = document.querySelector(selector)
        if (el) el.scrollIntoView({ behavior: 'smooth' })
    }
    return { scrollTo }
}
