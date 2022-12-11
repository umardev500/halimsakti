window.addEventListener("load", function () {
    const data = document.querySelectorAll(".testi-body");
    let position = 0;
    let timeout;

    function loopSlide(data, i, todo) {
        if (i < data.length) {
            const text = data[i].innerText;
            const wpm = 225;
            const words = text.trim().split(/\s+/).length;
            const time = words / wpm;
            const timeOut = Math.ceil(time * 60000);
            console.log("move time (seconds):", timeOut / 1000, 'w:', words);

            timeout = setTimeout(() => {
                // if (i + 1 != data.length) todo(i);
                todo(i);
                position += 1;
                if (position == data.length) position = position - 1;

                loopSlide(data, i + 1, todo);
            }, timeOut);
        } else {
            clearTimeout(timeout);

            // restart
            loopSlide(data, 0, todo);
        }
    }

    // detect dot movement
    setTimeout(() => {
        setInterval(() => {
            const dotList = document
                .querySelectorAll(".slick-dots")[1]
                .querySelectorAll("li");

            for (let i = 0; i < dotList.length; i++) {
                const isDotOn = dotList[i].classList.contains("slick-active");
                if (isDotOn) {
                    if (position != i) {
                        this.clearTimeout(timeout);
                        position = i;
                        loopSlide(data, position, function (i) {
                            const nextBtn = document.querySelector(
                                "#testimonial > button:nth-child(3)"
                            );
                            nextBtn.click();
                        });
                    }
                }
            }
        }, 500);
    }, 500);

    loopSlide(data, 0, function (i) {
        const nextBtn = document.querySelector(
            "#testimonial > button:nth-child(3)"
        );
        nextBtn.click();
    });
});
