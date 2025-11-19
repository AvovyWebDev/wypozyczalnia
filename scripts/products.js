const products = [
    {
        id: 1,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    },
    {
        id: 2,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    },
    {
        id: 3,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    },
    {
        id: 4,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    },
    {
        id: 5,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    },
    {
        id: 6,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    },
    {
        id: 7,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    },
    {
        id: 8,
        thumbnail: "./images/xx",
        name: "Kosiarka",
        desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam fugiat non nemo in aperiam?",
        price: 200,
        images: [
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx",
            "./images/xx"
        ],
        manufacturer: "Firma",
        manufacturersWebsite: "www.google.com"
    }
]


// Generating products

const productsElement = document.querySelector('.js-products');

generateProducts();

function generateProducts() {
    html = '';

    products.forEach(e => {
        html += `
        <div class="tile">
            <img src="" alt="">
            <div class="content">
                <div class="products-text">
                    <h1>${e.name}</h1>
                    <p>${e.desc}</p>
                </div>
                <div>
                    <button class="btn-primary">Więcej informacji</button>
                    <div class="price">${e.price}zł/dzień</div>
                </div>
            </div>
        </div>
        `
    })

    productsElement.innerHTML = html;
}