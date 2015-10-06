
        console.log('pre start');
$(document).ready(function () {

	
var chart = new Chartist.Bar('.ct-chart', {
  labels: ['Jan', 'Feb', 'Mar', 'Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec', 'Jan'],
  series: [
    [-10, -12, -14, -13, -14, -11, -13, -16, -10, -15, -14, -13, -9],
    [-20, -4, -10, -4, -5, -3, -11, -4, -5, -3, -15, -4, -5],
  ]
}, {
  stackBars: true,
  high: 10,
  low: -40,
  axisY: {
    labelInterpolationFnc: function(value) {
      return (value);
    }
  }
});
	
var color_top = ["#e05259", "#ee93b0", "#c15975", "#f8835e", "#f8835e", "#7c689c", "#329477", "#61b763", "#3daed0", "#2c7caa", "#787d83", "#b6bec5", "#e05259"];
var color_bottom = ["#f3b9bd","#f8d4df","#e6bdc8","#fccdbf","#f3d6a8","#cbc3d8","#add4c9","#bfe2c1","#b1dfec","#abcbdd","#c8cbcd","#e1e5e8","#f3b9bd"]; 	
var colors = color_top.concat(color_bottom);
var index = 0;
	
var rising_last = 5; /* Tutaj okreĹlamy o ile ostatni sĹupek bedzie powyĹźej "0" */
var rising_last_1 = 1; /* Tutaj okreĹlamy o ile przedostatni sĹupek bedzie powyĹźej "0" */
	
chart.on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
    style: 'stroke-width: 14px; stroke:'+colors[index]

    });

	  index++
	  
	  $("g.ct-series-a line:nth-child(13)").attr('y1',75-6*rising_last);
	  $("g.ct-series-a line:nth-child(12)").attr('y1',75-6*rising_last_1);
  }
});
    

    

var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
};
    
addEvent(window, "resize", function(event) {
        
var color_top = ["#e05259", "#ee93b0", "#c15975", "#f8835e", "#f8835e", "#7c689c", "#329477", "#61b763", "#3daed0", "#2c7caa", "#787d83", "#b6bec5", "#e05259"];
var color_bottom = ["#f3b9bd","#f8d4df","#e6bdc8","#fccdbf","#f3d6a8","#cbc3d8","#add4c9","#bfe2c1","#b1dfec","#abcbdd","#c8cbcd","#e1e5e8","#f3b9bd"]; 	
var colors = color_top.concat(color_bottom);
var index = 0;
    
    chart.on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
    style: 'stroke-width: 14px; stroke:'+colors[index]

    });

	  index++
	  
	  $("g.ct-series-a line:nth-child(13)").attr('y1',75-6*rising_last);
	  $("g.ct-series-a line:nth-child(12)").attr('y1',75-6*rising_last_1);
  }
});  
        
        
        
  console.log('resized');
        
        
});



});

    
        
       
    new Chartist.Bar('.ct-chart2', {
  labels: ['Q1', 'Q2', 'Q3', 'Q4'],
  series: [
    [800000, 1200000, 1400000, 1300000],
    [200000, 400000, 500000, 300000],
    [100000, 200000, 400000, 600000]
  ]
}, {
  stackBars: true,
  axisY: {
    labelInterpolationFnc: function(value) {
      return (value / 1000) + 'k';
    }
  }
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 30px'
    });
  }
});
    
    
  
    
    
  



/* Animating a Donut with Svg.animate  START */
    
var chart = new Chartist.Pie('#gauge-animated', {
  series: [10, 20, 50, 20, 5, 50, 15],
  labels: [1, 2, 3, 4, 5, 6, 7]
}, {
  donut: true,
     donutWidth: 30,
  showLabel: false,

});

/* Animating a Donut with Svg.animate END */

    
