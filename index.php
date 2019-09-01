<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '_partials/head.php' ?>
</head>
<body ng-app="OMDbAPISearch">
    <?php include '_partials/n_index.php' ?>

    <?php include '_partials/header.php' ?>
    <div class="container" ng-controller="searchMovies" data-ng-view>
        <div>
            <div class="row justify-content-center">
                <h2 class="mb-3">Search a Movie Title Below</h2>
                <div class="input-group col-md-8 mb-3" name="searchForm">
                    <input type="text" class="form-control" id="search-input" placeholder="Enter Your Movie Title..." ng-model="searchparam" required autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark" ng-click="fetch()" ng-disabled="searchForm.$invalid">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="results mt-4">
            <div class="result" movie-srch-results ng-repeat="movie in movieResults"></div>
        </div>
        <div class="noResults"></div>
    </div>
    
    <?php include '_partials/footer.php' ?>
</body>
</html>