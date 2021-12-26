import { barChart, pieChart } from "./chart.js";

(function (window) {
    "use strict";
    fetchTable();
    fetchBar(2021,12);
    fetchPie();
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

function fetchTable(start=0,limit=10){
    const settings = {
        url: `http://127.0.0.1:8000/api/tablepenjualan/${start}/${limit}`,
        method: "GET",
        timeout: 0,
    };
    $.ajax(settings).done(function (response) {
        setTable(response.data);
    });
}

function fetchPie(){
    const settings = {
        url: `http://127.0.0.1:8000/api/getallbarang`,
        method: "GET",
        timeout: 0,
    };
    $.ajax(settings).done(function (response) {
        const label =[];
        const dataChart = []
        response.data.map((data, index)=>{
            label.push(data.kategori);
            dataChart.push(data.stock)
        })
        pieChart(label, dataChart);
    });
}

function fetchBar(year,month){
    const settings = {
        url: `http://127.0.0.1:8000/api/mounthjual/${year}/${month}`,
        method: "GET",
        timeout: 0,
    };
    $.ajax(settings).done(function (response) {
        const label =[];
        const dataChart = []
        response.data.map((data, index)=>{
            label.push(data.tgl_penjualan)
            dataChart.push(data.total)
        })
        barChart(label, dataChart);
    });
}
