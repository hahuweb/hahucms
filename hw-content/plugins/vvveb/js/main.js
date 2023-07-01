/**
 * Main
 * 
 * Main java script file
 */

jQuery.fn.cleanWhitespace = function () {
    this.contents().filter(
        function () {
            return (this.nodeType == 3 && !/\S/.test(this.nodeValue));
        })
        .remove();
    return this;
}


$('document').ready(function () {

    $('document').ready(function () {
        $('body').cleanWhitespace();
    });
});