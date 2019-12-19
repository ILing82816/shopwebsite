const myForm = document.querySelector('.my-form');
const nameInput = document.querySelector('#Name');
const passInput = document.querySelector('#password');
const msg = document.querySelector('.msg');

myForm.addEventListener('submit', onSubmit);
//myForm.addEventListener('submit', express);
//myForm.addEventListener('submit', changepage);


function onSubmit(e){
	e.preventDefault();
	if(nameInput.value === ''||passInput.value === ''){
		msg.classList.add('error');
		msg.innerHTML='Please enter all field';
	}else{
		console.log('success');
		express();
		myForm.submit();
	}
}

function express(){
	let xhr = new XMLHttpRequest(); 
    let url = "point.php"; 
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			result.innerHTML = this.responseText;
		}
	};	
	var member = {
		"Name": nameInput.value,
		"password": passInput.value,
	};
	var memberJSON = JSON.stringify(member);
	xhr.send(memberJSON);
}

/*function changepage(){
	
}*/