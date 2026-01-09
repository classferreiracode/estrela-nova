import timelineData from './timeline.json'
import timelineImage from '@/assets/images/post_estrela_nova.png'

const imageMap = {
    '/src/assets/images/post_estrela_nova.png': timelineImage,
}

const timeline = timelineData.map((item) => ({
    ...item,
    image: imageMap[item.image] || item.image,
}))

export { timeline }
