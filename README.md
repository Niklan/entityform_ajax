## EntityForm AJAX

EneitytForm AJAX is a custom Drupal module that add a liitle API for easy to create AJAXify entityform forms.

### How to install

1.  Get a module.
```
git clone https://github.com/Niklan/Entityform-AJAX.git entityform_ajax
```
2. Go to drupal 'Modules'.
3. Enable it.


### API

#### AJAX form loading

~~~javascript
$.get('/entityform_ajax/get', { name: 'callme' }).done(function(form) {
    // Do whatever you want.
});
~~~

