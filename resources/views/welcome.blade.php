@include ('includes.top')
<title>Tec Nut | About Tec Nuts Business Software</title>
<style>

</style>
</head>
<body>
@include ('includes.nav')
<div class="bg-dark text-secondary pb-1 pt-5 text-center bg-img">
    <div class="pt-5">
        <div class="col-lg-6 pt-5 py-3 mx-auto">
            <h1 class="text-gradient display-6 fw-bold text-uppercase">Blank Project</h1>
        </div>
    </div>
</div>

<!-- About Content -->
<div class="container-fluid">
    <div class="row">
        <div class="order-1 order-lg-2 col-lg-6 p-5 fs-5">
            <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus elit, posuere ac
                mollis vel, lacinia ac erat. Phasellus quis tempus lacus. Nam lacus lectus, commodo a enim vel, finibus
                fringilla quam.</p>
            <div class="card-body">
                <form method="POST" action="{{ url('/Save') }}" id="myForm">
                    @csrf
                    <div class="row">
                        <div class="col-auto py-2">
                            <label for="contact_name">First Name<span style="color: #db524b;  font-size: 13pt;"> *</span></label>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="form-group">
                                <input id="contact_name" type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ old('contact_name') }}" placeholder="Name" autofocus required>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <input class="btn btn-primary"  type="submit" id="submit_button" value="Submit" />
                        </div>
                    </div>
                </form>
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