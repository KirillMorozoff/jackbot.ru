
function deadleafts(){
	
	var weigth = document.getElementById("weigthleafts").value;
	weigth = weigth.replace(",", ".");
	
	
	//Создание списка весов
	var numbers = [30];
	var trys = [(weigth/100)*50, (weigth/100)*60, (weigth/100)*70, (weigth/100)*75, (weigth/100)*80, (weigth/100)*85, (weigth/100)*100, (weigth/100)*105, (weigth/100)*110];
	
	
	for(var i=numbers[0]; i<180; i=i+2.5){
		numbers.push(i);									
	}
	
	for (var i = 0; i < trys.length; i++){
		for(var j = 0; j < numbers.length; j++){
			if (trys[i] > numbers[j] && trys[i] < numbers[j+1]){
				trys[i] = numbers[j+1];
				console.log(trys[i]);
			} 
		}
	}
		
	var newDiv = document.createElement('div');
	newDiv.innerHTML = ' ';
	newDiv.innerHTML = '<br>' + 
	'<style>table{width:100%;}</style>'+
	'<h3>1-3 недели</h3><hr>'+
	'<table id="table" align="center">'+
	
	'<tr><th>Повторения</th><th >Вес</th><th>Подходы</th></tr>' +
	'<tr><td>5</td><td>' + trys[0] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>4</td><td>' + trys[1] + ' ' + 'кг.' + '</td><td>2</td></tr>'+
	'<tr><td>3</td><td>' + trys[2] + ' ' + 'кг.' + '</td><td>2</td></tr>'+
	'<tr><td>3</td><td>' + trys[3] + ' ' + 'кг.' + '</td><td>4</td></tr>'+
	'</table>'+
	
	'<h3>3-6 недели</h3><hr>'+
	'<table id="table" align="center">'+
	
	'<tr><th>Повторения</th><th >Вес</th><th>Подходы</th></tr>' +
	'<tr><td>5</td><td>' + trys[0] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>4</td><td>' +  trys[1] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>3</td><td>' +  trys[2] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>3</td><td>' +  trys[4] + ' ' + 'кг.' + '</td><td>5</td></tr>'+
	'</table>'+
	

	
	'<h3>6-9 недели</h3><hr>'+
	'<table id="table" align="center">'+
	
	'<tr><th>Повторения</th><th >Вес</th><th>Подходы</th></tr>' +
	'<tr><td>5</td><td>' + trys[0] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>4</td><td>' + trys[1] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>3</td><td>' + trys[2] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>3</td><td>' + trys[5] + ' ' + 'кг.' + '</td><td>3</td></tr>'+
	'</table>'+
	
	'<h3>Проходка</h3><hr>'+
	'<table id="table" align="center">'+
	'<tr><th>Повторения</th><th >Вес</th><th>Подходы</th></tr>' +
	'<tr><td>5</td><td>' + trys[0] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>3</td><td>' + trys[1] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>2</td><td>' + trys[2] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>1</td><td>' + trys[3] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>1</td><td>' + trys[4] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>1</td><td>' + trys[5] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>1</td><td>' + trys[6] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>1</td><td>' + trys[7] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'<tr><td>1</td><td>' + trys[8] + ' ' + 'кг.' + '</td><td>1</td></tr>'+
	'</table>'+
	'<br><small>Также необходимо делать различные подсобные упражнения такие как: "Гиперэкстензия", "Приседания", "Жим ногами" и пр.</small>'
	
	;
	
	if (document.getElementById("deadleaftscolumn").hasChildNodes()) {
		deadleaftscolumn.removeChild(deadleaftscolumn.childNodes[0]);
		deadleaftscolumn.appendChild(newDiv);
	} else{
		deadleaftscolumn.appendChild(newDiv);
	}
										

	}
