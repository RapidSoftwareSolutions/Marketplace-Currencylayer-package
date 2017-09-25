[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Currencylayer/functions?utm_source=RapidAPIGitHub_CurrencylayerFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Currencylayer Package
Reliable Exchange Rates & Currency.
* Domain: currencylayer.com
* Credentials: accessKey

## How to get credentials: 
1. Sign up for a [Currencylayer](https://currencylayer.com/product) account
2. Navigate to [Quickstart page](https://currencylayer.com/quickstart)
3. Use Access Key as credentials

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

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
| currencies| List       | List of currencies.

## Currencylayer.getHistoricalExchangeRate
Historical exchange rate data for every past day of the last 16 years.

| Field    | Type       | Description
|----------|------------|----------
| accessKey| credentials| Your API Access Key.
| date     | DatePicker | Valid date. Format: YYYY-MM-DD.

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
| startDate | DatePicker | Valid date. Format: YYYY-MM-DD.
| endDate   | DatePicker | Valid date. Format: YYYY-MM-DD.
| currencies| List       | List of currencies.

