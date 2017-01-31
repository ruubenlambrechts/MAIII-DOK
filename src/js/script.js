const $img = document.querySelector(`.error_gif_result`);
const $filterButton = document.querySelector(`.filter_button`);
const $hamburgerIcon = document.querySelector(`.nav_hamburger_link`);

const checkStatus = response => {
  if (!response.ok) throw Error(response.statusText);
  return response;
};

const loadImage = data => {
  data = data.data;
  const gif = data[Math.floor(Math.random() * data.length)];
  // console.log(gif);

  $img.src = gif.images.original.url;
};

const search = value => {
  const url = `http://api.giphy.com/v1/gifs/search?q=${value}&api_key=dc6zaTOxFJmzC`;
  fetch(url)
  .then(checkStatus)
      .then(r => r.json())
      .then(loadImage);
};

const filterToggle = () => {
  const $agendaFilter = document.querySelector(`.agenda_filter`);
  const $filterBox = document.querySelector(`.agenda_filter_box`);

  $filterBox.classList.toggle(`hidden`);
  $agendaFilter.innerHTML = `Filter -`;

  if ($filterBox.classList.contains(`hidden`)) {
    $agendaFilter.innerHTML = `Filter +`;
  }
};

const hamburgerOpen = () => {
  const $hamburgerMenu = document.querySelector(`.nav_hamburger_menu`);

  $hamburgerMenu.classList.toggle(`hidden`);
};


const init = () => {

  if ($img) {
    search(`cat`);
  }

  if ($filterButton) {
    $filterButton.addEventListener(`click`, filterToggle);
  }

  if ($hamburgerIcon) {
    $hamburgerIcon.addEventListener(`click`, hamburgerOpen);
  }

};

init();
