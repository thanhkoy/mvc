$(document).ready(function () {
    $('#datatable').DataTable({
        "ordering": false,
//                "searching": false,
        "info": false,
        "lengthChange": false
    });
});

$(document).ready(function () {
    $('#datatable2').DataTable({
        "ordering": false,
//                "searching": false,
        "info": false,
        "lengthChange": false
    });
});

function fillFormEditPH(id, name, cmnd) {
    document.getElementById('ph_id').value = id;
    document.getElementById('ph_name').value = name;
    document.getElementById('ph_cmnd').value = cmnd;
}

function fillFormEditHS(id, name, ngaysinh) {
    document.getElementById('hs_id').value = id;
    document.getElementById('hs_name').value = name;
    document.getElementById('hs_ngaysinh').value = ngaysinh;
}

function validateAddHS() {
    if (document.addHS.name.value === "") {
        alert("Bạn cần nhập tên");
        return false;
    }
    if (document.addHS.ngaysinh.value === "") {
        alert("Bạn cần nhập ngày tháng năm sinh");
        return false;
    }
}

function validateEditHS() {
    if (document.editHS.name.value === "") {
        alert("Bạn cần nhập tên");
        return false;
    }
    if (document.editHS.ngaysinh.value === "") {
        alert("Bạn cần nhập ngày tháng năm sinh");
        return false;
    }
}

function validateAddPH() {
    if (document.addPH.name.value === "") {
        alert("Bạn cần nhập tên");
        return false;
    }
    if (document.addPH.cmnd.value === "") {
        alert("Bạn cần nhập số chứng minh nhân dân");
        return false;
    }
    if (isNaN(document.addPH.cmnd.value)) {
        alert("Chứng minh nhân dân phải là số");
        document.addPH.cmnd.focus();
        return false;
    }
}

function validateEditPH() {
    if (document.editPH.name.value === "") {
        alert("Bạn cần nhập tên");
        return false;
    }
    if (document.editPH.cmnd.value === "") {
        alert("Bạn cần nhập số chứng minh nhân dân");
        return false;
    }
    if (isNaN(document.editPH.cmnd.value)) {
        alert("Chứng minh nhân dân phải là số");
        document.editPH.cmnd.focus();
        return false;
    }
}

function confirmDelete() {
    var x = confirm("Bạn có muốn xoá?");
    if (x == true) {
        return true;
    }
    else {
        return false;
    }
}

