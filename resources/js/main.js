// Define Button Sentiment
const ulasan = document.getElementById("text-ulasan");
const API_URL = "https://big-sasha-pk-kelompok-6-336d1400.koyeb.app/predict";
const loading_bar = document.getElementById("loading-bar");
const txt_kirim = document.getElementById("text-kirim");
const getSentimentFromAPI = async () => {
    if (ulasan.value.length > 0 && ulasan.value.length < 55) {
        loading_bar.classList.remove("hidden");
        txt_kirim.classList.add("hidden");
        await fetchSentiment(ulasan.value);
    } else {
        alert(
            "Kamu harus mengisi minimal 2 karakter dan maksimal 55 karakter!"
        );
    }
};

const fetchSentiment = (text_ulasan) => {
    const parsedText = {
        text: text_ulasan,
    };

    // Options untuk fetch request
    const options = {
        method: "POST", // atau 'GET', 'PUT', 'DELETE', dll.
        headers: {
            "Content-Type": "application/json", // Menentukan tipe konten sebagai JSON
        },
        body: JSON.stringify(parsedText), // Mengubah body object menjadi string JSON
    };

    fetch(API_URL, options)
        .then((response) => {
            if (!response.ok) {
                console.log(response.status);
                throw new Error(
                    "Network response was not ok " + response.statusText
                );
            }
            return response.json(); // Mengambil respons sebagai JSON
        })
        .then(async (data) => {
            console.log("Success:", data);
            await createNewComment(text_ulasan, data.prediction);
            // Lakukan sesuatu dengan data respons di sini
        })
        .catch((error) => {
            console.error("Error:", error);
            // Tangani kesalahan di sini
        });
};

const createNewComment = (text, sentiment) => {
    let new_sentiment = "";
    console.log(sentiment);
    if (sentiment === "positive") {
        new_sentiment = "positif";
    } else if (sentiment === "negative") {
        new_sentiment = "negatif";
    } else {
        new_sentiment = "netral";
    }

    console.log(new_sentiment);

    const parsedText = {
        ulasan: text,
        sentimen: new_sentiment,
    };

    const options = {
        method: "POST", // atau 'GET', 'PUT', 'DELETE', dll.
        headers: {
            "Content-Type": "application/json", // Menentukan tipe konten sebagai JSON
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify(parsedText), // Mengubah body object menjadi string JSON
    };

    fetch("https://webparkingiot.6l9.dev/create-sentiment", options)
        .then((response) => {
            if (!response.ok) {
                console.log(response.status);
                throw new Error(
                    "Network response was not ok " + response.statusText
                );
            }
            return response.json();
        })
        .then((data) => {
            console.log("Success:", data);
            loading_bar.classList.add("hidden");
            txt_kirim.classList.remove("hidden");
            window.open("/sentiment", "_self");
            // Lakukan sesuatu dengan data respons di sini
        })
        .catch((error) => {
            console.error("Error:", error);
            // Tangani kesalahan di sini
        });
};

window.getSentimentFromAPI = getSentimentFromAPI;
// Filter Sentiment
const bg_filter_arr = ["bg-green-300", "bg-red-300", "bg-slate-300"];
const filter_sentiment = document.getElementById("filter-sentimen");
if (filter_sentiment) {
    filter_sentiment.addEventListener("change", function (e) {
        const green = filter_sentiment.classList.contains(bg_filter_arr[0]);
        const red = filter_sentiment.classList.contains(bg_filter_arr[1]);

        if (green) {
            filter_sentiment.classList.remove(bg_filter_arr[0]);
        } else if (red) {
            filter_sentiment.classList.remove(bg_filter_arr[1]);
        } else {
            filter_sentiment.classList.remove(bg_filter_arr[2]);
        }

        let filter_value = e.target.value;
        switch (filter_value) {
            case "positif":
                filter_sentiment.classList.add(bg_filter_arr[0]);
                break;
            case "negatif":
                filter_sentiment.classList.add(bg_filter_arr[1]);
                break;
            case "netral":
                filter_sentiment.classList.add(bg_filter_arr[2]);
                break;
            default:
                break;
        }
    });
}

// Filter Parking

const bg_filter_parking_arr = ["bg-green-300", "bg-red-300"];
const filter_parking = document.getElementById("filter-parking");
const filter_parking_m = document.getElementById("filter-parking-m");
if (filter_parking) {
    filter_parking.addEventListener("change", function (e) {
        console.log(e.target.value);
        const green = filter_parking.classList.contains(bg_filter_arr[0]);

        if (green) {
            filter_parking.classList.remove(bg_filter_arr[0]);
        } else {
            filter_parking.classList.remove(bg_filter_arr[1]);
        }

        let filter_value = e.target.value;
        switch (filter_value) {
            case "kosong":
                filter_parking.classList.add(bg_filter_arr[0]);
                break;
            case "terisi":
                filter_parking.classList.add(bg_filter_arr[1]);
                break;
            default:
                break;
        }
    });
}

if (filter_parking_m) {
    filter_parking_m.addEventListener("change", function (e) {
        console.log(e.target.value);
        const green = filter_parking_m.classList.contains(bg_filter_arr[0]);

        if (green) {
            filter_parking_m.classList.remove(bg_filter_arr[0]);
        } else {
            filter_parking_m.classList.remove(bg_filter_arr[1]);
        }

        let filter_value = e.target.value;
        switch (filter_value) {
            case "kosong":
                filter_parking_m.classList.add(bg_filter_arr[0]);
                break;
            case "terisi":
                filter_parking_m.classList.add(bg_filter_arr[1]);
                break;
            default:
                break;
        }
    });
}
