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


#### Callback for altering AJAX form before process.

~~~javascript
$.get('/entityform_ajax/get', { name: 'callme', callback: 'MYMODULE_ajax_form_alter' }).done(function(form) {
    // Do whatever you want.
});
~~~

Then create in your custom module or template.php function
~~~php
function MYMODULE_ajax_form_alter(&$form) {
  // Do whatever you want with this form.
  // And dont forget, you can access $_GET variable. You easly can send
  // values from javascript in it, just add to $.get object another key: value
  // and access it in php $_GET['key'] -> value.
}
~~~