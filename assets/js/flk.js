const numberOfSnowflakes = 15;

for (let i = 0; i < numberOfSnowflakes; i++) {
    createSnowflake();
}

function createSnowflake() {
    const snowflake = document.createElement('div');
    snowflake.classList.add('snowflake');
    snowflake.textContent = '$';
    document.querySelector('.snowflakes').appendChild(snowflake);

    const leftPosition = Math.random() * 100;
    const animationDuration = Math.random() * 10 + 15; // Random duration between 15s and 25s for slower animation
    const direction = Math.random() < 0.5 ? 'left' : 'right'; // Random direction
    const topPosition = Math.random() * 100;
    const bottomPosition = Math.random() * 100;
    snowflake.style.left = `${direction === 'left' ? leftPosition : 100 - leftPosition}vw`;
    snowflake.style.animationDuration = `${animationDuration}s`;
    snowflake.style.top = `${topPosition}vh`;
    snowflake.style.bottom = `${bottomPosition}vh`;
}