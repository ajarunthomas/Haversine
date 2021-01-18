# Haversine
A Simple Facade for Laravel that calculates the Distance between 2 geo locations defined by latitude and longitude details using the Haversine Formula.

## Instructions
Include the Facade
```
use Ajarunthomas\Facades\Haversine;
```
Use the formula to calculate the distance
```
$distance = Haversine::distance([24.885368,55.120223],[25.223954,55.274097]);
```
