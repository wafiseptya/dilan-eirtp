var ctx = document.getElementById("rightChart").getContext('2d');
var getUrl = window.location;
var baseUrl = getUrl.protocol + "//" + getUrl.host + "/";
$.ajax({
  url: baseUrl + "/statistik/ajax_front_irtp",
  success:function(response){

    var x = JSON.parse(response);
    var labels = x.data.date;
    var datas = x.data.value;

    var config = {
      type: 'bar',
      data: {
         labels: labels,
         datasets: [{
            label: 'Jumlah',
            data: datas,
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)'
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
    };

    new Chart(ctx, config);
  }
});

var ltx = document.getElementById("leftChart").getContext('2d');
$.ajax({
  url: baseUrl + "/statistik/ajax_front_pirt",
  success:function(response){

    var x = JSON.parse(response);
    var labels = x.data.date;
    var datas = x.data.value;

    var config = {
      type: 'bar',
      data: {
         labels: labels,
         datasets: [{
            label: 'Jumlah',
            data: datas,
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)'
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
    };

    new Chart(ltx, config);
  }
});

$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
  $('#myTab li a').removeClass("active");
            currLink.addClass("active");
})
