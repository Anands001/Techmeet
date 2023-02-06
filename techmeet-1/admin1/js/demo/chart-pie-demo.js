// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
let eventList2 = [];
let countList2 = [];
let colors = [];
let generatedColors = [];
fetch("/techmeet-1/admin1/db.php")
  .then((response) => response.json())
  .then((data1) => {
    // Do something with the data
    console.log("Pie data", data1);
    for (const { event_name,count} of [...data1]) { 
      countList2.push(count);
      eventList2.push(event_name);
    }
    console.log(eventList2, countList2);

    function generateColors(numberOfColors) {
 
  for (let i = 0; i < numberOfColors; i++) {
    let color = '#' + Math.floor(Math.random() * 16777215).toString(16);
    colors.push(color);
    console.log(color);
  }
  return colors;
}
    generatedColors = generateColors(eventList2.length);

    console.log(generatedColors);

// ['#4e73df', '#1cc88a', '#36b9cc','#ff80ff','#ecb3ff','#b3d9ff']
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: eventList2,
    datasets: [{
      data: countList2,
      backgroundColor: generatedColors,
      hoverBackgroundColor: generatedColors,
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

    
  });


