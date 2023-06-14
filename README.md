# Buto-Plugin-ElementStyle
Add style data to element via element parameter settings/methods.

## background_cover
Add background image with cover attributes to body.
```
type: body
settings:
  methods:
    -
      plugin: element/style
      method: background_cover
      data:
        src: /theme/[theme]/background.jpg
```
If attribute/style is set as a string it will be overrided.
