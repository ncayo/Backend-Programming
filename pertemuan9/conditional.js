const nilai = 92;
let grade = "";

if (nilai > 90) {
  grade = "A";
} else if (nilai > 80) {
  grade = "B";
} else {
  grade = "C";
}

console.log(`Grade Anda: ${grade}`);

const age = 19;

// if (age > 21) {
//   console.log("Sudah Dewasa");
// } else {
//   console.log("Belum Dewasa");
// }

// menggunakan short conditional (ternary operator)
age > 21 ? console.log("Sudah Dewasa") : console.log("Belum Dewasa");