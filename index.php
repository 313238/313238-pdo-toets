<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Maak je eigen pizza</title>

</head>

<body class="container">
    <h1 class="text-center">Maak je eigen pizza</h1>
    <br>
    <br>

    <form action="create.php" method="post">
    <p>Bodemformaat:</p>
    <select class="form-select" name="bodemformaat" aria-label="Default select example">
        <option selected>Maak je keuze</option>
        <option value="20">20</option>
        <option value="25">25</option>
        <option value="30">30</option>
        <option value="35">35</option>
        <option value="40">40</option>
    </select>
    <br>
    <br>
    <p>Saus:</p>
    <select class="form-select" name="saus" aria-label="Default select example">
        <option selected>Maak je keuze</option>
        <option value="tomatensaus">Tomatensaus</option>
        <option value="extra-tomatensaus">Extra tomatensaus</option>
        <option value="spicy-tomatensaus">Spicy tomatensaus</option>
        <option value="bbq-saus">BBQ saus</option>
        <option value="creme-fraiche">Creme fraiche</option>
    </select>
    <br>
    <br>
    <div class="form-group">
        <p>Pizzatoppings: </p>
        <input type="radio" id="vegan" name="pizzatoppings" value="vegan">
        <label for="vegan">vegan</label><br>
        <input type="radio" id="vegetarisch" name="pizzatoppings" value="vegetarisch">
        <label for="vegetarisch">vegetarisch</label><br>
        <input type="radio" id="vlees" name="pizzatoppings" value="vlees">
        <label for="vlees">vlees</label>
    </div>
    <br>
    <br>

    <div class="form-group">
        <p>Kruiden: </p>
        <input type="checkbox" name="kruiden" value="peterselie">
        <label for="peterselie"> Peterselie</label><br>
        <input type="checkbox" name="kruiden" value="oregano">
        <label for="oregano"> Oregano</label><br>
        <input type="checkbox" name="kruiden" value="chili-flakes">
        <label for="chili-flakes"> Chili flakes</label><br>
        <input type="checkbox" name="kruiden" value="zwarte-peper">
        <label for="zwarte-peper"> Zwarte peper</label><br>


        <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" type="button">Button</button>
        </div>
        </form>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>