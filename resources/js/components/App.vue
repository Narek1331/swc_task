<template>
    <div class="">
        <ErrorList
        :errors="getErrors"
        ></ErrorList>
        <router-view></router-view>
    </div>
</template>
<script>
import ErrorList from './ErrorList.vue'
    export default {
        computed:{
            getErrors(){
                return this.$store.getters.getErrors
            }
        },
        components:{
            ErrorList
        }

    }
</script>
