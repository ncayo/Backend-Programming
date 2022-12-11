/**
 * 
 * @param {string} resault - Nama file yang di download
 */

const showDownload = () => {
  return new Promise((resolve) => {
      setTimeout(() => {
          resolve("Download Selesai");
      }, 3000);
  });
};

const result = "Windows-10.exe";
const download = () => {
  return new Promise((resolve) => {
      setTimeout(() => {
          resolve("Hasil Download : " + result);
      }, 3000);
  });
};

// consuning async-await
const main = async () => {
  console.log(await showDownload());
  console.log(await download());
}

main();

/**
 * TODO:
 * - Refactor callback ke Promise atau Async Await
 * - Refactor function ke ES6 Arrow Function
 * - Refactor string ke ES6 Template Literals
 */
