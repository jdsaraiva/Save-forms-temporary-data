# Save-forms-temporary-data
By now you should have come to a point were you already coded some forms.
Used HTML to structure your form, JavaScript to get the data and PHP to save it, right ?

Maybe you have come to a point where you have a consistent form, with several inputs and options, however if this data isn't validated on the server side the page will refresh and all the users inputs will be lost... obviously causing some frustration.

With this simple snippets my goal is to show you how to implement an almost generic form functions that will fetch the inputs values, save them on a temporary session variable and if something goes wrong the values are loaded again on the form. 
This way you can have a safer server side validation and you visitors won't have to refill the values if something goes wrong.
