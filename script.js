const app = new Vue({
    el : "#app",

    data:{
        apiUrl : "http://localhost/Progetti-%20php/php-ajax-dischi/DB/api.php?selected=",
        dischi:[],
        selected :"",
    },
    mounted(){
        this.getApi();
        
        
    },
    methods:{
        getApi(){
            axios.get(this.apiUrl + this.selected)
            .then(res=>{
                this.dischi = res.data;
                console.log(this.dischi);
            })
        }
    }
})