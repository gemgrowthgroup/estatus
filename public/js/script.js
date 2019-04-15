
let editAdmins = document.querySelectorAll('.edit-admin-button');

editAdmins.forEach(function (editAdmin){
	editAdmin.addEventListener('click', function(){

		let fname = editAdmin.getAttribute('data-firstname');
		let mname = editAdmin.getAttribute('data-middlename');
		let lname = editAdmin.getAttribute('data-lastname');

		document.querySelector('#adminFirstName').setAttribute('value', fname);
		document.querySelector('#adminMiddleName').setAttribute('value', mname);
		document.querySelector('#adminLastName').setAttribute('value', lname);
		document.querySelector('#adminAgency').value = editAdmin.getAttribute('data-agency');


		let id = editAdmin.getAttribute('data-id');
		document.querySelector('#editAdminForm').setAttribute('action', '/admins/' + id);
	});
});

let editDirectors = document.querySelectorAll('.edit-director-button');

editDirectors.forEach(function (editDirector){
	editDirector.addEventListener('click', function(){

		let fname = editDirector.getAttribute('data-firstname');
		let mname = editDirector.getAttribute('data-middlename');
		let lname = editDirector.getAttribute('data-lastname');

		document.querySelector('#directorFirstName').setAttribute('value', fname);
		document.querySelector('#directorMiddleName').setAttribute('value', mname);
		document.querySelector('#directorLastName').setAttribute('value', lname);
		document.querySelector('#directorAgency').value = editDirector.getAttribute('data-agency');


		let id = editDirector.getAttribute('data-id');
		document.querySelector('#editDirectorForm').setAttribute('action', '/directors/' + id);
	});
});

let editManagers = document.querySelectorAll('.edit-manager-button');

editManagers.forEach(function (editManager){
	editManager.addEventListener('click', function(){

		let fname = editManager.getAttribute('data-firstname');
		let mname = editManager.getAttribute('data-middlename');
		let lname = editManager.getAttribute('data-lastname');

		document.querySelector('#managerFirstName').setAttribute('value', fname);
		document.querySelector('#managerMiddleName').setAttribute('value', mname);
		document.querySelector('#managerLastName').setAttribute('value', lname);
		document.querySelector('#managerDirector').value = editManager.getAttribute('data-director');


		let id = editManager.getAttribute('data-id');
		document.querySelector('#editManagerForm').setAttribute('action', '/managers/' + id);
	});
});

let editAgents = document.querySelectorAll('.edit-agent-button');

editAgents.forEach(function (editAgent){
	editAgent.addEventListener('click', function(){

		let fname = editAgent.getAttribute('data-firstname');
		let mname = editAgent.getAttribute('data-middlename');
		let lname = editAgent.getAttribute('data-lastname');

		document.querySelector('#agentFirstName').setAttribute('value', fname);
		document.querySelector('#agentMiddleName').setAttribute('value', mname);
		document.querySelector('#agentLastName').setAttribute('value', lname);
		document.querySelector('#agentManager').value = editAgent.getAttribute('data-manager');


		let id = editAgent.getAttribute('data-id');
		document.querySelector('#editAgentForm').setAttribute('action', '/agents/' + id);
	});
});


// document.querySelectorAll('.enableSwitch').defaultChecked;

let enableSwitches = document.querySelectorAll('.enableSwitch');
enableSwitches.forEach(function(enableSwitch){
	enableSwitch.addEventListener('change', function(event){
		console.log('toggled');
	})
});