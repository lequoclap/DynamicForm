# DynamicForm
Laravel Form 


## Task list
- [x] create composer.json 
- [ ] shorten namespace
- [ ] move Utils function into helper 
- [ ] create more fields: Hashtags, Datetime, DatetimeRange
- [ ] ...


## How to add DynamicForm into your project:
- Adding below lines into composer.json 
    ```
      "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/lequoclap/DynamicForm.git"
        }
       ],
    ```

- Adding below lines into config/app.php

    ```
    DynamicFormManager\DynamicFormServiceProvider::class
    ``` 

