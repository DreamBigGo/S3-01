const images = [
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_190118_180803.bmp",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_120117_102611.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_011221_084924.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_110524_185211.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195608.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_101025_143955.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195851.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_250918_162238.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_120117_102605.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195636.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_120117_102550.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_070817_214643.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_261121_113347.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195935.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_210717_221931.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195719.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_011221_090444.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_200024.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_201112.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195754.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_201045.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_234854.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_200046.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_110225_160028.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_210125_163634.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195954.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_090917_113345.JPG",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_010623_232010.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195830.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_120117_102544.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_120117_102537.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195654.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_120117_102532.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_200010.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_200921.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_261121_114714.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_200109.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_171121_174752.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195810.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_200122.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_101224_190054.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_120117_102629.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_201020.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_250918_162021.jpg",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_140925_195738.png",
    "https://www.agirabcd.eu/offres/image_inline_src/776/Alb_1979_2000_776_imgO_270317_154646.jpg"
];

const carousel = document.querySelector('.carrousel-track');

images.concat(images).forEach(src => {
    const img = document.createElement('img');
    img.src = src;
    carousel.appendChild(img);
});