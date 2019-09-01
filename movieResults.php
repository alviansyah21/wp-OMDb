<div class="container-fluid mb-4 border-bottom border-secondary">
    <div class="row">
        <div class="col-md-12">
            <h4>{{movie.Title}} ({{movie.Year}})</h4>
        </div>
        <div class="col-md-4">
            <div class="mx-auto">
                <img src="{{movie.Poster}}" class="img-fluid">
            </div>  
        </div>
        <div class="col-md-8">
            <ul class="list-group">
                <li class="list-group-item">
                    Actors : {{movie.details.Actors}}
                </li>
                <li class="list-group-item">
                    Rated : {{movie.details.Rated}}
                </li>
                <li class="list-group-item">
                    Duration : {{movie.details.Runtime}}
                </li>
                <li class="list-group-item">
                    Genre : {{movie.details.Genre}}
                </li>
                <li class="list-group-item">
                    Director : {{movie.details.Director}}
                </li>
                <li class="list-group-item">
                    Writer : {{movie.details.Writer}}
                </li>
                <li class="list-group-item">
                    Language : {{movie.details.Language}}
                </li>
                <li class="list-group-item">
                    Studio : {{movie.details.Production}}
                </li>
                <li class="list-group-item">
                    Released : {{movie.details.Released}}
                </li>
            </ul>
        </div><br>
        <div class="col-md-12">
            <em>IMDB Rating : {{movie.details.imdbRating}} | Metascore : {{movie.details.Metascore}}</em>
        </div>
    </div>
</div>