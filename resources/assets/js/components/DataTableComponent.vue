<template>
    <div class="app-table">
        <header class="app-table-header app-table-row">
            <span class="app-table-column">ID #</span>
            <span class="app-table-column">Name</span>
            <span class="app-table-column">Location</span>
            <span class="app-table-column">Subscription</span>
            <span class="app-table-column">Balance</span>
            <span class="app-table-column">Last Seen</span>
            <span class="app-table-column">Actions</span>
        </header>
        <div class="app-table-content app-table-column">
            <div class="table-data">
                <section class="app-table-row" v-for="item in items">
                    <span class="app-table-column">1001</span>
                    <span class="app-table-column">Matarr Jobe</span>
                    <span class="app-table-column">San Francisco, CA</span>
                    <span class="app-table-column status--green">Active</span>
                    <span class="app-table-column">$5,900</span>
                    <span class="app-table-column">3 days ago</span>
                    <span class="app-table-column">
                        <button class="mdc-button"><i class="material-icons mdc-button__icon">edit</i></button>
                        <button class="mdc-button"><i class="material-icons mdc-button__icon">delete</i></button>
                    </span>
                </section> 
            </div>
        </div>
        <footer class="app-table-footer"></footer>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.items = [1,2,3,4,5,6,7,8,9]
        },
        data: function(){
            return {items: []}
        }
    }
</script>
