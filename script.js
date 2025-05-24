// const mahasiswa = {
//     Nama : "Ikhwanul Rizki",
//     NIM : "2217020148",
//     Matkul: "Integrasi Aplikasi Perusahaan"
// }

// console.log(JSON.stringify(mahasiswa));

// const xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if(xhr.readyState == 4 && xhr.status == 200) {
//         const mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa)
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('coba.json', function (data) {
    console.log(data);
});