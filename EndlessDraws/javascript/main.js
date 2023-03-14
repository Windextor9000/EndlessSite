const pictures = document.querySelectorAll('.picture');
    const body = document.querySelector('body');

    pictures.forEach(picture => {
    picture.addEventListener('click', () => {
        const enlargedPicture = document.createElement('div');
        const pictureSrc = picture.getAttribute('src');
        enlargedPicture.innerHTML = `<img src="${pictureSrc}" class="enlarged-picture">`;
        enlargedPicture.classList.add('enlarged-picture-container');
        body.appendChild(enlargedPicture);
        enlargedPicture.classList.add('dark-screen');
        enlargedPicture.addEventListener('click', () => {
        body.removeChild(enlargedPicture);
        body.classList.remove('dark-screen');
        });
    });
    });