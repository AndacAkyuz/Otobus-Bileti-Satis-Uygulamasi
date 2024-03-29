
let seferler = [];
let visibleSeferler = 5; // Initial number of visible seferler

function showPopup(title) {
    document.getElementById('popupTitle').innerText = title;
    document.getElementById('popup').style.display = 'block';
    document.getElementById('popupOverlay').style.display = 'block';
}

function hidePopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('popupOverlay').style.display = 'none';
}

function sortSeferler() {
    seferler.sort((a, b) => new Date(b.kalkis) - new Date(a.kalkis));
    displaySeferler();
}

function showMoreSeferler() {
    visibleSeferler += 5;
    displaySeferler();
}

function displaySeferler() {
    const seferContainer = document.getElementById('seferContainer');
    seferContainer.innerHTML = '';

    seferler.slice(0, visibleSeferler).forEach(sefer => {
        const seferDiv = document.createElement('div');
        seferDiv.classList.add('sefer');

        const titleElement = document.createElement('h2');
        titleElement.innerHTML = `<a href="#" onclick="showPopup('${sefer.title}')">${sefer.title}</a>`;
        seferDiv.appendChild(titleElement);

        const contentElement = document.createElement('p');
        contentElement.innerText = sefer.content;
        seferDiv.appendChild(contentElement);

        seferContainer.appendChild(seferDiv);
    });

    // Display or hide the "Show More" button based on the number of visible seferler
    const showMoreButton = document.getElementById('showMoreButton');
    if (visibleSeferler < seferler.length) {
        showMoreButton.style.display = 'block';
    } else {
        showMoreButton.style.display = 'none';
    }
}
seferler.push({
  title: 'İstanbul - Ankara Seferi',
  content: 'Kalkış Saati: 08:00, Varış Saati: 15:00, Varış Yeri: Ankara, Otobüs Plakası: 34 ABC 123',
});


// Initial display
displaySeferler();
