    <div class="bg-dark" id="navbarHeader">
            <div class="container">
                <p class="float-right">
                    <a href="#" style="text-decoration: none;">Back to top</a>
                </p>
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        @foreach($abouts as $about)
                            <h4 class="text-white">{{ $about->name ?? '' }}</h4>
                            <p class="text-muted">{{ $about->description ?? '' }}</p>
                        @endforeach
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                        @foreach($contacts as $contact)
                            <li><a id="{{ $contact->id ?? '' }}" href="{{ $contact->url ?? '' }}" class="text-white">{{ $contact->name ?? '' }}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>