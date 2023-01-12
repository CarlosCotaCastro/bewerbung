# My CV

## Requirements

- php7.4 (should work with newer versions.)
- node.js

## Run locally

``` bash
npm install
php -S localhost:8000
```

## Compile Stylus with grunt

### For local environment

Run
``` bash
grunt
```

It should open http://localhost:8000 in your browser.
It also starts a watch command, and a live-reload-server in the local environment.

### For production

```
grunt stylus
```
