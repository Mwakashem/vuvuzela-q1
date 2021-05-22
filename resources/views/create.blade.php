
<!doctype html>
<html lang="en">
  <head>
    <title>Question 1</title>


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Jina web service</h2>
    </div>

    <div class="row g-12">
      <div class="col-md-10 col-lg-10">
        <form class="needs-validation" method="post" action="/jina">
        @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Jina</label>
              <input type="text" name="jina" class="form-control" id="Jina" placeholder="Jina" required>
              <div class="invalid-feedback">
              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              </div>
            </div>
      <input type="submit" class="bnt-primary">
        </form>
      </div>
    </div>
  </main>
</div>
  </body>
</html>
