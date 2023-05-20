
// example images
const posts = [];
const images = [
    '/assets/images/services/service-details-v1-1.jpg',
    '/assets/images/services/service-details-v1-2.jpg',
    '/assets/images/services/service-details-v1-3.jpg',
    '/assets/images/services/service-details-v2-1.jpg',
    '/assets/images/services/service-details-v3-1.jpg',
    '/assets/images/services/service-details-v4-1.jpg',
    '/assets/images/services/service-details-v5-1.jpg'
    
];
let imageIndex = 0;
for (let i = 1; i <= 10; i++) {
    let item = {
        id: i,
        title: `Post ${i}`,
        image: images[imageIndex],
    };
    posts.push(item);
    imageIndex++;
    if (imageIndex > images.length - 1) imageIndex = 0;
}
