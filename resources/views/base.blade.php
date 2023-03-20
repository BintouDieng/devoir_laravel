
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titre ?? 'Revision'}}</title>
</head>
<body>
 @yield('rev')
 @inject('nomobjet', 'App\Utilities\Gettitre')
 {{ $nomobjet->getMessageBienvenu() }} <br>
  
</body>
</html>