var app = new Vue({
    el: '#app',
    data: {
        disks: []
    },
    mounted() {
        axios .get ('http://localhost/php-ajax-dischi/SecondVersion/script.php')
        .then(response => {
            this.disks = response.data.response;
        })
    },
  });