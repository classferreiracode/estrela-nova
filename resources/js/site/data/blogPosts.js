import blogPostsData from './blogPosts.json'
import blogImage1 from '@/assets/images/6.png'
import blogImage2 from '@/assets/images/7.png'
import blogImage3 from '@/assets/images/8.png'

const imageMap = {
    '6.png': blogImage1,
    '7.png': blogImage2,
    '8.png': blogImage3,
}

const blogPosts = blogPostsData.map((post) => ({
    ...post,
    imageSrc: imageMap[post.image] || post.image,
}))

export { blogPosts }
