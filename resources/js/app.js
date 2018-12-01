

require('./bootstrap');
import Vue from 'vue';

Vue.component('userslist', require('./components/userslist.vue'));

const app = new Vue({
    el: '#user'
});


console.log('init');

Echo.private('chan-demo')
    .listen('TestEvent', (e) => {
        console.log( e );
    });



Echo.private($('#user').attr('data-user'))
	.listen('UserEvent', (e) => {
		console.log(e);
	});


$('#notifier').click(function(e){
	e.preventDefault();
	$.get('/notifier');

});

