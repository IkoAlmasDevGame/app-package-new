var data1 = {
    labels: ['A', 'B', 'C'],
    datasets: [{
      data: [30, 40, 30],
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
    }]
  };

  // Data untuk pie chart kedua
  var data2 = {
    labels: ['D', 'E', 'F'],
    datasets: [{
      data: [20, 50, 30],
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
    }]
  };

  // Buat pie chart pertama
  var pieChart1 = new Chart(document.getElementById('pieChart1'), {
    type: 'pie',
    data: data1
  });

  // Buat pie chart kedua
  var pieChart2 = new Chart(document.getElementById('pieChart2'), {
    type: 'pie',
    data: data2
  });