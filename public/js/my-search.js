window.addEventListener("load", function () {
    const btnSearch = document.querySelector(".my-btn-search");
    const searchView = document.querySelector(".my-search-view");
    const overlay = document.querySelector(".my-overlay");
    const searchInput = document.querySelector(".my-search-input");
    const suggestionView = document.querySelector(".my-search-suggestion");

    async function fetchProduct() {
        try {
            const responses = await fetch("/products", {
                method: "GET",
                headers: {
                    accept: "application/json",
                },
            });

            const data = await responses.json();
            return data;
        } catch (err) {
            console.log(err);
            return err;
        }
    }

    fetchProduct().then(function (data) {
        searchInput.addEventListener("input", function (e) {
            suggestionView.innerHTML = "";

            const userType = searchInput.value.toLowerCase();

            let counter = 0;

            for (let i = 0; i < data.length; i++) {
                const desc = data[i].description_sub_eng;
                const nameEng = data[i].product_nama_eng
                    .toLowerCase()
                    .indexOf(userType);

                if (nameEng > -1 || desc.toLowerCase().indexOf(userType) > -1) {
                    counter++;
                    const a = document.createElement("a");

                    const b = document.createTextNode(data[i].product_nama_eng);

                    const c = document.createElement("p");
                    c.setAttribute("style", "margin: 0");
                    c.classList.add("search-text");

                    const descIndex = desc.toLowerCase().indexOf(userType);

                    const descText = desc
                        .substring(descIndex, descIndex + 50)
                        .substring(userType.length);

                    const textHigliht = desc.substring(
                        descIndex,
                        descIndex + userType.length
                    );

                    const highlight = document.createElement("span");
                    highlight.innerText = textHigliht;
                    highlight.classList.add("search-match-text");
                    const descEl = document.createElement("span");
                    descEl.innerText = descText;

                    c.appendChild(highlight);
                    c.appendChild(descEl);
                    // c.innerText = descText;

                    a.appendChild(b);
                    a.appendChild(c);
                    a.setAttribute("href", "/products/" + data[i].product_slug);

                    suggestionView.appendChild(a);
                }
            }

            if (counter < 1) {
                const a = document.createElement("a");
                const b = document.createTextNode("Not found");
                a.appendChild(b);
                a.setAttribute("class", "not-found");

                suggestionView.appendChild(a);
            }

            if (userType == "") {
                suggestionView.innerHTML = ""
            }
        });
    });

    let isSearchOpen = false;

    function makeBodyNotScrolling(status) {
        if (status === true) {
            document.body.style = "overflow: hidden";
        } else {
            document.body.style = "overflow: unset";
        }
    }

    btnSearch.addEventListener("click", function () {
        makeBodyNotScrolling(true);

        if (!isSearchOpen) {
            isSearchOpen = true;
        } else {
            isSearchOpen = false;
        }

        if (isSearchOpen) {
            searchInput.value = "";
            searchView.classList.add("show");
            overlay.classList.add("show");
            searchInput.focus();
        } else {
            searchView.classList.remove("show");
            overlay.classList.remove("show");
            suggestionView.innerHTML = "";
        }
    });

    overlay.addEventListener("click", function () {
        makeBodyNotScrolling(false);

        searchView.classList.remove("show");
        overlay.classList.remove("show");
        suggestionView.innerHTML = "";
        isSearchOpen = false;
    });

    document.addEventListener("keyup", function (e) {
        if (e.key === "Escape") {
            makeBodyNotScrolling(false);

            searchView.classList.remove("show");
            overlay.classList.remove("show");
            suggestionView.innerHTML = "";
            isSearchOpen = false;
        }
    });
});
