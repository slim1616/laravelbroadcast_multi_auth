<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chan-demo', function ($user) {
    return $user;
});

Broadcast::channel('user.{id}', function ($user, $id) {
    if( (int) $user->id === (int) $id){
    	return $user;
    }else{
    	return false;
    }
});

Broadcast::channel('presence', function ($user) {
    
    	return $user;
    
});