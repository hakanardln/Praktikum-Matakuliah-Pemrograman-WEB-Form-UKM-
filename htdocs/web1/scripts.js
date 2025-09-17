async function loadData() {
    const res = await fetch("data.json");
    const data = await res.json();
    data.provinsi.forEach(prov => {
        provinsi.insertAdjacentHTML("beforeend", `<option
value="${prov.id}">${prov.nama}</option>`);
    });
    provinsi.addEventListener("change", e => {
        kabupaten.innerHTML = "<option value=''>-- Pilih Kabupaten --</option>";
        if (data.kabupaten[e.target.value]) {
            data.kabupaten[e.target.value].forEach(kab => {
                kabupaten.insertAdjacentHTML("beforeend", `<option>${kab}</option>`);
            });
        }
    });
}
loadData();

function validasiForm() {
    let nama = document.getElementById("nama").value.trim();
    let email = document.getElementById("email").value.trim();
    let hp = document.getElementById("hp").value.trim();
    let password = document.getElementById("password").value.trim();
    let errorMsg = document.getElementById("error-msg"); errorMsg.textContent = "";
    if (nama.length < 3) { errorMsg.textContent = "Nama minimal 3 karakter"; return false; }
    if (!email.includes("@")) { errorMsg.textContent = "Format email tidak valid"; return false; }
    if (hp.length < 10 || !/^\d+$/.test(hp)) { errorMsg.textContent = "Nomor HP harus angka minimal 10 digit"; }
    if (password.length < 8) { errorMsg.textContent = "Password minimal 8 karakter"; return false; } return true;
}