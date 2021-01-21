# Haversine
A Simple Facade for Laravel that calculates the Distance between 2 geo locations defined by latitude and longitude details using the Haversine Formula.

## Instructions
### Installation using composer
```
composer require ajarunthomas/haversine
```

### Include the Facade
```
use Ajarunthomas\Facades\Haversine;
```
or optionally include the Facade in the aliases
```
'Haversine' => Ajarunthomas\Facades\Haversine::class,
```

### Calculate the distance between 2 cordinates
```
$distance = Haversine::distance([24.885368,55.120223],[25.223954,55.274097]);
```
