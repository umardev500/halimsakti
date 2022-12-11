window.addEventListener("load", function () {
    setTimeout(() => {
        setInterval(() => {
            let prevArrow = document.querySelector(".prev-arrow");
            const slickPrev = document.querySelector(
                "#news > div.wrapper.news-list.my-slider-wrapper > div.the-slider.slick-initialized.slick-slider.slick-dotted > button.slick-prev.slick-arrow"
            );
            let nextArrow = document.querySelector(".next-arrow");
            const slickNext = document.querySelector(
                "#news > div.wrapper.news-list.my-slider-wrapper > div.the-slider.slick-initialized.slick-slider.slick-dotted > button.slick-next.slick-arrow"
            );

            prevArrow.addEventListener("click", function () {
                slickPrev.click();
            });

            nextArrow.addEventListener("click", function () {
                console.log("clicked");
                slickNext.click();
            });
        }, 100);

        // card slider
        $(".card-slider").slick({
            infinite: true,
            slidesToShow: 1,
            fade: true,
            cssEase: "linear",
            dots: true,
            autoplay: true,
            asNavFor: ".card-slider-right",
        });

        $(".card-slider-right").slick({
            infinite: true,
            slidesToShow: 1,
            fade: true,
            cssEase: "linear",
            autoplay: true,
            asNavFor: ".card-slider",
        });
    }, 500);
});
