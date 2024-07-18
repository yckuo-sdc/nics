$(document).ready(function(){
	var url,hostname;
	if(location.hostname == 'vision.tainan.gov.tw'){
        hostname = 'vision.tainan.gov.tw/common/sdciss_lib';
	}else{											  
        hostname = location.hostname;
	}
    if (location.protocol == 'https:'){
        url='https://' + hostname;
	}else{							   
        url='http://' + hostname;
    }
	
    c3_chart_ajax(url);
});


function c3_chart_ajax(url){
	$.ajax({    
         url: url+'/ajax/chart',
		 cache: false,
		 dataType:'json',
		 type:'GET',
		 data: {chartID:'nics'},
		 error: function(xhr) {
			 console.log('Ajax failed');
		 },success: function(data) {
			 //console.log(data);
			var tmp_data, len;
			var topProductArray = [], topPortArray = [], classesArray = [];
			var classesCountArray = [], classesNameArray = [];

			tmp_data = data.topProduct;
			len = tmp_data.length;
			for(var i=0; i<len; i++){
				var name = tmp_data[i].name;
				var count = tmp_data[i].count;
				topProductArray.push([name, count]);
			}

			tmp_data = data.topPort;
			len = tmp_data.length;
			for(var i=0; i<len; i++){
				var name = tmp_data[i].name;
				var count = tmp_data[i].count;
				topPortArray.push([name, count]);
			}

			tmp_data = data.classes;
			len = tmp_data.length;
			for(var i=0; i<len; i++){
				var name = tmp_data[i].name;
				var count = tmp_data[i].count;
				classesNameArray.push(name);
				classesCountArray.push(count);
			}

            console.log(classesCountArray, classesNameArray);
			classesCountArray.unshift('organization');

			var chart = c3.generate({
				bindto: '#top_product_chart',
				data: {
				columns:
			 		topProductArray,
				type : 'donut'
				},
				donut:{
					label: {
					}
				},
				size:{
					height: '100%'
				},
				tooltip:{ 
					format: { 
						value: function (value, ratio, id) {
							return Math.round(ratio * 1000)/10+'% | '+value;
						} 
					} 
				},
				onrendered: function () {
					var data = this.api.data.shown.call (this.api);
					var total = data.reduce (function (subtotal, t) {
						return subtotal + t.values.reduce (function (subsubtotal,b) { return subsubtotal + b.value; }, 0);
					}, 0);
					d3.select(this.config.bindto + " .c3-chart-arcs-title").text("Total: "+total);
				}
			});

			var chart = c3.generate({
				bindto: '#top_port_chart',
				data: {
				columns:
			 		topPortArray,
				type : 'donut'
				},
				donut:{
					label: {
					}
				},
				size:{
					height: '100%'
				},
				tooltip:{ 
					format: { 
						value: function (value, ratio, id) {
							return Math.round(ratio * 1000)/10+'% | '+value;
						} 
					} 
				},
				onrendered: function () {
					var data = this.api.data.shown.call (this.api);
					var total = data.reduce (function (subtotal, t) {
						return subtotal + t.values.reduce (function (subsubtotal,b) { return subsubtotal + b.value; }, 0);
					}, 0);
					d3.select(this.config.bindto + " .c3-chart-arcs-title").text("Total: "+total);
				}
			});

			var chart = c3.generate({
				bindto: '#classes_chart',
				data:{ 
					columns: [classesCountArray],
					type: 'bar',
                    colors: {
                        organization: '#A5673F'
                    },
				},axis: {
					rotated: true,
					x: {
						type: 'category',
						categories: classesNameArray,
						rotated: true
					}
				},bar: {
					width: {
						ratio: 0.5 // this makes bar width 50% of length between ticks	
					}
				},size:{
					height: '100%'
				},grid: {
					x: {
						show: true
					},
					y: {
						show: true
					}
				}
			});
		 }
	});
	return 0;
 }

