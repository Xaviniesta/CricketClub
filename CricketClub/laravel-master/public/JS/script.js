$('#table tr').each(function(){

	// visit every td
    $(this).find('td').each(function(){

    	// if this td has class of runs
        if ($(this).attr('class') == 'runs') {

        	if ($(this)[0].innerHTML > 100) {

        		console.log($(this).next()[0].innerHTML = '<a href="#" onclick="alert(asdasd)" class="btn btn-danger disabled">Remove</a>');
        	}
        }
    })
})

function removeRow() {
	console.log('removerow');
}

$('a').click( function() { 
	this.parentNode.parentNode.remove();
});
