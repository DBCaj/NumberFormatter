<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Currency Format</title>
</head>
<body>
  @php
  function getFormattedNumber(
    $value,
    $locale = 'en_US',
    $style = NumberFormatter::CURRENCY,
    $precision = 2,
    $groupingUsed = true,
    $currencyCode = 'USD',
  ) {
      $formatter = new NumberFormatter($locale, $style);
      $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
      $formatter->setAttribute(NumberFormatter::GROUPING_USED, $groupingUsed);
  
      if ($style == NumberFormatter::CURRENCY) {
          $formatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, $currencyCode);
      }
      return $formatter->format($value);
  }
  @endphp
 
 
  @extends('layouts.number-form')
  @section('number-output')
  
  <div style="margin:10px 0; background-color:lightgreen; color:#000; border-radius:4px; padding:11px; box-shadow: 8px 5px 10px rgba(0,0,0,0.5)">
    <h5>Output:<br><br>
      <span style="color:red">
        {{ getFormattedNumber(
          value: $num,
          precision: $precision,
          currencyCode: $currency
        ) }}
      </span>
    </h5>  
  </div>
  
  @stop
  
</body>
</html>
