
// example images
const posts = [];
const images = [
    '/assets/images/services/01.jpg',
    '/assets/images/services/02.jpg',
    '/assets/images/services/03.jpg',
    '/assets/images/services/04.jpg',
    '/assets/images/services/05.jpg',
    '/assets/images/services/06.jpg',
    '/assets/images/services/07.jpg',
    '/assets/images/services/08.jpg',
    '/assets/images/services/09.jpg',
    '/assets/images/services/10.jpg',
    '/assets/images/services/11.jpg',
    '/assets/images/services/12.jpg',
    
];
let imageIndex = 0;
for (let i = 1; i <= 12; i++) {
    let item = {
        id: i,
        title: `Post ${i}`,
        image: images[imageIndex],
    };
    posts.push(item);
    imageIndex++;
    if (imageIndex > images.length - 1) imageIndex = 0;
}
