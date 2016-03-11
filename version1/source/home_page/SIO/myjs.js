function inscrire(){
	var valid=true;
	if(document.getElementById('name').value == ''){
		valid=false
	}
	if(document.getElementById('prenom').value == ''){
		valid=false
	}
	if(document.getElementById('mail').value == ''){
		valid=false
	}
	if(document.getElementById('from').value == 'other' && document.getElementById('frombac').value == ''){
		valid=false
	}
	if(valid){
		var form_nom = document.getElementById('name').value;
		var form_prenom = document.getElementById('prenom').value;
		var form_mail = document.getElementById('mail').value;
		var form_bac = '';
		if(document.getElementById('from').value == 'other'){
			form_bac =  document.getElementById('frombac').value;
		}else {
			form_bac =  document.getElementById('from').value;
		}
		var chaine3 = form_nom.concat(';' + form_prenom.concat(';' + form_mail.concat(';' + form_bac)));
		var number = localStorage.length
		localStorage.setItem(number, chaine3);
		alert("Merci de votre inscription !");
		open_link('..\index.html');
	}else{
		alert('Veuillez remplir tout les champs s\'il vous plait');
	}
	return false;
}

function isother(){
	if(document.getElementById('from').value == "other"){
		document.getElementById('precision').setAttribute('style','');
	}else{
		document.getElementById('precision').setAttribute('style','display:none');
	}
}


function open_link(url){
	var element = document.createElement('a');
	element.setAttribute('href', url);
	element.style.display = 'none';
	document.body.appendChild(element);
	element.click();
	document.body.removeChild(element);
}

function vider(){
	localStorage.clear();
	eleve()
}

function savedata(){
	var csv_text = '';
	for(var i = 0;i<localStorage.length;i++){
		csv_text = csv_text + '\n' + localStorage.getItem(i);
	}
	
	var element = document.createElement('a');
	element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(csv_text));
	element.setAttribute('download', 'sio.csv');
	element.style.display = 'none';
	document.body.appendChild(element);
	element.click();
	document.body.removeChild(element);
	
}

function eleve(){
	var elem = document.getElementById('eleve');
	elem.innerHTML = 'Il y a actuellement ' + localStorage.length + ' élève(s) enregistré(s)';
}