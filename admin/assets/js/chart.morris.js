$(function(){
	
	/* Morris Area Chart */
	
	window.mA = Morris.Area({
	    element: 'morrisArea',
	    data: [
	        
	        { y: '2017', a: 100, b: 120 },
	        { y: '2018', a: 240, b: 120 },
	        { y: '2019', a: 120, b: 140 },
	        { y: '2021', a: 80, b: 100 },
	        { y: '2022', a: 100, b: 120 },
	        { y: '2023', a: 60, b: 80 },
	    ],
	    xkey: 'y',
	    ykeys: ['a', 'b'],
	    labels: ['Sales', 'Rent'],
	    lineColors: ['#2962ff', '#bbb'],
	    lineWidth: 0,
     	fillOpacity: 0.5,
	    gridTextSize: 10,
	    hideHover: 'auto',
	    resize: true,
		redraw: true
	});
	
	/* Morris Line Chart */
	
	window.mL = Morris.Line({
	    element: 'morrisLine',
	    data: [
	        { y: '2017', a: 100, b: 120 },
	        { y: '2018', a: 240, b: 120 },
	        { y: '2019', a: 120, b: 140 },
	        { y: '2021', a: 80, b: 100 },
	        { y: '2022', a: 100, b: 120 },
	        { y: '2023', a: 60, b: 80 },
	    ],
	    xkey: 'y',
	    ykeys: ['a', 'b', 'c'],
	    labels: ['Properties', 'Sales', 'Users'],
	    lineColors: ['#f90a48', '#2962ff', '#ccc'],
	    lineWidth: 1,
	    gridTextSize: 10,
	    hideHover: 'auto',
	    resize: true,
		redraw: true
	});
	$(window).on("resize", function(){
		mA.redraw();
		mL.redraw();
	});

});