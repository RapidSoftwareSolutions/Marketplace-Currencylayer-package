[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Currencylayer/functions?utm_source=RapidAPIGitHub_CurrencylayerFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Currencylayer Package
Reliable Exchange Rates & Currency.
* Domain: currencylayer.com
* Credentials: accessKey

## How to get credentials: 
0. Sign up in [Currencylayer](https://currencylayer.com/product).
1. Navigate to [Quickstart page](https://currencylayer.com/quickstart)
2. Use Access Key as credentials.

## Currencylayer.getCurrencies
A full list of supported currencies.

| Field    | Type       | Description
|----------|------------|----------
| accessKey| credentials| Your API Access Key.

## Currencylayer.getRealTimeExchangeRates
Real-time exchange rates.

| Field     | Type       | Description
|-----------|------------|----------
| accessKey | credentials| Your API Access Key.
| currencies| String     | Comma separated list of currencies.

## Currencylayer.getHistoricalExchangeRate
Historical exchange rate data for every past day of the last 16 years.

| Field    | Type       | Description
|----------|------------|----------
| accessKey| credentials| Your API Access Key.
| date     | String     | Valid date. Format: YYYY-MM-DD.

## Currencylayer.getCurrencyConversion
Single currency conversion.

| Field        | Type       | Description
|--------------|------------|----------
| accessKey    | credentials| Your API Access Key.
| fromCurrency| String     | From which currency convert. Currency Code.
| toCurrency  | String     | To what currency convert. Currency Code.
| amount       | Number     | The amount you would like to convert.

## Currencylayer.getCurrenciesChanges
Margin and percentage change of one or more currencies.

| Field     | Type       | Description
|-----------|------------|----------
| accessKey | credentials| Your API Access Key.
| startDate | String     | Valid date. Format: YYYY-MM-DD.
| endDate   | String     | Valid date. Format: YYYY-MM-DD.
| currencies| String     | Comma separated list of currencies.

