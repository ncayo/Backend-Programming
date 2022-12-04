/**
 * TODO 9:
 * - Import semua method FruitController
 * - Refactor variable ke ES6 Variable
 *
 * @hint - Gunakan Destructing Object
 */

 const {index, store, update, destroy} = 
 require("./Controllers/FruitController.js");
 
  /**
   * NOTES:
   * - Fungsi main tidak perlu diubah
   * - Jalankan program: nodejs app.js
   */
  const main = () => {
    console.log("Method index - Menampilkan Buah");
    index();
    console.log("");
    store("Pisang");
    console.log("");
    update(0, "Kelapa");
    console.log("");
    destroy(0);
  };
  
  main();
