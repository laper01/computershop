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
            <td>${data.kode_barang}</td>
            <td>${data.harga_satuan}</td>
            <td>${data.harga_total}</td>
            <td>${data.jumlah}</td>
            <tr>
            `
        )
    })
    $("#penjualbody").append(element);
}

function fetchTable(start=0,limit=12){
    const settings = {
        url: `http://127.0.0.1:8000/api/tabledetailpenjual/${start}/${limit}`,
        method: "GET",
        timeout: 0,
    };
    $.ajax(settings).done(function (response) {
        console.log(response)
        setTable(response.data);
    });
}