function startMarquee(row, direction = "left", speed = 50) {
    const container = document.getElementById(row);
    const clone = container.innerHTML;
    container.innerHTML += clone;
    let offset = 0;

    function move() {
        offset += direction === "left" ? -1 : 1;
        if (Math.abs(offset) >= container.scrollWidth / 2) {
            offset = 0;
        }
        container.style.transform = `translateX(${offset}px)`;
        requestAnimationFrame(move);
    }

    move();
}

startMarquee("scrollRowLeft", "left");
startMarquee("scrollRowRight", "right");