
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<script>
    function updateUserTime() {
        const options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            weekday: 'long',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        };
        const formatter = new Intl.DateTimeFormat('en-US', options);
        const now = new Date();
        document.getElementById('user-time').innerText = formatter.format(now);
    }
    updateUserTime();
    setInterval(updateUserTime, 1000);

</script>

<script type="text/javascript" src="{{asset('./js/index.bundle.js?537a1bbd0e5129401d28')}}"></script>