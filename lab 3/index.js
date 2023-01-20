let rows = 0;
const tbl = document.createElement('table');

function toallow(){
    var addBtn = document.getElementById('add');
    var delBtn = document.getElementById('delete');
    var inputField = document.getElementById('number');
    addBtn.disabled = !addBtn.disabled;
    delBtn.disabled = !delBtn.disabled;
    inputField.disabled = !inputField.disabled;
}

function addrow(){
    let row = tbl.insertRow();
    row.insertCell().append(rows);
    row.insertCell().append("Степан");
    row.insertCell().append("Дубров");
    rows += 1;
}

function make(){
    if (document.getElementById('table')){
        alert("Таблица уже создана");
    }
    else{
        tbl.innerHTML = "<table>";
        tbl.setAttribute('id', 'table');
        document.body.append(tbl);
        rows += 1;
        addrow();
    }
}

function deleterow(){
    if (document.getElementById('number').value === "") {
        alert("Напишите номер строки для удаления")
    }
    row_number = document.getElementById('number').value;
    try {
        tbl.deleteRow(row_number - 1);
    }
    catch (e) {
        alert("Номер строки введен неверно");
    }
}