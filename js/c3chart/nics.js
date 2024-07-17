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
			var topProductArray = [], topPortArray = [];
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

		 }
	});
	return 0;
 }

