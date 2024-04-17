const { createApp } = Vue
createApp({
    data() {
        return {
            discs: [],
            api_url: 'api.php'
               }
    },
    mounted() {
        axios.get(this.api_url)
        .then(response => this.discs = response.data)
    }
}).mount('#app')