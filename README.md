## What is this?

Caldera Forms is missing a time picker, providing instead only a date picker. This plugin can replace the existing datepicker and will add the ability to use a time picker as well. I'm using the **awesome** plugin [flatpickr][flatpickr] for the frontend and shamelessly stealed most of the backend config from the Caldera's built in date picker.

### How to use it

By default, this is set to _append_ a new field type:

![](https://img.iamntz.com/2018-05-20_13h49_21.jpg)

However, you can override the built in field by adding the following line in you `functions.php` file:

```
add_filter('caldera_forms_replace_default_datepicker', '__return_true');
```

![](https://img.iamntz.com/2018-05-20_13h51_27.jpg)


### Other hooks

For now, there are two hooks available, which will allow you to add/edit existing datepicker styles or localization, both of them expecting an associative array (keys are used as values).

```
add_filter('caldera_forms_datepicker_languages', function($lang) {
  $lang = [
    'http://your-path-to-localization-file/en.js' => 'English',
    'http://your-path-to-localization-file/fr.js' => 'French'
  ];

  // OR

  $lang[http://your-path-to-localization-file/fr.js] = 'French';

  return $lang;
});
```

Same goes for the styles, but you'll gonna use `caldera_forms_datepicker_styles` filter instead.

##### A small note about using styles
Please note that changing a datepicker theme will affect **ALL** other flatpickr in the page. Yes, even if they are in a different form or even are not built with Caldera Forms!

#### Todo
- [ ] Add JS hooks for each field;
- [ ] Tweak settings a bit (e.g. hide start/end dates when only timepicker is active);

#### Contribute
You are more than welcome to submit any pull requests if you find bugs or anything to improve!


#### Support me!
You can get [hosting](https://m.do.co/c/c95a44d0e992), [donate](https://www.paypal.me/iamntz/5) or buy me a [gift](http://iamntz.com/wishlist).

[flatpickr]: https://flatpickr.js.org/options/