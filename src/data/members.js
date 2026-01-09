import membersData from './members.json'
import defaultAvatar from '@/assets/images/5.png'

const avatarMap = {
    '5.png': defaultAvatar,
}

const members = membersData.map((group) => ({
    ...group,
    members: group.members.map((member) => ({
        ...member,
        avatarSrc: avatarMap[member.avatar] || member.avatar || defaultAvatar,
    })),
}))

export { members }
