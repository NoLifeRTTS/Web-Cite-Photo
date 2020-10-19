$(document).ready(function () {
    var price = $('.price');
    let sum = 0;
    for(let i = 0; i <price.length; i++) {
        let prod = Number($(price[i]).text());
        sum += prod;
    }
    $('#sum').val(sum);
});
