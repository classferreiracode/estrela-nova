import axios from 'axios'

const api = axios.create({
    baseURL: import.meta.env.VITE_API_URL || '/api',
    headers: {
        'Content-Type': 'application/json',
        Accept: 'application/json',
    },
})

export function getBlogPosts() {
    return api.get('/blog-posts').then((r) => r.data)
}

export function getBlogPost(slug) {
    return api.get(`/blog-posts/${slug}`).then((r) => r.data)
}

export function getMembers() {
    return api.get('/members').then((r) => r.data)
}

export function getTimelineEvents() {
    return api.get('/timeline-events').then((r) => r.data)
}

export function submitContact(data) {
    return api.post('/contacts', data).then((r) => r.data)
}

export function getProjects() {
    return api.get('/projects').then((r) => r.data)
}

export function getTestimonials() {
    return api.get('/testimonials').then((r) => r.data)
}

export function getDocuments() {
    return api.get('/documents').then((r) => r.data)
}

export function getSponsors() {
    return api.get('/sponsors').then((r) => r.data)
}

export function getSettings() {
    return api.get('/settings').then((r) => r.data)
}

export default api
