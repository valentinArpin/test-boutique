<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Prestation N°1</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component
                for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>Première prestation</p>
                <form method="POST" action="{{ route('download.user', ['filename' => 'testpdf'])}}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Télécharger" />
                    @csrf
                </form>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Prestation N°2</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component
                for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>Seconde prestation</p>
                <form method="POST" action="{{ route('download.user', ['filename' => 'formulaire'])}}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Télécharger" />
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>