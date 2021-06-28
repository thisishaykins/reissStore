<template>
    <div>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <td></td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Is Admin</td>
                    <td>Is Vendor</td>
                    <td>Joined</td>
                    <td>Total Orders</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user,index) in users" @key="index">
                    <td>{{index+1}}</td>
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.is_admin}}</td>
                    <td>{{user.is_vendor}}</td>
                    <td>{{user.created_at}}</td>
                    <td>{{user.orders.length}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users : []
            }
        },
        beforeMount() {
            axios.get('/api/users/').then(response => this.users = response.data)
        }
    }
</script>
