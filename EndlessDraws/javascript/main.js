const pictures = document.querySelectorAll('.picture');
const body = document.querySelector('body');

pictures.forEach((picture, index) => {
  picture.addEventListener('click', () => {
    const originalIndex = index;
    const enlargedPicture = document.createElement('div');
    const pictureSrc = picture.getAttribute('src');
    enlargedPicture.innerHTML = `<img src="${pictureSrc}" class="enlarged-picture">`;
    enlargedPicture.classList.add('enlarged-picture-container');
    body.appendChild(enlargedPicture);
    enlargedPicture.classList.add('dark-screen');

    const showNextPicture = (currentIndex) => {
      currentIndex = (currentIndex + 1) % pictures.length;
      const nextPictureSrc = pictures[currentIndex].getAttribute('src');
      enlargedPicture.querySelector('.enlarged-picture').src = nextPictureSrc;
      return currentIndex;
    };

    const showPreviousPicture = (currentIndex) => {
      currentIndex = (currentIndex - 1 + pictures.length) % pictures.length;
      const previousPictureSrc = pictures[currentIndex].getAttribute('src');
      enlargedPicture.querySelector('.enlarged-picture').src = previousPictureSrc;
      return currentIndex;
    };

    enlargedPicture.addEventListener('click', (event) => {
      const clickPosition = event.clientX - enlargedPicture.getBoundingClientRect().left;
      const halfWidth = enlargedPicture.clientWidth / 2;

      if (event.target.classList.contains('enlarged-picture')) {
        if (clickPosition > halfWidth) {
          index = showNextPicture(index);
        } else {
          index = showPreviousPicture(index);
        }
      } else {
        body.removeChild(enlargedPicture);
        body.classList.remove('dark-screen');
        index = originalIndex;
      }
    });
  });
});
