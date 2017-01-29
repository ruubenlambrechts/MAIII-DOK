const init = () => {

  console.log(`Hello, MA3_DOK`);
  search(`cat`);

};

const checkStatus = response => {
  if (!response.ok) throw Error(response.statusText);
  return response;
};

const loadImage = data => {
  data = data.data;
  const gif = data[Math.floor(Math.random() * data.length)];
  // console.log(gif);

  const $img = document.querySelector(`.error_gif_result`);
  $img.src = gif.images.original.url;
};

const search = value => {
  const url = `http://api.giphy.com/v1/gifs/search?q=${value}&api_key=dc6zaTOxFJmzC`;
  fetch(url)
  .then(checkStatus)
      .then(r => r.json())
      .then(loadImage);
};

init();
