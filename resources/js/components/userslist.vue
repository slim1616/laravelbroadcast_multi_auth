<template>
  
                        <ul class="list-group">
                            <li class="list-group-item" v-for="u in users">{{u.name}}</li>
                        </ul>

                   
</template>

<script>
    export default {
        data(){
            return {
                users : []
            }
        },
        mounted() {
            window.Echo.join('presence')
                    .here((users) => {
                        //console.log(" herer " , users);
                        this.users = users;
                    })
                    .joining((user) => {
                        //console.log('joining ' + user.name);
                        this.users.push(user);
                        
                    })
                    .leaving((user) => {
                        //console.log('leaving ' + user);
                        this.users = this.users.filter(el =>  el.id !== user.id)
                    })
        }
    }
</script>
