var ctx = document.getElementById("rightChart").getContext('2d');
		var rightChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Nov-2018", "Des-2018", "Jan-2019", "Feb-2019", "Mar-2019"],
				datasets: [{
					label: 'none',
					data: [4, 10, 9, 6, 6],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
        });

var ctx = document.getElementById("leftChart").getContext('2d');
		var leftChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Nov-2018", "Des-2018", "Jan-2019", "Feb-2019", "Mar-2019"],
				datasets: [{
					label : 'none',
					data: [2, 7, 7, 5, 2],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
        });
        
