/**
 * ALBUM APP
 */
const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        /**
         * GET API DATA\
         */
        axios
            .get(
                'http://localhost/1.COMPITI/php-ajax-dischi/AJAX/script/get-album.php'
            )
            .then((res) => {
                // console.log(res.data);
                this.albums = res.data;
            })
            .catch((err) => {
                console.log(err);
            });
    },
});
