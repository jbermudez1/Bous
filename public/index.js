
$('#enviar').click( () =>{
	console.log('click')
})

$('.progress').css('opacity', 0)

var form = document.getElementById('contact'); // form has to have ID: <form id="formID">

form.addEventListener('submit', function(event) { // listen for form submitting
            event.preventDefault(); // dismiss the default functionality
			$('.progress').css('opacity', 1)

			setTimeout( function (){
				$('.progress').css('opacity', 0)
			}, 3000)

    }, false);