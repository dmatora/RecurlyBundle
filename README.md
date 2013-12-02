RecurlyBundle
=============

A simple Bundle that defines Moovly/Recurly as a Symfony2 service.

Installation
------------

- Add moovly/recurly-bundle to your composer.json.
- Add it to your AppKernel.php
- Configure config.yml to include the RecurlyBundle config
    moovly_recurly:
        subdomain: example
        api_key: abcdefghijk987654321
        serializer: serializer_service # optional, default is jms_serializer
