<?php
return array (
    'package' => 'Currencylayer',
    'tagline' => 'Reliable Exchange Rates & Currency.',
    'description' => 'Reliable Exchange Rates & Currency.',
    'image' => 'https://logo.clearbit.com/currencylayer.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Currencylayer-package',
    'keywords' => array (
        'API',
        'currency',
        'Currencylayer',
    ),
    'accounts' => array (
        'domain' => 'currencylayer.com',
        'credentials' => array (
            'accessKey',
        ),
    ),
    'blocks' => array (
        array (
            'name' => 'getCurrencies',
            'description' => 'A full list of supported currencies.',
            'args' => array (
                array (
                    'name' => 'accessKey',
                    'type' => 'String',
                    'info' => 'Your API Access Key.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRealTimeExchangeRates',
            'description' => 'Real-time exchange rates.',
            'args' => array (
                array (
                    'name' => 'accessKey',
                    'type' => 'String',
                    'info' => 'Your API Access Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'currencies',
                    'type' => 'String',
                    'info' => 'Comma separated list of currencies.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getHistoricalExchangeRate',
            'description' => 'Historical exchange rate data for every past day of the last 16 years.',
            'args' => array (
                array (
                    'name' => 'accessKey',
                    'type' => 'String',
                    'info' => 'Your API Access Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'date',
                    'type' => 'String',
                    'info' => 'Valid date. Format: YYYY-MM-DD.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getCurrencyConversion',
            'description' => 'Single currency conversion.',
            'args' => array (
                array (
                    'name' => 'accessKey',
                    'type' => 'String',
                    'info' => 'Your API Access Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'fromCurrencie',
                    'type' => 'String',
                    'info' => 'From which currency convert. Currency Code.',
                    'required' => true,
                ),
                array (
                    'name' => 'toCurrencie',
                    'type' => 'String',
                    'info' => 'To what currency convert. Currency Code.',
                    'required' => true,
                ),
                array (
                    'name' => 'amount',
                    'type' => 'Number',
                    'info' => 'The amount you would like to convert.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getCurrenciesChanges',
            'description' => 'Margin and percentage change of one or more currencies.',
            'args' => array (
                array (
                    'name' => 'accessKey',
                    'type' => 'String',
                    'info' => 'Your API Access Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'startDate',
                    'type' => 'String',
                    'info' => 'Valid date. Format: YYYY-MM-DD.',
                    'required' => true,
                ),
                array (
                    'name' => 'endDate',
                    'type' => 'String',
                    'info' => 'Valid date. Format: YYYY-MM-DD.',
                    'required' => true,
                ),
                array (
                    'name' => 'currencies',
                    'type' => 'String',
                    'info' => 'Comma separated list of currencies.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
    ),
    'custom' => array (
        'getCurrencies' => array (
            'dictionary' => array (
                'accessKey' => 'accessKey',
            ),
            'vendorUrl' => 'http://apilayer.net/api/list',
            'method' => 'GET',
        ),
        'getRealTimeExchangeRates' => array (
            'dictionary' => array (
                'accessKey' => 'accessKey',
                'currencies' => 'currencies',
            ),
            'vendorUrl' => 'http://apilayer.net/api/live',
            'method' => 'GET',
        ),
        'getHistoricalExchangeRate' => array (
            'dictionary' => array (
                'accessKey' => 'accessKey',
                'date' => 'date',
            ),
            'vendorUrl' => 'http://apilayer.net/api/historical',
            'method' => 'GET',
        ),
        'getCurrencyConversion' => array (
            'dictionary' => array (
                'accessKey' => 'accessKey',
                'fromCurrencie' => 'from',
                'toCurrencie' => 'to',
                'amount' => 'amount'
            ),
            'vendorUrl' => 'http://apilayer.net/api/convert',
            'method' => 'GET',
        ),
        'getCurrenciesChanges' => array (
            'dictionary' => array (
                'accessKey' => 'accessKey',
                'startDate' => 'start_date',
                'endDate' => 'end_date',
                'currencies' => 'currencies',
            ),
            'vendorUrl' => 'http://apilayer.net/api/change',
            'method' => 'GET',
        ),
    ),
);