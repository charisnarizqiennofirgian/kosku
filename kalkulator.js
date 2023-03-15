function tambah() {
  var form = document.getElementById("kalkulator");
  var a1 = parseFloat(form.angka.value);
  var a2 = parseFloat(form.angka2.value);
  var total = a1 + a2;
  form.hasil.value = total;
}

function kurang() {
  var form = document.getElementById("kalkulator");
  var a1 = parseFloat(form.angka.value);
  var a2 = parseFloat(form.angka2.value);
  var total = a1 - a2;
  form.hasil.value = total;
}

function hitung() {
  var form = document.getElementById("kalkulator");
  var a1 = parseFloat(form.angka1.value);
  var a2 = parseFloat(form.angka2.value);

  // Validasi
  if (isNaN(a1) || isNaN(a2)) {
    alert("Tolong Masukan Angka!!!");
  } else {
    var action = event.target.value;
    switch (action) {
      case "tambah":
        var total = a1 + a2;
        break; // tambaha
      case "kurang":
        var total = a1 - a2;
        break; // pengurangan
      case "kali":
        var total = a1 * a2;
        break; // Perkalian
      case "bagi":
        var total = a1 / a2;
        break; // Pembagian
      case "pangkat":
        var total = a1 ** a2;
        break; // Pangkat
      default:
        break;
    }
    form.hasil.value = total;
  }
}
