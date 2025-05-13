function preloadAndAddClass(images) {
    const promises = [];

    images.forEach(img => {
        // Add your class to the image
        img.classList.add('your-class-name');

        // Preload the image
        const promise = new Promise((resolve, reject) => {
            const image = new Image();
            image.onload = () => {
                resolve(img);
            };
            image.onerror = (error) => {
                reject(error);
            };
            image.src = img.src;
        });

        promises.push(promise);
    });

    return Promise.all(promises);
}

const allImages = document.querySelectorAll('img');
const mainn = document.getElementById("app");
const preload = document.querySelector(".containerr");
preloadAndAddClass(allImages)
    .then((preloadedImages) => {
        mainn.style.display = "block";
        preload.style.display = "none";
    })
    .catch((error) => {
        console.error('Error during preloading');
    });