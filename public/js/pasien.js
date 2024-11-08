function editPasien(id){
    document.querySelector('.modal-create').style.display = "block";
    const patiens = document.querySelectorAll('tr[data-id="'+id+'"] td');
    const inputs = document.querySelectorAll('.modal-create-content-body input');
    const details = document.querySelectorAll('.detail')
    details.forEach(function(detail){
        detail.style.display = "block";
    })
    inputs.forEach(function(input){
        input.style.display = "none";
    })
    details[0].innerText = patiens[0].textContent;
    details[1].innerText = patiens[1].textContent;
    details[2].innerText = patiens[2].textContent;
    details[3].innerText = patiens[3].textContent;
    details[4].innerText = patiens[4].textContent;
    details[5].innerText = patiens[5].textContent;
    details[6].innerText = patiens[6].textContent;
    details[7].innerText = patiens[7].textContent;

    document.getElementById("tambah").style.display = "none";
    document.getElementById("ubah").style.display = "none"

    const columns = document.querySelectorAll('.column');
    columns[0].innerText = "Tempat lahir"
    columns[1].innerText = "Tanggal lahir"
    columns[2].innerText = "jenis kelamin"
    columns[3].innerText = "Alamat";
    columns[4].innerText = "keluhan"
}
document.querySelector('.modal-create-content-header span').addEventListener("click", function(e){
    e.preventDefault()
    document.querySelector('.modal-create').style.display = "none";
})

function DaftarPasien(id){
    document.querySelector('.modal-create').style.display = "block";
    document.querySelector("#ubah").style.display = "none";
    document.querySelector("#tambah").style.backgroundColor = "lawngreen";
    const patiens = document.querySelectorAll('tr[data-id="'+id+'"] td');
    const details = document.querySelectorAll('.detail')
    details.forEach(function(detail){
        detail.style.display = "none";
    })
    const inputs = document.querySelectorAll('.modal-create-content-body input');
    inputs.forEach(function(input){
        input.style.display = "block";
    })
    inputs[0].value = patiens[0].textContent;
    document.getElementById("tambah").style.display = "block";
    document.getElementById("ubah").style.display = "none"

    const columns = document.querySelectorAll('.column');
    columns[0].innerText = "Nama Dokter"
    columns[1].innerText = "Tanggal pemeriksaan"
    columns[2].innerText = "Tindakan medis"
    columns[3].innerText = "Resep obat";
    columns[4].innerText = "Tindakan medis"
}