

require('./bootstrap');

console.log('init');

Echo.private('chan-demo')
    .listen('TestEvent', (e) => {
        console.log( e );
    });



Echo.private($('#user').attr('data-user'))
	.listen('UserEvent', (e) => {
		console.log(e);
	});
Echo.join('presence')
	.here(function (users){
		console.log('here ');
		console.log(users);
	})
	.joining(function (user){
		console.log('joining ');
		console.log(user);
	})
	.leaving(function (user){
		console.log('leaving ');
		console.log(user);
	})

$('#notifier').click(function(e){
	e.preventDefault();
	$.get('/notifier');

});

