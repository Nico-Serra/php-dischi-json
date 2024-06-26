const { createApp } = Vue
createApp({
    data() {
        return {
            discs: [],
            api_url: 'api.php',
            discSelect: null,
            messageError: null,
        }
    },
    methods: {
        selectDisc(disc) {
            this.discSelect = disc;
            console.log(disc);
        },
        closeModal() {
            this.discSelect = null
        }
    },
    mounted() {
        axios.get(this.api_url)
            .then(response => this.discs = response.data).catch(error => this.messageError = error.message)
    }
}).mount('#app')