/*const msgNL = document.querySelector('.Namelist');
const msgAD = document.querySelector('.addlist');
const msgEM = document.querySelector('.emaillist');
const msgPA = document.querySelector('.passlist');
const msgPH = document.querySelector('.phonelist');*/
constructTable('#memberlist');

function constructTable(selector){
	let xhr = new XMLHttpRequest(); 
    let url = "api/user/read.php"; 
	//xhr.setRequestHeader("Content-Type", "application/json");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			var myObj = JSON.parse(this.responseText);
			var cols = Headers(myObj.data, selector);
			for(var i = 0; i< myObj.data.length; i++){
				var row = $('<tr/>');
				for(var colIndex=0; colIndex<cols.length;colIndex++){
					var val = myObj.data[i][cols[colIndex]];
					//if (val == null) val = "";
						row.append($('<td/>').html(val));
				}
			$(selector).append(row);
			}		
		}
	};
	xhr.open("GET", url, true);
	xhr.send();
}

function Headers(list, selector){
	var columns = [];
	var header = $('<tr/>');
	
	for(var i = 0; i<list.length; i++){
		var row= list[i];
		for(var k in row){
			if($.inArray(k, columns)==-1){
				columns.push(k);
				header.append($('<th/>').html(k));
			}
		}
	}
	$(selector).append(header);
		return columns;
}
