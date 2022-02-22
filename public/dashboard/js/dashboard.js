const labels = [
    'Janeiro',
    'Fevereiro',
    'Maço',
    'Abril',
    'Maio',
    'Junho',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'Chart',
        backgroundColor: '#24a8ad',
        borderColor: '#24a8ad',
        data: [0, 10, 5, 2, 20, 30, 45],
    }]
};

const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
