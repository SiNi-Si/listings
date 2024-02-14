@include ('includes.top')
<title>Tec Nut | Business Listings</title>
<style>

</style>
</head>
<body>
@include ('includes.nav')
<div class="bg-dark text-secondary pb-1 pt-5 text-center bg-img">
    <div class="pt-5">
        <div class="col-lg-6 pt-5 py-3 mx-auto">
            <h1 class="text-gradient display-6 fw-bold text-uppercase">Business Listings</h1>
        </div>
    </div>
</div>

<!-- About Content -->
<div class="container-fluid">
    <div class="row">
        <div class="order-1 order-lg-2 col-lg-6 p-5 fs-5">
            <p class="fw-bold"></p>
            <div class="card-body">
                @foreach($WebHosts as $WebHost)
                    <div class="col-12">
                        {{$WebHost->domain1}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include ('includes.footer')
@include ('includes.bottom')
<script>


</script>
</body>
</html>