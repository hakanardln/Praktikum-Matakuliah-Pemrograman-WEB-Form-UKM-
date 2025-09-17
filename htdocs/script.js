// Ambil elemen select
const provinsi = document.getElementById("provinsi");
const kabupaten = document.getElementById("kabupaten");

// Load data provinsi & kabupaten
async function loadData() {
    const res = await fetch("data.json");
    const data = await res.json();

    // Tambah provinsi ke dropdown
    data.provinsi.forEach(prov => {
        provinsi.insertAdjacentHTML("beforeend", `<option value="${prov.id}">${prov.nama}</option>`);
    });

    // Event: ketika provinsi berubah → isi kabupaten
    provinsi.addEventListener("change", e => {
        kabupaten.innerHTML = "<option value=''>-- Pilih Kabupaten --</option>";
        if (data.kabupaten[e.target.value]) {
            data.kabupaten[e.target.value].forEach(kab => {
                kabupaten.insertAdjacentHTML("beforeend", `<option>${kab}</option>`);
            });
        }
    });
}

// Fungsi validasi form
function validasiForm() {
    let nama = document.getElementById("nama").value.trim();
    let email = document.getElementById("email").value.trim();
    let hp = document.getElementById("hp").value.trim();
    let password = document.getElementById("password").value.trim();
    let errorMsg = document.getElementById("error-msg");

    errorMsg.textContent = "";

    if (nama.length < 3) {
        errorMsg.textContent = "Nama minimal 3 karakter";
        return false;
    }
    if (!email.includes("@")) {
        errorMsg.textContent = "Format email tidak valid";
        return false;
    }
    if (hp.length < 10 || !/^\d+$/.test(hp)) {
        errorMsg.textContent = "Nomor HP harus angka minimal 10 digit";
        return false;
    }
    if (password.length < 8) {
        errorMsg.textContent = "Password minimal 8 karakter";
        return false;
    }
    return true;
}

// Panggil fungsi load data saat halaman siap
loadData();
