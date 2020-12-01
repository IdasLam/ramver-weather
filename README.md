[![Build Status](https://travis-ci.com/IdasLam/ramverk-weather.svg?branch=main)](https://travis-ci.com/IdasLam/ramverk-weather)
[![CircleCI](https://circleci.com/gh/IdasLam/ramverk-weather.svg?style=svg)](https://app.circleci.com/pipelines/github/IdasLam/ramverk-weather?branch=main)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/IdasLam/ramverk-weather/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/IdasLam/ramverk-weather/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/IdasLam/ramverk-weather/badges/build.png?b=main)](https://scrutinizer-ci.com/g/IdasLam/ramverk-weather/build-status/main)

idaslam/weather
====================
## Installation
Run ```composer require idaslam/weather```.

## Usage
Require the module via namespace `idla/Weather` and create a new instance of `Weather()`. This will include a class with methods, start with the method `init($lon, $lat)`. Then methods like `getWeek()` and `getHistory()` will work.