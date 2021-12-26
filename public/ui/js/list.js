(function (window) {
    "use strict";
    fetchTable();
})(window);

function setTable(datas){
    const element = [];
    $("#penjualbody").empty();
    datas.map((data, index)=>{
        element.push(
            `<tr>
            <th scope="row">${index+1}</th>
            <td>${data.nama_konsumen}</td>
            <td>${data.alamat}</td>
            <td>${data.tgl_penjualan}</td>
            <td>${data.total}</td>
            <tr>
            `
        )
    })
    $("#penjualbody").append(element);
}

function fetchTable(start=0,limit=11){
    const settings = {
        url: `http://127.0.0.1:8000/api/tablepenjualan/${start}/${limit}`,
        method: "GET",
        timeout: 0,
    };
    $.ajax(settings).done(function (response) {
        setTable(response.data);
    });
}