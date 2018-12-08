# Geo plugin for Croogo

A Croogo plugin to enable Google Maps. Wraps the plugin dereuromark/cakephp-geo.

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

```
composer require goclearsky/croogo-geo
```

## Migration

Use `cake migrations` to add the api key setting, and to seed some sample data.
```
cake migrations migrate -p ClearSky/CroogoGeo
cake migrations seed -p ClearSky/CroogoGeo
```

## Use

Set your Google Maps API key under Settings > Service

Enable the Sample Map Block to see how to include a map in a block.

Publish the Sample Map Blog to see how to include a map in a node post.


## Contributing

All suggestions and feedback are welcome.

## Limitations / ToDo's

Only support is for creating a dynamic Google Map with markers.
