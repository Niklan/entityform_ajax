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

Then create in your custom module or template.php function
~~~php
/**
 * Implements hook_EFORM_ID_entityform_ajax_alter().
function mymodule_formname_entityform_ajax_alter(&$form) {
  // Do whatever you want with this form.
}
~~~
