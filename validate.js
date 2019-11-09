function validateRegForm() {
  var form = document.forms['reg-form'];
  var pid = form['pid'];
  var lastname = form['last-name'];
  var surname = form['surname'];

  var err = 0;
  if (pid.value == "") {
    pid.placeholder = '* Fill the Patient ID.';
    pid.className += " red-ph";
    err++;
  };

  if (lastname.value == "") {
    lastname.placeholder = '* Fill the Last Name.';
    lastname.className += " red-ph";
    err++;
  };

  if (surname.value == "") {
    surname.placeholder = '* Fill the Surname.';
    surname.className += " red-ph";
    err++;
  };

  return !err;
}

function validateKinForm() {
  var form = document.forms['kin-form'];
  var pid = form['pidKin'];
  var fname = form['fnameKin'];
  var surname = form['surnameKin'];

  var err = 0;
  if (pid.value == "") {
    pid.placeholder = '* Fill the Patient ID.';
    pid.className += " red-ph";
    err++;
  }

  if (fname.value == "") {
    fname.placeholder = '* Fill the First Name';
    fname.className += " red-ph";
    err++;
  }

  if (surname.value == "") {
    surname.placeholder = '* Fill the Surname';
    surname.className += " red-ph";
    err++;
  }

  return !err;
}


// $(document).ready(function() {

// $('#reg-form').submit(function(e) {
//     e.preventDefault();

//     var pid = $('#pid').val();
//     var last_name = $('#last-name').val();
//     var surname = $('#surname').val();


//     if (pid.length < 6) {
//       $('#pid').after('<span class="error">The Patients ID cant be less than 6 characters</span>');
//     }

//     if (last_name.length < 1) {
//       $('#last-name').after('<span class="error">This field is too short</span>');
//     }
//     if (surname.length < 3) {
//         $('#surname').after('<span class="error">This field isyy required</span>');
//       }

  
//   });

// });

// const patientId = document.getElementById('pid');
// const lastname = document.getElementById('last-name');
// const surname = documnet.getElementById('surname');
// const errorElement = document.getElementById('error');

// const form = document.getElementById('reg-form');

// form.addEventListener('submit', (e) => {
//     let messages = []
//     if(patientId.value === '' || patientId.value === null){
//         messages.push('Name is required')
//     }
//     if(messages.length > 0){
//         e.preventDefault()
//         errorElement.innerText = messages.join(', ')
//     }
// })