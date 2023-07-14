import Chart from 'chart.js/auto'

(async function() {
  const data = [
    { month: 'Gennaio', count: Gen  },
    { month: 'Febbraio', count: Feb },
    { month: 'Marzo', count: Mar },
    { month: 'Aprile', count: Apr },
    { month: 'Maggio', count: Mag },
    { month: 'Giugno', count: Giu },
    { month: 'Luglio', count: Lug },
    { month: 'Agosto', count: Ago },
    { month: 'Settembre', count: Sep },
    { month: 'Ottobre', count: Ott },
    { month: 'Novembre', count: Nov },
    { month: 'Dicembre', count: Dic },
  ];

  new Chart(
    document.getElementById('acquisitions'),
    {
      type: 'bar',
      data: {
        labels: data.map(row => row.month),
        datasets: [
          {
            label: 'Vendite per mese in euro',
            data: data.map(row => row.count)
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    }
  );
})();
