const app = new Vue({
    el : "#app",

    data:{
        apiUrl : "http://localhost/Progetti-%20php/php-ajax-dischi/DB/api.php",
        dischi:[],
    },
    mounted(){
        this.getApi();
        
    },
    methods:{
        getApi(){
            axios.get(this.apiUrl)
            .then(res=>{
                this.dischi = res.data;
                console.log(this.dischi);
            })
        }
    }
})