<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Currency Format</title>
  
  <x-bootstrap.styles/>
</head>
<body>
  @php
  function getFormattedNumber(
    $value,
    $locale = 'en_US',
    $style = NumberFormatter::CURRENCY,
    $precision = 2,
    $groupingUsed = false,
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
 
  <h1>
    {{ getFormattedNumber(
      value: $num,
      precision: $precision,
      currencyCode: $currency
    ) }}
  </h1>
  
  <x-bootstrap.scripts/>
</body>
</html>
