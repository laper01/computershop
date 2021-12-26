export function barChart(label, data){
var barColors = ["red", "green", "blue", "orange", "brown"];


var chart = new Chart("barChart", {
        type: "bar",
        data: {
            labels: label,
            datasets: [
                {
                    backgroundColor: barColors,
                    data: data,
                },
            ],
        },
        options: {
            // legend: { display: false },
            title: {
                display: true,
                text: "penjualan bulan ini",
            },
        },
    });

    chart.render();
}

export function pieChart(label, data){
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145"];

    new Chart("pieChart", {
        type: "pie",
        data: {
            labels: label,
            datasets: [
                {
                    backgroundColor: barColors,
                    data: data,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "bottom",
                },
                title: {
                    display: false,
                    text: "ketegory barang",
                },
            },
        },
    });
}
